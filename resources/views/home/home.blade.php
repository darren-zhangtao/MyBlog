<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Have Fun</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ mix('css/home/home.css') }}">
</head>
<body>
<div class="container">
    <div class="nav">
        <div class="logo inline-block"><img src="/image/home/logo.png"></div>
        <div class="text inline-block article"><a href="{{route('article.getAll')}}">文章</a></div>
        <div class="text inline-block picture"><a href="{{route('picture.getAll')}}">图片</a></div>
        <div class="text inline-block about"><a href="/about">关于</a></div>
        <div class="inline-block search"><img src="/image/home/search.png"></div>
        <div class="inline-block upload-picture"><img src="/image/home/picture.png"></div>
        <div class="inline-block add-article"><img src="/image/home/article.png"></div>
    </div>

    <div class="content">
        <div class="inline-block left">
            <img src="/image/home/left_img.png">
        </div>
        <div class="inline-block middle">
            <div class="top">
                <div class="inline-block middle-1"><img src="/image/home/right_1.png"></div>
                <div class="inline-block"><img src="/image/home/right_2.png"></div>
            </div>
            <div>
                <div class="inline-block middle-3"><img src="/image/home/right_3.png"></div>
                <div class="inline-block"><img src="/image/home/right_4.png"></div>
            </div>
        </div>
        <div class="inline-block right">
            <div class="top">
                <div>
                    <p class="article-title">composer自动加载</p>
                    <p class="article-content">通过在composer.json文件中配置需要加载的类、命名空间，通过执行composer install 命令自动生成类名和对应的类文件的映射，而后通过注册loadClass方法，实现对composer管理的诸多类的自动加载； 如何在composer.json文件中配置类和命名空间 ？ 共有四种方式：PSR-0（网上查到的例子和PSR-4没有看出太大区别，且已不推荐使用)</p>
                </div>
            </div>
            <div class="bottom">
                <div>
                    <p class="article-title">Linux文件存储之inode、硬链接、软链接</p>
                    <p class="article-content">如何在composer.json文件中配置类和命名空间 ？ 共有四种方式：PSR-0（网上查到的例子和PSR-4没有看出</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="inline-block start">联系方式</div>
        <div class="inline-block">lingguo.zero@gmail.com</div>
        <div class="inline-block">taozhang.tt@gmail.com</div>
        <div class="inline-block">兴趣使然的小站</div>
        <div class="inline-block">just have fun</div>
    </div>
</div>

</body>

</html>