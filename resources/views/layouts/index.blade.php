<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/fav3.png">
    <title>Happy Trip Korea</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/shortcodes.css" rel="stylesheet">
    <link href="css/style-wp.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <!-- only for demo -->
    <link href="css/demo-settings.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="boxed active">
    <div class="top-bar">
        <div class="container">
            <!-- main menu -->
            <nav class="top-menu">
                <label for="show-top-menu" class="show-menu"><i class="fa fa-bars"></i></label>
                <input type="checkbox" id="show-top-menu">
            </nav>
            <!-- end main menu -->
            <span class="top-bar-socials">
					<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
					<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
					<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
					<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
					</span>
        </div>
        <!-- end container -->
    </div>
    <!-- end topbar -->
    <!-- header (logo section) -->
    <header class="header">
        <div class="container" style="width: 200px; display: block; margin-left: auto; margin-right: auto">
            <div style="width: 150px;" class="logo"><a href="index.html"><img id="logo" src="images/fav2.png" alt="logo"></a></div>
           {{--<h1>Haute Couture</h1>--}}
                {{--<div class="description">black is new red</div>--}}
            <div class="ad-728x90"><a href="index.html"><img src="images/ad728x90.png" alt="ad728x90"></a></div>
        </div>
    </header>
    <!-- end header (logo section) -->
    <!-- main menu -->
    <nav class="main-menu">
        <div class="container">
            <label for="show-menu" class="show-menu"><i class="fa fa-bars"></i></label>
            <input type="checkbox" id="show-menu">
            <ul class="menu" id="main-mobile-menu">
                <li>
                    <a href="/index"><i class="fa fa-home"></i> Home </a><span class="sub_menu_toggle"></span>
                </li>
                <li>
                    <a href="/blog"><i class="fa fa-pencil-square-o"></i> Blog </a><span class="sub_menu_toggle"></span>
                </li>
                <li>
                    <a href="/about"><i class="fa fa-info-circle "></i> Tentang Kami </a><span
                            class="sub_menu_toggle"></span>
                </li>
                <li>
                    <a href="/contact"><i class="fa fa-phone"></i> Hubungi </a><span class="sub_menu_toggle"></span>
                </li>
            </ul>
        </div>
    </nav>

@yield('content')

<!-- end Instagram Widget Section -->
    <footer class="footer">
        <div class="footer-menu">
            <ul class="menu">
                <li><a href="about.html">Home</a></li>
                <li><a href="index-list.html">Blog</a></li>
                <li><a href="contact.html">Tentang Kami</a></li>
                <li><a href="contact.html">Hubungi</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="ot-footer-widget">
                        <h4 class="footer-title"><span>Tentang Happy Trip Korea</span></h4>
                        <p>Maecenas euismod magna augue, et imperdiet nisl efficitur nec. Nunc non risus a diam tempor
                            ornare. Suspendisse molestie nisi a euismod egestas. Integer tristique mauris in laoreet
                            iaculis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                            Curae;</p>
                        <p>3422 Street, Barcelona 432, Spain,<br>New Building North, 15th Floor</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- footer widget start -->
                    <div class="ot-footer-widget">
                        <h4 class="footer-title"><span>Temukan Kami di</span></h4>
                        <div class="ot-social-button">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <div class="ot-social-details">
                                <div class="ot-social-count">6k</div>
                                <div class="ot-social-type">Likes</div>
                            </div>
                        </div>
                        <div class="ot-social-button">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <div class="ot-social-details">
                                <div class="ot-social-count">13k</div>
                                <div class="ot-social-type">Followers</div>
                            </div>
                        </div>
                        <div class="ot-social-button">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <div class="ot-social-details">
                                <div class="ot-social-count">234</div>
                                <div class="ot-social-type">Followers</div>
                            </div>
                        </div>
                        <div class="ot-social-button">
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <div class="ot-social-details">
                                <div class="ot-social-count">987</div>
                                <div class="ot-social-type">Pople</div>
                            </div>
                        </div>
                        <div class="ot-social-button">
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <div class="ot-social-details">
                                <div class="ot-social-count">34k</div>
                                <div class="ot-social-type">Subscibers</div>
                            </div>
                        </div>
                        <div class="ot-social-button">
                            <a href="#"><i class="fa fa-soundcloud"></i></a>
                            <div class="ot-social-details">
                                <div class="ot-social-count">4k</div>
                                <div class="ot-social-type">Subscibers</div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- footer widget end -->
                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- footer widget start -->
                    <div class="ot-footer-widget ot-dark">
                        <h4 class="footer-title"><span>Posting Blog Terbaru</span></h4>
                        <!-- article post -->
                        <article class="widget-post">
                            <div class="post-image">
                                <a href="post.html"><img src="<?php echo $blog['' . $blog->count()-1 . '']->blog_picture ?>" alt=""></a>
                            </div>
                            <div class="post-body">
                                <h2><a href="post.html"><?php echo $blog['' . $blog->count()-1 . '']->blog_title ?></a></h2>
                                <div class="post-meta">
                                    <?php
                                    $y = substr($blog['' . $blog->count()-1 . '']->created_at, 0, 4);
                                    $m = substr($blog['' . $blog->count()-1 . '']->created_at, 5, 2);
                                    $d = substr($blog['' . $blog->count()-1 . '']->created_at, 8, 2);
                                    ?>
                                    <span><i class="fa fa-clock-o"></i> {{$d}}/{{$m}}/{{$y}}</span>
                                </div>
                            </div>
                        </article>
                        <!-- end article item -->
                        <!-- article post -->
                        <article class="widget-post">
                            <div class="post-image">
                                <a href="post.html"><img src="<?php echo $blog['' . $blog->count()-2 . '']->blog_picture ?>" alt=""></a>
                            </div>
                            <div class="post-body">
                                <h2><a href="post.html"><?php echo $blog['' . $blog->count()-2 . '']->blog_title ?></a>
                                </h2>
                                <div class="post-meta">
                                    <?php
                                    $y = substr($blog['' . $blog->count()-2 . '']->created_at, 0, 4);
                                    $m = substr($blog['' . $blog->count()-2 . '']->created_at, 5, 2);
                                    $d = substr($blog['' . $blog->count()-2 . '']->created_at, 8, 2);
                                    ?>
                                    <span><i class="fa fa-clock-o"></i> {{$d}}/{{$m}}/{{$y}}</span>
                                </div>
                            </div>
                        </article>
                        <!-- end article item -->
                        <!-- article post -->
                        <article class="widget-post">
                            <div class="post-image">
                                <a href="post.html"><img src="<?php echo $blog['' . $blog->count()-3 . '']->blog_picture ?>" alt=""></a>
                            </div>
                            <div class="post-body">
                                <h2><a href="post.html"><?php echo $blog['' . $blog->count()-3 . '']->blog_title ?></a></h2>
                                <div class="post-meta">
                                    <?php
                                    $y = substr($blog['' . $blog->count()-3 . '']->created_at, 0, 4);
                                    $m = substr($blog['' . $blog->count()-3 . '']->created_at, 5, 2);
                                    $d = substr($blog['' . $blog->count()-3 . '']->created_at, 8, 2);
                                    ?>
                                    <span><i class="fa fa-clock-o"></i> {{$d}}/{{$m}}/{{$y}}</span>
                                </div>
                            </div>
                        </article>
                        <!-- end article item -->
                    </div>
                    <!-- footer widget end -->
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <i class="fa fa-copyright"></i> Copyright 2017. Hak cipta terpelihara.<br/>
            <a href="http://www.orange-themes.com/">Happy Trip Korea</a>
        </div>
    </footer>
</div>
<!-- boxed -->
<!-- Bootstrap core and theme JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/demo-settings.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/theia-sticky-sidebar.js"></script>
<script type="text/javascript" src="js/themescripts.js"></script>
</body>
</html>