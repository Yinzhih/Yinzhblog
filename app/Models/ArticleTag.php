<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Bace
{
    /**
     * 为文章批量插入标签
     *
     * @param $article_id
     * @param $tag_ids
     */
    public function addTagIds($article_id, $tag_ids)
    {
        // 组合批量插入的数据
        $data = [];
        foreach ($tag_ids as $k => $v) {
            $data[] = [
                'article_id' => $article_id,
                'tag_id' => $v
            ];
        }
        $this->insert($data);
    }
}
