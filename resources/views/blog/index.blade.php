<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">
    <title>Infra Magazine - Grid Layout</title>
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
                <ul class="menu" id="mobile-menu">
                    <li>
                        <a href="index.html"><i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a href="#">Layouts <b class="caret"></b></a><span class="sub_menu_toggle"></span>
                        <ul class="sub-menu">
                            <li><a href="index-blog.html">Blog Layout</a></li>
                            <li><a href="index-grid.html">Grid Layout</a></li>
                            <li><a href="index-list.html">List Layout</a></li>
                        </ul>
                    </li>
                    <li><a href="team.html">Out Team</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
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
        <div class="container">
            <div class="logo"><a href="index.html"><img id="logo" src="images/logo.png" alt="logo"></a></div>
            <!-- <h1>Haute Couture</h1>
                <div class="description">black is new red</div> -->
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
                    <a href="index.html"><i class="fa fa-home"></i> Home <b class="caret"></b></a><span class="sub_menu_toggle"></span>
                    <ul class="sub-menu">
                        <li><a href="index.html">Default</a></li>
                        <li><a href="index-blog.html">Blog Layout</a></li>
                        <li><a href="index-grid.html">Grid Layout</a></li>
                        <li><a href="index-list.html">List Layout</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-pencil-square-o"></i> Articles <b class="caret"></b></a><span class="sub_menu_toggle"></span>
                    <ul class="sub-menu">
                        <li><a href="post.html">Default</a></li>
                        <li><a href="post-large-image.html">Large Image</a></li>
                        <li><a href="post-half-image.html">Half Image</a></li>
                        <li><a href="post-video.html">With Video</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#"><i class="fa fa-bars"></i> Features <b class="caret"></b></a><span class="sub_menu_toggle"></span>
                    <ul class="sub-menu">
                        <li><a href="404.html">404 Page</a></li>
                        <li><a href="team.html">Team Page</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                        <li>
                            <a href="#">Submenu <b class="caret"></b></a><span class="sub_menu_toggle"></span>
                            <ul class="sub-menu">
                                <li><a href="index-blog.html">Blog Layout</a></li>
                                <li><a href="index-grid.html">Grid Layout</a></li>
                                <li><a href="index-list.html">List Layout</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About page</a></li>
                        <li><a href="contact.html">Contact Form</a></li>
                    </ul>
                </li>
                <li><a href="index-grid.html">Fashion</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="search-menu">
                    <a href="#">Trending <i class="fa fa-bolt"></i></a><span class="mega_menu_toggle"></span>
                    <ul class="ot-mega-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="ot-menu-widget ot-dark">
                                        <!-- article post -->
                                        <article class="widget-post">
                                            <div class="post-image">
                                                <a href="post.html"><img src="images/demo/1200x800-3.jpg" alt=""></a>
                                            </div>
                                            <div class="post-body">
                                                <h2><a href="post.html">IN NYC WITH EDDIE BORGO X TARGET</a></h2>
                                                <div class="post-meta">
                                                    <span><i class="fa fa-clock-o"></i> 27. april 2015</span> <span><a href="post.html"><i class="fa fa-comments"></i> 23</a></span>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- end article item -->
                                        <!-- article post -->
                                        <article class="widget-post">
                                            <div class="post-image">
                                                <a href="post.html"><img src="images/demo/1200x800-4.jpg" alt=""></a>
                                            </div>
                                            <div class="post-body">
                                                <h2><a href="post.html">Want to visit 'another planet'? Here you go</a></h2>
                                                <div class="post-meta">
                                                    <span><i class="fa fa-clock-o"></i> 27. april 2015</span> <span><a href="post.html"><i class="fa fa-comments"></i> 23</a></span>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- end article item -->
                                        <!-- article post -->
                                        <article class="widget-post">
                                            <div class="post-image">
                                                <a href="post.html"><img src="images/demo/1200x800-5.jpg" alt=""></a>
                                            </div>
                                            <div class="post-body">
                                                <h2><a href="post.html">STRIPED MIDI DRESS IN CINQUE TERRE</a></h2>
                                                <div class="post-meta">
                                                    <span><i class="fa fa-clock-o"></i> 27. april 2015</span> <span><a href="post.html"><i class="fa fa-comments"></i> 23</a></span>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- end article item -->
                                    </div>
                                    <!-- end ot-widget -->
                                </div>
                                <div class="col-md-4">
                                    <div class="ot-menu-widget ot-dark">
                                        <!-- article post -->
                                        <article class="widget-post">
                                            <div class="post-image">
                                                <a href="post.html"><img src="images/demo/1200x800-21.jpg" alt=""></a>
                                            </div>
                                            <div class="post-body">
                                                <h2><a href="post.html">WHAT TO WEAR IN THE LONDONS</a></h2>
                                                <div class="post-meta">
                                                    <span><i class="fa fa-clock-o"></i> 27. april 2015</span> <span><a href="post.html"><i class="fa fa-comments"></i> 23</a></span>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- end article item -->
                                        <!-- article post -->
                                        <article class="widget-post">
                                            <div class="post-image">
                                                <a href="post.html"><img src="images/demo/1200x800-7.jpg" alt=""></a>
                                            </div>
                                            <div class="post-body">
                                                <h2><a href="post.html">THE 8 MOST CHARMING PLACES TO STAY ON YOUR CUBAN VACATION</a></h2>
                                                <div class="post-meta">
                                                    <span><i class="fa fa-clock-o"></i> 27. april 2015</span> <span><a href="post.html"><i class="fa fa-comments"></i> 23</a></span>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- end article item -->
                                        <!-- article post -->
                                        <article class="widget-post">
                                            <div class="post-image">
                                                <a href="post.html"><img src="images/demo/1200x800-8.jpg" alt=""></a>
                                            </div>
                                            <div class="post-body">
                                                <h2><a href="post.html">Want to visit 'another planet'? Here you go</a></h2>
                                                <div class="post-meta">
                                                    <span><i class="fa fa-clock-o"></i> 27. april 2015</span> <span><a href="post.html"><i class="fa fa-comments"></i> 23</a></span>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- end article item -->
                                    </div>
                                    <!-- end ot-widget -->
                                </div>
                                <div class="col-md-4">
                                    <div class="ot-menu-widget ot-dark">
                                        <!-- article post -->
                                        <article class="widget-post">
                                            <div class="post-image">
                                                <a href="post.html"><img src="images/demo/1200x800-9.jpg" alt=""></a>
                                            </div>
                                            <div class="post-body">
                                                <h2><a href="post.html">VIRGINIA SMITH'S GUIDE TO THE HUDSON VALLEY</a></h2>
                                                <div class="post-meta">
                                                    <span><i class="fa fa-clock-o"></i> 27. april 2015</span> <span><a href="post.html"><i class="fa fa-comments"></i> 23</a></span>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- end article item -->
                                        <!-- article post -->
                                        <article class="widget-post">
                                            <div class="post-image">
                                                <a href="post.html"><img src="images/demo/1200x800-10.jpg" alt=""></a>
                                            </div>
                                            <div class="post-body">
                                                <h2><a href="post.html">Want to visit 'another planet'? Here you go</a></h2>
                                                <div class="post-meta">
                                                    <span><i class="fa fa-clock-o"></i> 27. april 2015</span> <span><a href="post.html"><i class="fa fa-comments"></i> 23</a></span>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- end article item -->
                                        <!-- article post -->
                                        <article class="widget-post">
                                            <div class="post-image">
                                                <a href="post.html"><img src="images/demo/1200x800-11.jpg" alt=""></a>
                                            </div>
                                            <div class="post-body">
                                                <h2><a href="post.html">Want to visit 'another planet'? Here you go</a></h2>
                                                <div class="post-meta">
                                                    <span><i class="fa fa-clock-o"></i> 27. april 2015</span> <span><a href="post.html"><i class="fa fa-comments"></i> 23</a></span>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- end article item -->
                                    </div>
                                    <!-- end ot-widget -->
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="search-menu">
                    <a href="#"><i class="fa fa-search"></i></a><span class="sub_menu_toggle"></span>
                    <ul class="sub-menu">
                        <li>
                            <form id="search" class="navbar-form search" action="http://orange-themes.com/testiem">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Type to search" name="s" id="s">
                                    <span class="input-group-btn"><button type="submit" class="btn btn-default btn-submit"><i class="fa fa-angle-right"></i></button></span>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end main menu -->
    <!-- main content -->
    <section class="ot-section-a">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="theiaStickySidebar">
                        <div class="ot-module">
                            <!-- classic grid posts section -->
                            <h4 class="section-title"><span>The grid style box</span>Latest Posts</h4>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="grid-post grid-gutter">
                                        <div class="post-image">
                                            <div class="review"><span class="score">80</span><span class="percent">%</span></div>
                                            <div class="post-title">
                                                <div class="post-cat2"><span>Traveling</span></div>
                                                <h2><a href="post.html">VIRGINIA SMITH'S GUIDE TO THE HUDSON VALLEY</a></h2>
                                            </div>
                                            <a href="post.html"><img src="images/demo/1200x800-20.jpg" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <span>27. april 2015</span> <span><a href="post.html">23 comments</a></span> <span>123 views</span>
                                            </div>
                                            <p>More from Bermuda! This small island is packed with so many different places to see and visit. I knew I was going to have a lot of cool...</p>
                                        </div>
                                        <div class="read-more"><a href="post.html">read more</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="grid-post grid-gutter">
                                        <div class="post-image">
                                            <div class="post-title">
                                                <div class="post-cat2"><span>Peoples</span></div>
                                                <h2><a href="post.html">IN NYC WITH EDDIE BORGO X TARGET</a></h2>
                                            </div>
                                            <a href="post.html"><img src="images/demo/1200x800-7.jpg" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <span>27. april 2015</span> <span><a href="post.html">23 comments</a></span> <span>123 views</span>
                                            </div>
                                            <p>Proin eu sapien non tortor mattis auctor ac sit amet justo. Aliquam pellentesque odio quis eleifend aliquet. In id sodales dui...</p>
                                        </div>
                                        <div class="read-more"><a href="post.html">read more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="grid-post grid-gutter">
                                        <div class="post-image">
                                            <div class="post-title">
                                                <div class="post-cat2"><span>Fashion</span></div>
                                                <h2><a href="post.html">Postcard from Cannes: Have We Found the Winner Yet?</a></h2>
                                            </div>
                                            <a href="post.html"><img src="images/demo/1200x800-11.jpg" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <span>27. april 2015</span> <span><a href="post.html">23 comments</a></span> <span>123 views</span>
                                            </div>
                                            <p>Aliquam venenatis aliquet tortor, non blandit sapien aliquam eget. Sed in nulla et arcu commodo vehicula vitae et ante. Suspendisse ut...</p>
                                        </div>
                                        <div class="read-more"><a href="post.html">read more</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="grid-post grid-gutter">
                                        <div class="post-image">
                                            <div class="post-title">
                                                <div class="post-cat2"><span>Fashion</span></div>
                                                <h2><a href="post.html">The View From a Peaceful Villa I Visited</a></h2>
                                            </div>
                                            <a href="post.html"><img src="images/demo/1200x800-12.jpg" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <span>27. april 2015</span> <span><a href="post.html">23 comments</a></span> <span>123 views</span>
                                            </div>
                                            <p>Aliquam venenatis aliquet tortor, non blandit sapien aliquam eget. Sed in nulla et arcu commodo vehicula vitae et ante. Suspendisse ut...</p>
                                        </div>
                                        <div class="read-more"><a href="post.html">read more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="grid-post grid-gutter">
                                        <div class="post-image">
                                            <div class="post-title">
                                                <div class="post-cat2"><span>Fashion</span></div>
                                                <h2><a href="post.html">Postcard from Cannes: Have We Found the Winner Yet?</a></h2>
                                            </div>
                                            <a href="post.html"><img src="images/demo/1200x800-18.jpg" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <span>27. april 2015</span> <span><a href="post.html">23 comments</a></span> <span>123 views</span>
                                            </div>
                                            <p>Aliquam venenatis aliquet tortor, non blandit sapien aliquam eget. Sed in nulla et arcu commodo vehicula vitae et ante. Suspendisse ut...</p>
                                        </div>
                                        <div class="read-more"><a href="post.html">read more</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="grid-post grid-gutter">
                                        <div class="post-image">
                                            <div class="post-title">
                                                <div class="post-cat2"><span>Fashion</span></div>
                                                <h2><a href="post.html">The View From a Peaceful Villa I Visited</a></h2>
                                            </div>
                                            <a href="post.html"><img src="images/demo/1200x800-19.jpg" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <span>27. april 2015</span> <span><a href="post.html">23 comments</a></span> <span>123 views</span>
                                            </div>
                                            <p>Aliquam venenatis aliquet tortor, non blandit sapien aliquam eget. Sed in nulla et arcu commodo vehicula vitae et ante. Suspendisse ut...</p>
                                        </div>
                                        <div class="read-more"><a href="post.html">read more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="grid-post grid-gutter">
                                        <div class="post-image">
                                            <div class="review"><span class="score">80</span><span class="percent">%</span></div>
                                            <div class="post-title">
                                                <div class="post-cat2"><span>Fashion</span></div>
                                                <h2><a href="post.html">Make Stories Come Alive with Jodi Harvey-Brown Book</a></h2>
                                            </div>
                                            <a href="post.html"><img src="images/demo/1200x800-20.jpg" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <span>27. april 2015</span> <span><a href="post.html">23 comments</a></span> <span>123 views</span>
                                            </div>
                                            <p>Aliquam venenatis aliquet tortor, non blandit sapien aliquam eget. Sed in nulla et arcu commodo vehicula vitae et ante. Suspendisse ut...</p>
                                        </div>
                                        <div class="read-more"><a href="post.html">read more</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="grid-post grid-gutter">
                                        <div class="post-image">
                                            <div class="post-title">
                                                <div class="post-cat2"><span>Automotive</span></div>
                                                <h2><a href="post.html">Pernille Teisbaek Hits the Road in Style with Cash & Rocket</a></h2>
                                            </div>
                                            <a href="post.html"><img src="images/demo/1200x800-17.jpg" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <span>27. april 2015</span> <span><a href="post.html">23 comments</a></span> <span>123 views</span>
                                            </div>
                                            <p>Proin eu sapien non tortor mattis auctor ac sit amet justo. Aliquam pellentesque odio quis eleifend aliquet. In id sodales dui...</p>
                                        </div>
                                        <div class="read-more"><a href="post.html">read more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="grid-post grid-gutter">
                                        <div class="post-image">
                                            <div class="post-title">
                                                <div class="post-cat2"><span>Fashion</span></div>
                                                <h2><a href="post.html">Postcard from Cannes: Have We Found the Winner Yet?</a></h2>
                                            </div>
                                            <a href="post.html"><img src="images/demo/1200x800-5.jpg" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <span>27. april 2015</span> <span><a href="post.html">23 comments</a></span> <span>123 views</span>
                                            </div>
                                            <p>Aliquam venenatis aliquet tortor, non blandit sapien aliquam eget. Sed in nulla et arcu commodo vehicula vitae et ante. Suspendisse ut...</p>
                                        </div>
                                        <div class="read-more"><a href="post.html">read more</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="grid-post grid-gutter">
                                        <div class="post-image">
                                            <div class="post-title">
                                                <div class="post-cat2"><span>Fashion</span></div>
                                                <h2><a href="post.html">The View From a Peaceful Villa I Visited</a></h2>
                                            </div>
                                            <a href="post.html"><img src="images/demo/1200x800-2.jpg" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <span>27. april 2015</span> <span><a href="post.html">23 comments</a></span> <span>123 views</span>
                                            </div>
                                            <p>Aliquam venenatis aliquet tortor, non blandit sapien aliquam eget. Sed in nulla et arcu commodo vehicula vitae et ante. Suspendisse ut...</p>
                                        </div>
                                        <div class="read-more"><a href="post.html">read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end ot-module -->
                    </div>
                    <!-- stickysidebar -->
                </div>
                <div class="col-md-4">
                    <div class="theiaStickySidebar">
                        <aside class="sidebar">
                            <!-- widget reviews style 1 -->
                            <div class="widget-container">
                                <h4 class="section-title"><span>Review Widget #1</span>Latest Reviews</h4>
                                <!-- article post -->
                                <article class="widget-post">
                                    <div class="review-bar-score">
                                        <span class="score">80</span><span class="percent">%</span>
                                    </div>
                                    <div class="post-body">
                                        <h2><a href="post.html">Apple iPhone 4s</a></h2>
                                        <div class="review-bar-bg">
                                            <div class="review-bar" style="width: 80%;"><span>80%</span></div>
                                        </div>
                                    </div>
                                </article>
                                <!-- end article item -->
                                <!-- article post -->
                                <article class="widget-post">
                                    <div class="review-bar-score">
                                        <span class="score">70</span><span class="percent">%</span>
                                    </div>
                                    <div class="post-body">
                                        <h2><a href="post.html">Apple iPhone 6s</a></h2>
                                        <div class="review-bar-bg">
                                            <div class="review-bar" style="width: 70%;"><span>70%</span></div>
                                        </div>
                                    </div>
                                </article>
                                <!-- end article item -->
                                <!-- article post -->
                                <article class="widget-post">
                                    <div class="review-bar-score">
                                        <span class="score">83</span><span class="percent">%</span>
                                    </div>
                                    <div class="post-body">
                                        <h2><a href="post.html">Samsung Galaxy S6</a></h2>
                                        <div class="review-bar-bg">
                                            <div class="review-bar" style="width: 83%;"><span>83%</span></div>
                                        </div>
                                    </div>
                                </article>
                                <!-- end article item -->
                                <!-- article post -->
                                <article class="widget-post">
                                    <div class="review-bar-score">
                                        <span class="score">70</span><span class="percent">%</span>
                                    </div>
                                    <div class="post-body">
                                        <h2><a href="post.html">Apple iPhone 6s</a></h2>
                                        <div class="review-bar-bg">
                                            <div class="review-bar" style="width: 70%;"><span>70%</span></div>
                                        </div>
                                    </div>
                                </article>
                                <!-- end article item -->
                            </div>
                            <!-- end widget reviews style 1 -->
                            <!-- widget advertisement -->
                            <div class="widget-container">
                                <h4 class="section-title">Advertisement</h4>
                                <img src="images/banner-300x250.png" alt="" />
                            </div>
                            <!-- end widget advertisement -->
                            <!-- widget tag cloud -->
                            <div class="widget-container widget_tag_cloud">
                                <h4 class="section-title">TAGS</h4>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Fashion</a><span>34</span></div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Outfit</a><span>54</span></div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Creative</a><span>2</span></div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Adventures</a><span>76</span></div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Computers</a><span>134</span></div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Fashion</a><span>34</span></div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Outfit</a><span>4</span></div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Creative</a><span>2</span></div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Adventures</a><span>67</span></div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Computers</a><span>5</span></div>
                            </div>
                            <!-- end widget tag cloud -->
                            <!-- widget calendar -->
                            <div class="widget-container">
                                <h4 class="section-title">Calendar</h4>
                                <div id="calendar_wrap">
                                    <table id="wp-calendar">
                                        <caption>April 2015</caption>
                                        <thead>
                                        <tr>
                                            <th scope="col" title="Monday">M</th>
                                            <th scope="col" title="Tuesday">T</th>
                                            <th scope="col" title="Wednesday">W</th>
                                            <th scope="col" title="Thursday">T</th>
                                            <th scope="col" title="Friday">F</th>
                                            <th scope="col" title="Saturday">S</th>
                                            <th scope="col" title="Sunday">S</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <td colspan="3" id="prev"><a href="http://orange-themes.com/testiem/2014/01/">&laquo; Jan</a></td>
                                            <td class="pad">&nbsp;</td>
                                            <td colspan="3" id="next" class="pad">&nbsp;</td>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr>
                                            <td colspan="2" class="pad">&nbsp;</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                            <td>11</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                        </tr>
                                        <tr>
                                            <td id="today">20</td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                            <td>30</td>
                                            <td class="pad" colspan="3">&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end widget calendar -->
                        </aside>
                    </div>
                    <!-- theiaStickysidebar -->
                </div>
                <!-- col-md-4 -->
            </div>
            <!-- row -->
            <!-- end main content -->
        </div>
        <!-- container -->
    </section>
    <!-- end ot-section-a -->
    <footer class="footer">
        <div class="footer-menu">
            <ul class="menu">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Archives</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="ot-footer-widget">
                        <h4 class="footer-title"><span>About Infra</span></h4>
                        <p>Maecenas euismod magna augue, et imperdiet nisl efficitur nec. Nunc non risus a diam tempor ornare. Suspendisse molestie nisi a euismod egestas. Integer tristique mauris in laoreet iaculis. Vestibulum ante ipsum primis in faucibus;</p>
                        <p>3422 Street, Barcelona 432, Spain,<br>New Building North, 15th Floor</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- footer widget start -->
                    <div class="ot-footer-widget">
                        <h4 class="footer-title"><span>Categories</span></h4>
                        <ol class="footer-categories">
                            <li><a href="category.html">World</a></li>
                            <li><a href="category.html">Sport</a></li>
                            <li><a href="category.html">Technology</a></li>
                            <li><a href="category.html">Entertainment</a></li>
                            <li><a href="category.html">Fashion</a></li>
                            <li><a href="category.html">Style</a></li>
                        </ol>
                        <ol class="footer-categories">
                            <li><a href="category.html">TV SHOWS</a></li>
                            <li><a href="category.html">SCHEDULE</a></li>
                            <li><a href="category.html">ALL FEATURES</a></li>
                            <li><a href="category.html">MIDDLE EAST</a></li>
                            <li><a href="category.html">Technology</a></li>
                            <li><a href="category.html">Europe</a></li>
                        </ol>
                    </div>
                    <!-- footer widget end -->
                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- footer widget start -->
                    <div class="ot-footer-widget">
                        <h4 class="footer-title"><span>Social</span></h4>
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
            </div>
        </div>
        <div class="footer-bottom">
            <i class="fa fa-copyright"></i> Copyright 2015. All rights reserved.<br />
            Theme made by <a href="http://themeforest.net/user/orange-themes/portfolio?ref=orange-themes">Orange Themes</a>
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