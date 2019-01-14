<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Have Fun</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ URL::asset('css/home/home.css') }}">
</head>
<body>
    <div class="nav">
        <div class="logo inline-block"></div>
        <div class="text inline-block article">文章</div>
        <div class="text inline-block picture">图片</div>
        <div class="text inline-block about">关于</div>
        <div class="inline-block search"></div>
        <div class="inline-block upload-picture"></div>
        <div class="inline-block add-article"></div>
    </div>

    <div class="content">
        <div class="inline-block left">
            <img src="/image/home/left.svg">
        </div>
        <div class="inline-block right">
            <img src="/image/home/right.svg">
        </div>
        <div class="inline-block">
            <div class="top"></div>
            <div class="bottom"></div>
        </div>
    </div>

</body>

</html>