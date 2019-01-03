<?php

namespace App\Http\Controllers\Home;

use Cache;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 首页
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // 获取文章列表数据
        $article = Article::select(
            'id', 'category_id', 'title',
            'author', 'description', 'cover',
            'is_top', 'created_at'
        )
            ->orderBy('created_at', 'desc')
            ->with(['category', 'tags'])
            ->paginate(10);
        $head = [
            'title' => config('bjyblog.head.title'),
            'keywords' => config('bjyblog.head.keywords'),
            'description' => config('bjyblog.head.description'),
        ];
        $assign = [
            'category_id' => 'index',
            'article' => $article,
            'head' => $head,
            'tagName' => ''
        ];
        return view('home.index.index', $assign);
    }

    /**
     * 文章详情
     *
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function article($id, Request $request)
    {
        // 获取文章数据
        $data = Article::with(['category', 'tags'])->find($id);
        if (is_null($data)) {
            return abort(404);
        }
        // 同一个用户访问同一篇文章每天只增加1个访问量  使用 ip+id 作为 key 判别
        $ipAndId = 'articleRequestList'.$request->ip().':'.$id;
        if (!Cache::has($ipAndId)) {
            cache([$ipAndId => ''], 1440);
            // 文章点击量+1
            $data->increment('click');
        }

        // 获取上一篇
        $prev = Article::select('id', 'title')
            ->orderBy('created_at', 'desc')
            ->where('id', '<', $id)
            ->limit(1)
            ->first();

        // 获取下一篇
        $next = Article::select('id', 'title')
            ->orderBy('created_at', 'asc')
            ->where('id', '>', $id)
            ->limit(1)
            ->first();

        // 获取评论
//        $comment = $commentModel->getDataByArticleId($id);
        // p($comment);die;
        $category_id = $data->category->id;
        $assign = compact('category_id', 'data', 'prev', 'next');
        return view('home.index.article', $assign);
    }
}
