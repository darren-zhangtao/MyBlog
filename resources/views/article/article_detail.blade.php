<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'TT') - Have Fun</title>
    <link rel="stylesheet" href="{{ mix('css/default/head.css') }}">
    <link rel="stylesheet" href="{{ mix('css/article/article_detail.css') }}">
</head>
<body>

@include('common._head')

<div class="content-container">
    <div class="article-detail">
        <div class="title">
            Linux文件存储之inode、硬链接、软链接
        </div>
        <div class="information">
            <div class="user-name inline-block">
                T
            </div>
            <div class="date inline-block">
                2018-11-24 18:32:56
            </div>
            <div class="tag inline-block">
                <div class="tag-name inline-block">杂项</div>
                <div class="tag-name inline-block margin-left">Linux</div>
                <div class="tag-name inline-block margin-left">Nodejs</div>
            </div>
        </div>
        <div class="content">
            {!! $mark_down !!}
        </div>
    </div>
</div>

</body>
</html>