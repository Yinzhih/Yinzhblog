<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="author" content="baijunyao">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('css')
</head>
<body>
<!-- 顶部导航开始 -->
<header id="b-public-nav" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost:8000/">
                <div class="hidden-xs b-nav-background"></div>
                <ul class="b-logo-code">
                    <li class="b-lc-start">&lt;?php</li>
                    <li class="b-lc-echo">echo</li>
                </ul>
                <p class="b-logo-word">'Yinzh博客'</p>
                <p class="b-logo-end">;</p>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav b-nav-parent">
                <li class="hidden-xs b-nav-mobile" style="width: 48px; left: 0px;"></li>
                <li class="b-nav-cname   b-nav-active ">
                    <a href="http://localhost:8000/">首页</a>
                </li>
                <li class="b-nav-cname ">
                    <a href="http://localhost:8000/category/1">php</a>
                </li>
                <!-- <li class="b-nav-cname ">
                    <a href="http://localhost:8000/chat">随言碎语</a>
                </li>
                <li class="b-nav-cname ">
                    <a href="http://localhost:8000/git">开源项目</a>
                </li> -->
            </ul>
            <ul id="b-login-word" class="nav navbar-nav navbar-right">
                <li class="b-nav-cname b-nav-login">
                    <div class="hidden-xs b-login-mobile"></div>
                    <a class="js-login-btn" href="javascript:;">登录</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- 顶部导航结束 -->

<div class="b-h-70"></div>

<div id="b-content" class="container">
    <div class="row">
    @yield('content')
    <!-- 通用右部区域开始 -->
        <div id="b-public-right" class="col-lg-4 hidden-xs hidden-sm hidden-md">
            <div class="b-search">
                <form class="form-inline" role="form" action="http://localhost:8000/search" method="post">
                    <input type="hidden" name="_token" value="3ZCmjbeKQriFvkDQmqtZfN9Ln6loh9TYt7vNL8wx">
                    <input class="b-search-text" type="text" name="wd">
                    <input class="b-search-submit" type="submit" value="全站搜索">
                </form>
            </div>
            <!-- <div class="b-qun">
                <h4 class="b-title">加入组织</h4>
                <ul class="b-all-tname">
                    <li class="b-qun-or-code">
                        <img src="./images/default.png" alt="QQ">
                    </li>
                    <li class="b-qun-word">
                        <p class="b-qun-nuber">
                            1. 手Q扫左侧二维码
                        </p>
                        <p class="b-qun-nuber">
                            2. 搜Q群：88199093
                        </p>
                        <p class="b-qun-code">
                            3. 点击<a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=bba3fea90444ee6caf1fb1366027873fe14e86bada254d41ce67768fadd729ee"><img border="0" src="./images/group.png" alt="Yinzh博客群" title="Yinzh博客群"></a>
                        </p>
                        <p class="b-qun-article">
                            <a href="http://localhost:8000/article/1" target="_blank"> 写给 thinkphp 开发者的 laravel 系列教程 (一) 序言</a>
                        </p>
                    </li>
                </ul>
            </div> -->
            <div class="b-tags">
                <h4 class="b-title">热门啊标签</h4>
                <ul class="b-all-tname">
                    <li class="b-tname">
                        <a class="tstyle-1" href="http://localhost:8000/tag/1">laravel (1)</a>
                    </li>
                </ul>
            </div>
            <div class="b-recommend">
                <h4 class="b-title">置顶推荐</h4>
                <p class="b-recommend-p">
                    <a class="b-recommend-a" href="http://localhost:8000/article/1" target="_blank"><span class="fa fa-th-list b-black"></span>  写给 thinkphp 开发者的 laravel 系列教程 (一) 序言</a>
                </p>
            </div>
            <div class="b-comment-list">
                <h4 class="b-title">最新评论</h4>
                <div>
                    <ul class="b-new-comment  b-new-commit-first ">
                        <img class="b-head-img js-head-img" src="./images/default.jpg"  alt="Yinzh">
                        <li class="b-nickname">
                            Yinzh<span>2017-07-16 07:35:12</span>
                        </li>
                        <li class="b-nc-article">
                            在<a href="http://localhost:8000/article/1" target="_blank"> 写给 thinkphp 开发者的 la...</a>中评论
                        </li>
                        <li class="b-content">
                            评论的内容
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="b-link">
                <h4 class="b-title">友情链接</h4>
                <p>
                    <a class="b-link-a" href="https://baijunyao.com/" target="_blank"><span class="fa fa-link b-black"></span> Yinzh博客</a>
                    <a class="b-link-a" href="http://localhost:8000/site"><span class="fa fa-link b-black"></span> 更多 </a>
                </p>
            </div> -->
        </div>
        <!-- 通用右部区域结束 -->
    </div>

</div>
<!-- 主体部分结束 -->

<!-- 通用底部开始 -->
<footer id="b-foot">
    <div class="container">
        <div class="row b-content">
            <dl class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <dt>权益</dt>
                <dd>许可协议：<a href="https://creativecommons.org/licenses/by-nc/4.0/deed.zh">CC BY-NC 4.0</a></dd>
                <dd>版权所有：© 2020-2023 localhost</dd>
                <dd>网站备案：渝ICP备20003611号</dd>
                <dd>联系邮箱：<a href="mailto:13677624796@163.com">13677624796@163.com</a></dd>
            </dl>

            <dl class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <dt>架构</dt>
                <dd>项目名称：<a rel="nofollow" href="https://github.com/Yinzhih/Yinzhblog" target="_blank">laravel-YinzhBlog</a></dd>
                <dd>版本分支：v1.0.0.0-master</dd>
                <dd>项目作者：<a href="https://Yinzh.top/">Yinzh</a></dd>
                <dd>主题作者：<a href="https://Yinzh.top/">Yinzh</a></dd>
            </dl>

            <dl class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <dt>统计</dt>
                <dd>文章总数：1</dd>
                <dd>评论总数：1</dd>
                <dd>登录用户：1</dd>
                <dd>随言碎语：1</dd>
            </dl>
        </div>
    </div>
    <a class="go-top fa fa-angle-up animated jello" href="javascript:;"></a>
</footer>
<!-- 通用底部结束 -->

<!-- 登录模态框开始 -->
<div class="modal fade" id="b-modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title b-ta-center" id="myModalLabel">无需注册，用以下帐号即可直接登录</h4>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12 b-login-row">
                <ul class="row">
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                        <a href="http://localhost:8000/auth/oauth/redirectToProvider/qq"><img src="./images/qq-login.png" alt="QQ登录" title="QQ登录"></a>
                    </li>
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                        <a href="http://localhost:8000/auth/oauth/redirectToProvider/weibo"><img src="./images/sina-login.png" alt="微博登录" title="微博登录"></a>
                    </li>
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                        <a href="http://localhost:8000/auth/oauth/redirectToProvider/github"><img src="./images/github-login.jpg" alt="github登录" title="github登录"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 登录模态框结束 -->

<script src="js/app.js"></script>

@yield('js')
</body>
</html>
