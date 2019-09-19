<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'TT') - Have Fun</title>
    <link rel="stylesheet" href="{{ mix('css/default/head.css') }}">
    <link rel="stylesheet" href="{{ mix('css/article/article_list.css') }}">
</head>
<body>

@include('common._head')

<div class="content-container">
    <div class="article-content">
        <div class="content-left inline-block">
            <div class="tag shadow">
                @foreach ($category_list as $user_name => $categories)
                    <div class="user-name">{{$user_name}}</div>
                        @foreach ($categories as $category)
                            <div class="tag-name">{{$category}}</div>
                        @endforeach
                @endforeach
            </div>

        </div>
        <div class="content-right inline-block">
            @foreach ($article_list as $article)
                <div class="article-abstract shadow clear">
                    <div class="tag-date">
                        <span class="tag">{{$article->cat_name}}</span>
                        <span class="date">{{$article->created_at}}</span>
                    </div>
                    <div class="title-abstract-picture">
                        <div class="title-abstract inline-block">
                            <div class="title"><a href="{{route('article.getById', array('article_id' => $article->id))}}">{{$article->title}}</a></div>
                            <div class="abstract"><a href="{{route('article.getById', array('article_id' => $article->id))}}">{{$article->abstract}}</a></div>
                        </div>
                        <div class="picture inline-block">
                            <img src="/image/article/article-list.png">
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="article-abstract shadow clear">
                <div class="tag-date">
                    <span class="tag">杂项</span>
                    <span class="date">2018-11-24 18:32:56</span>
                </div>
                <div class="title-abstract-picture">
                    <div class="title-abstract inline-block">
                        <div class="title">LNMP Laravel环境搭建</div>
                        <div class="abstract">需求：爬取 DB 网站所有的商品 ID及图片 方案：使用 Nightmare 踩坑公司电脑安装的 win10 系统，写好的 脚本代码带回家在自己的笔记本（Ubuntu18.04系统）上执行无结果且无报错，Google 半个下午未找到合适答案，但大致可以定位问题原因：Nightmare 未检测到图形接口；出去转了一下午，晚上抱着试试的心态查了下笔记本的驱动果然没有安</div>
                    </div>
                    <div class="picture">
                        <img src="/image/article/article-list.png">
                    </div>
                </div>
            </div>

            <div class="article-abstract shadow clear">
                <div class="tag-date">
                    <span class="tag">设计模式</span>
                    <span class="date">2018-11-24 18:32:56</span>
                </div>
                <div class="title-abstract-picture">
                    <div class="title-abstract inline-block">
                        <div class="title">Ubuntu杂项</div>
                        <div class="abstract">##1， alt + tab键调整https://ubuntuforums.org/showthread.php?t=2211863sudo apt-get install compizconfig-settings-managersudo apt-get install compiz-plugins Open compizconfig-settings-manager with alt-F2, type ccsm.Scroll down to Ubuntu Unity Plugin”. Choose the tab “Switcher”. Disable the alt-tab and shift-alt-tab</div>
                    </div>
                    <div class="picture">
                        <img src="/image/article/article-list.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>