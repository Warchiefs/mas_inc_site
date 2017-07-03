<html lang="zxx"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $post->meta_description }}">
    <meta name="author" content="https://vk.com/muradovalex">
    <title>{{ $post->meta_title }}</title>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/material-kit.css" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" href="/img/favicon.ico">
    <!-- Colors -->
    <link rel="stylesheet" href="/css/colors/black.css">
    <link id="skin-css" rel="stylesheet" href="/css/colors/indigo.css"></head>

<body class="not-onepage">
<!-- Header  -->
<div class="header">
    <nav id="sticky-nav" class="navbar navbar-custom sticky navbar-center">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Открыть меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="" href="#up">
                    <img src="/img/logo.png" alt="logo" class="img-responsive navbar-brand">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ url('/#about') }}">О Нас</a>
                    </li>
                    <li>
                        <a href="{{ url('/#services') }}">Направления</a>
                    </li>
                    <li>
                        <a href="{{ url('/#articles') }}">Публикации</a>
                    </li>
                    <li>
                        <a href="{{ url('/#team') }}">Команда</a>
                    </li>
                    <li>
                        <a href="{{ url('/#blog') }}">Блог</a>
                    </li>
                    <li>
                        <a href="{{ url('/#contact') }}">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="single-page-header header-filter" data-parallax="active" style="background-image: url('/img/bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h1 class="title">{{ $post->header }}</h1>
                    <br>
                    <div class="post-author">
                        <img src="{{ url($post->author->image) }}" alt="{{ $post->author->name }}" class="img-responsive img-circle">
                        <p>
                            <b>{{ $post->author->name }}</b><br><i>{{ $post->author->department }}</i>
                            <br><i>{{ (new \DateTime($post->created_at))->format('d.m.Y') }} </i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header -->
<div class="main">
    <div class="container">
        <div class="section section-text">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
@include('layouts.footer')
<!-- ./Footer section -->
<!--   Core JS Files   -->
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/material.min.js"></script>
<!-- Jquery easing -->
<script type="text/javascript" src="/js/jquery.easing.1.3.min.js"></script>
<!-- Plugin For Google Maps -->
<!-- Typing text -->
<script src="/js/typed.min.js" type="text/javascript"></script>
<!-- sticky -->
<script src="/js/jquery.sticky.js" type="text/javascript"></script>
<!-- owl  carousel -->
<script src="/js/owl.carousel.min.js" type="text/javascript"></script>
<!-- contact form -->
<script type="text/javascript" src="/js/jqBootstrapValidation.js"></script>
<!-- <script src="js/modernizr.js" type="text/javascript"></script> -->
<script src="/js/main.js" type="text/javascript"></script>


</body></html>