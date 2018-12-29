@extends('layouts.admin')

@section('title', '管理后台首页')

@section('nav', '后台首页')

@section('description', '后台管理首页')

@section('css')
    <link href="{{ asset('statics/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <style>
        .bjy-img{
            width: 52px;
        }
        .bjy-content{
            height: 352px;
        }
        ul.widget_tally .month{
            width: 60%;
        }
        ul.widget_tally .count{
            width: 40%;
        }
    </style>
@endsection

@section('content')

    <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-comments-o"></i></div>
                <div class="count">0</div>
                <h3>总评论数</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i></div>
                <div class="count">0</div>
                <h3>第三方用户</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-book"></i></div>
                <div class="count">0</div>
                <h3>原创文章</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-wechat"></i></div>
                <div class="count">0</div>
                <h3>随言碎语</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>最新登录的用户<small>top 5</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <article class="media event">
                        <a class="pull-left">
                            <img class="bjy-img" src="./images/default.jpg" alt="">
                        </a>
                        <div class="media-body">
                            Yinzh
                            <p>
                                登录次数：1 <br>
                                登录时间：2018-12-25
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>最新评论 <small>top5</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <article class="media event">
                        <a class="pull-left">
                            <img class="bjy-img" src="./images/default.jpg" alt="">
                        </a>
                        <div class="media-body">
                            Yinzh
                            <p>
                                <a href="">帖子类容.......</a>
                                <br>
                                评论的类容
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>环境 <small>php</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content bjy-content">
                    <ul class="list-inline widget_tally">
                        <li>
                            <p>
                                <span class="month">博客版本 </span>
                                <span class="count">v5.5.9.0 <a href="" target="_blank">更新</a></span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="month">操作系统 </span>
                                <span class="count">Linux</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="month">环境 </span>
                                <span class="count">nginx/1.15.0</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="month">php </span>
                                <span class="count">7.2.9-1+ubuntu18.04.1+deb.sury.org+1</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="month">mysql </span>
                                <span class="count">5.7.23-0ubuntu0.18.04.1</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
