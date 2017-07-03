<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multiagent systems inc.">
    <meta name="author" content="https://vk.com/muradovalex">
    <title>MAS Inc.</title>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/css/academicons-1.8.0/css/academicons.min.css" rel="stylesheet" />
    <link href="/css/material-kit.css" rel="stylesheet" />
    <link href="/css/owl.carousel.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <link href="/css/custom.css" rel="stylesheet" />
    <!-- favicon -->
    <link rel="icon" href="/img/favicon.png">
    <!-- Colors -->
    <link id="skin-css" rel="stylesheet" href="/css/colors/black.css">
</head>

<body id="up">
<!-- Preloader -->
<div id="preloader">
    <div class="spinner"></div>
</div>
<!-- Page hero -->
<div class="" id="headers">
    @include('layouts.header')
</div>
<!-- About -->
<section class="section" id="about">
    <div class="container">
        <div class="section-heading text-center wow fadeInUp">
            <h2 class="title">О Нас</h2>
            <h5 class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio blanditiis similique deleniti qui error in.</h5>
        </div>
        <!-- first row -->
        <div class="row">
            <div class="col-md-4 wow fadeInUp">
                <div class="info info-horizontal">
                    <div class="icon icon-info">
                        <i class="fa fa-gift"></i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Creative Design</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet nostrum voluptatum, facere saepe aut repudiandae dolor tempora nemo.
                        </p>
                        <a href="#up">More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="info info-horizontal">
                    <div class="icon icon-danger">
                        <i class="fa fa-heartbeat"></i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Inspiring</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo velit fugiat fugit, soluta quae, reiciendis id vitae necessitatibus.
                        </p>
                        <a href="#up">More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="info info-horizontal">
                    <div class="icon icon-success">
                        <i class="fa fa-cubes"></i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Material Design</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic libero repudiandae architecto sint, excepturi cum! Ipsum, aspernatur, corporis.
                        </p>
                        <a href="#up">More...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <img src="img/about-img.png" alt="" class="img-responsive">
        </div>
        <!-- End first row -->
    </div>
</section>
<!-- End about -->
<!-- services -->
<section class="section services bg-gray" id="services">
    <div class="container">
        <div class="section-heading text-center wow fadeInUp">
            <h2 class="title text-center">Направления деятельности</h2>
            <ul class="nav nav-pills nav-pills-primary">
                <li class="active"><a href="#web-design" data-toggle="tab">Web Design</a></li>
                <li><a href="#web-dev" data-toggle="tab">Web Development</a></li>
                <li><a href="#desktop" data-toggle="tab">Desktop Apps</a></li>
            </ul>
            <br>
        </div>
        <div>
            <div class="tab-content tab-space">
                <!-- tab web-design -->
                <div class="tab-pane active" id="web-design">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img-container">
                                <img src="img/web-design.png" alt="Feature image" class="feature-img img-responsive" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Responsive Design</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate hic odit nisi quo excepturi laudantium?</p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="fa fa-diamond"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Multi-purpose</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis unde atque voluptate commodi saepe!</p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="fa fa-trophy"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">High Quality</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolor dolorem animi officiis quisquam quia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab mobile -->
                <!-- tab web-dev -->
                <div class="tab-pane" id="web-dev">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="img-container">
                                <img src="img/web-dev.png" alt="Feature image" class="feature-img img-responsive" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="fa fa-code"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Well Coded</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate hic odit nisi quo excepturi laudantium?</p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="fa fa-gears"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">PHP Application</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate hic odit nisi quo excepturi laudantium?</p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="fa fa-laptop"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">SAAS Application</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis unde atque voluptate commodi saepe!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab tablet -->
                <!-- tab desktop -->
                <div class="tab-pane" id="desktop">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="img-container">
                                <img src="img/mac-app.png" alt="Feature image" class="feature-img img-responsive" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Desktop App</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate hic odit nisi quo excepturi laudantium?</p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="fa fa-heart-o"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Mac App</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis unde atque voluptate commodi saepe!</p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="fa fa-code"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Code Quality</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolor dolorem animi officiis quisquam quia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab desktop -->
            </div>
        </div>
    </div>
    <!-- End container -->
</section>
<!-- End services -->
<!-- Blog news -->
<section class="blog" id="articles">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="title">Научные публикации</h2>
            <h5 class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h5>
        </div>
        <div class="owl-carousel" id="articles-carousel">
            @foreach($articles as $article)
                <div class="item">
                    <div class="card card-blog">
                        <div class="content">
                            <p> <i class="fa fa-book" aria-hidden="true"></i> {{ $article->published_at }}</p>
                            <h4 class="card-title">
                                <a target="_blank" href="{{ $article->link }}">{{ $article->header }}</a>
                            </h4>
                            <p class="card-description">
                                {{ $article->authors }} <br><a target="_blank" class="btn btn-primary" href="{{ $article->link }}"> Открыть публикацию </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Team -->
<section class="section bg-gray" id="team">
    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center wow fadeInUp">
                    <h2 class="title">Наша команда</h2>
                    <h5 class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestiae minima pariatur voluptatum ipsum?</h5>
                </div>
            </div>
            <div class="row">
                @foreach($users as $user)
                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="javascript:;">
                                    <img class="img" src="{{ $user->image }}" alt="{{ $user->name }}" />
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="card-title">{{ $user->name }}</h4>
                                <h6 class="category text-muted">{{ $user->department }}</h6>
                                <p class="card-description">
                                    {{ $user->about }}
                                </p>
                                <div class="footer">
                                    <a target="_blank" href="{{ $user->vk }}" class="btn btn-just-icon btn-facebook btn-round">
                                        <i class="fa fa-vk"></i>
                                    </a>
                                    <a target="_blank" href="{{ $user->researchgate }}" class="btn btn-just-icon btn-success btn-round">
                                        <i class="ai ai-researchgate"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End team -->
<!-- Blog news -->
<section class="blog" id="blog">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="title">Последние новости</h2>
            <h5 class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h5>
        </div>
        <div class="owl-carousel" id="blog-carousel">
            @foreach($posts as $post)
                <div class="item">
                    <div class="card card-blog">
                        <div class="card-image">
                            <a href="blog-single.html">
                                <img class="img img-raised img-responsive" src="{{ $post->thumbnail }}" alt="{{ $post->header }}" />
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="category text-info">{{ $post->direction }}</h6>
                            <p> <i class="fa fa-clock-o"></i> {{ (new \DateTime($post->created_at))->format('d.m.Y') }}</p>
                            <h4 class="card-title">
                                <a href="{{ url('/blog/'.$post->slug) }}">{{ $post->header }}</a>
                            </h4>
                            <p class="card-description">
                                {!! str_limit($post->body, 150) !!}
                                <br> <a class="btn btn-primary" href="{{ url('/blog/'.$post->slug) }}"> Читать дальше </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Blog news -->
<!-- Contact -->
<section class="section section-image" id="contact">
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="title">Get in Touch</h2>
                    <p class="details">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sit maxime numquam perferendis, deleniti, unde corporis nisi quia iste eum!
                    </p>
                    <div class="row">
                        <div class="col col-sm-6 col-sm-offset-0 col-xs-11 col-xs-offset-1 col-md-12">
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Find our office</h4>
                                    <p>
                                        PO Box 16122,
                                        <br> Collins Street West,
                                        <br> Victoria 8007, Australia
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-6 col-sm-offset-0 col-xs-11 col-xs-offset-1 col-md-12">
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Contact us</h4>
                                    <p> Jane Deo
                                        <br> 1-123-456-7890
                                        <br> office@xyz.com
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="col-md-5 col-md-offset-2">
                    <div class="card card-contact">
                        <form id="contactForm" method="post" novalidate>
                            <div class="header header-raised header-primary text-center">
                                <h4 class="card-title">Contact Us</h4>
                            </div>
                            <div class="card-layer"></div>
                            <div class="content">
                                <div id="success"></div>
                                <div class="form-group label-floating">
                                    <label class="control-label">First name <i class="help-block text-danger"></i></label>
                                    <input type="text" name="name" id="name" class="form-control" required data-validation-required-message="Please enter your name.">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Email address <i class="help-block text-danger"></i></label>
                                    <input type="email" name="email" id="email" class="form-control" required data-validation-required-message="Please enter your email address." />
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Your message <i class="help-block text-danger"></i></label>
                                    <textarea name="message" class="form-control" rows="6" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes"> I'm not a robot
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary pull-right">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact -->
<!-- Subscribe -->
<div class="subscribe bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="title">Subscribte to our news letter</h3>
            </div>
            <div class="col-md-6 text-right">
                <form method="post" id="subscribe">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                <div class="form-group is-empty">
                                    <input type="email" value="" placeholder="Your Email..." class="form-control"><span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-info">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End subscribe -->
@include('layouts.footer')
<!-- End footer -->
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
<!-- Partilce js -->
<script type="text/javascript" src="/js/particles.js"></script>
<!-- main scripts -->
<script src="/js/main.js" type="text/javascript"></script>
</body>

</html>
