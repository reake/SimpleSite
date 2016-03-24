<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>简站 (Simple-Site.cn) | 让建站变得如此简单!</title>

    <!--SEO Meta Tags-->
    <meta name="description" content="Metheor - Multi-Purpose App Showcase Template"/>
    <meta name="keywords"
          content="multipurpose, app showcase, mobile, blog, business, corporate, startup, landing, shortcodes, html5, css3, jquery, js, gallery, slider, touch, creative"/>
    <meta name="author" content="Feei"/>

    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <base href="{{$theme}}/">

    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- All Theme Styles including Bootstrap, Bourbon, Pixeden, etc. compiled from styles.scss-->
    <link href="css/styles.min.css" rel="stylesheet" media="screen">

    <!--Color Scheme-->
    <link class="color-scheme" href="css/colors/color-ff3366.css" rel="stylesheet" media="screen">

    <!--Color Switcher-->
    <link href="color-switcher/color-switcher.css" rel="stylesheet" media="screen">

    <!--Modernizr / Detectizr-->
    <script src="js/vendor/modernizr.custom.js"></script>

    <!-- Page Preloader (Pace) -->
    <script src="js/vendor/pace.min.js"></script>
</head>

<!-- Body -->
<!-- ".is-preloader" class is used for page preloading animation. Please note if you do not want preloading you need to remove this class along with pace.min.js link in the <head> of the document.-->
<!-- Adding/Removing class ".parallax" is enabling/disabling background parallax effect on elements with background images and attributes data-stellar-background-ratio applied to them. Make sure you also added/removed link to stellar.js script before </body>. -->
<body class="is-preloader parallax">

<!-- Page Wrapper -->
<div class="page-wrapper">

    <!--Color Switcher-->
    <div class="color-switcher">
        <div class="toggle"><i class="pe-7s-paint"></i></div>
        <div class="color">
            <a class="current" style="background-color: #ff3366;" href="#" data-color="ff3366"></a>
            <span>#ff3366</span>
        </div>
        <div class="color">
            <a style="background-color: #2196f3;" href="#" data-color="2196f3"></a>
            <span>#2196f3</span>
        </div>
        <div class="color">
            <a style="background-color: #b26ff6;" href="#" data-color="b26ff6"></a>
            <span>#b26ff6</span>
        </div>
        <div class="color">
            <a style="background-color: #00bcd4;" href="#" data-color="00bcd4"></a>
            <span>#00bcd4</span>
        </div>
    </div><!--Color Switcher End-->

    <!-- Navbar -->
    <!-- Remove ".navbar-fixed" class to make navigation bar scrollable with the page. Another modifier calss is ".submenu-dark" to alter submenu appearance. -->
    <header class="navbar navbar-fixed">
        <div class="container">
            <div class="inner">

                <!-- Site Logo -->
                <a href="index.html" class="site-logo">
                    <img src="img/logo.png" alt="Metheor">
                </a><!-- .site-logo -->

                <!-- Mobile Dropdown -->
                <div class="mobile-dropdown">

                    <!-- Mobile Tools -->
                    <div class="mobile-tools">
                        <form method="post" class="search-box">
                            <input type="text" placeholder="Enter your search query">
                            <button type="submit"><i class="pe-7s-search"></i></button>
                        </form><!-- .search-box -->
                        <div class="social-bar text-center">
                            <a href="#" class="sb-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="sb-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="sb-google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="sb-instagram"><i class="fa fa-instagram"></i></a>
                        </div><!-- .social-bar -->
                    </div><!-- .mobile-tools -->

                    <!-- Main Navigation -->
                    <nav class="main-navigation">
                        <ul class="menu">
                            <li>
                                <a href="#">简站</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">动态<span>&#8211;</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid-boxed.html">签约记录</a></li>
                                    <li><a href="blog-list-rs.html">新闻报道</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.html">案例</a></li>
                            <li>
                                <a href="#">服务</a>
                            </li>
                            <li>
                                <a href="components.html">关于</a>
                            </li>
                        </ul><!-- .menu -->
                    </nav><!-- .main-navigation -->
                </div><!-- .mobile-dropdown -->

                <!-- Toolbar -->
                <div class="toolbar">
                    <div class="search-btn">
                        <i class="pe-7s-search"></i>
                        <form method="post" class="search-box">
                            <input type="text" placeholder="Enter your search query">
                            <button type="submit"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                    <span class="divider"></span>
                    <div class="share-btn">
                        <i class="pe-7s-share"></i>
                        <ul class="dropdown">
                            <li><a href="#" class="sb-facebook"><i class="fa fa-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="sb-twitter"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="#" class="sb-google-plus"><i class="fa fa-google-plus"></i>Google+</a></li>
                            <li><a href="#" class="sb-instagram"><i class="fa fa-instagram"></i>Instagram</a></li>
                        </ul>
                    </div>
                    <a href="#markets" class="btn btn-sm btn-primary btn-icon-left scroll-to" data-offset-top="115">
                        <i class="pe-7s-download"></i>立即试用
                    </a>
                    <!-- Mobile Menu Toggle -->
                    <div class="nav-toggle"><span></span></div>
                </div><!-- .toolbar -->
            </div><!-- .inner -->
        </div><!-- .container -->
    </header><!-- .navbar.navbar-fixed -->

    <!-- Intro Section -->
    <section class="intro-section padding-bottom-2x" style="background-image: url(img/home/intro/intro-bg02.jpg);"
             data-stellar-background-ratio="0.65">
        <span class="overlay" style="opacity: .85;"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-6 padding-bottom-3x mobile-center">
                    <h2 class="text-light">Present your beautiful app the way you want.</h2>
                    <div class="video-popup-placeholder">
                        <img src="img/home/intro/video-popup.jpg" alt="Video">
                        <a href="https://vimeo.com/33984473" class="play-btn"></a>
                    </div><!-- .video-popup-placeholder -->
                    <p class="text-light opacity-50 hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation.</p>
                    <ul class="sharing-links light-skin space-bottom">
                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                        class="fa fa-twitter"></i>6 358</a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                        class="fa fa-facebook"></i>8 242</a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i
                                        class="fa fa-instagram"></i>5 176</a></li>
                    </ul><!-- .sharing-links -->
                    <div class="mobile-center">
                        <a href="#" class="btn btn-ghost btn-light btn-icon-right">
                            Learn more
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- .col-lg-5. col-lg-offset-1 -->

                <!-- Features -->
                <div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-6">
                    <div class="box-with-icon horizontal-box light-skin">
                        <div class="box-with-icon-icon">
                            <i class="pe-7s-cloud-upload"></i>
                        </div>
                        <div class="box-with-icon-content">
                            <h3 class="box-with-icon-title">Backup Files in Cloud</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div><!-- .box-with-icon.horizontal-box.light-skin -->
                    <div class="box-with-icon horizontal-box light-skin">
                        <div class="box-with-icon-icon">
                            <i class="pe-7s-micro"></i>
                        </div>
                        <div class="box-with-icon-content">
                            <h3 class="box-with-icon-title">Voice Recording Support</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div><!-- .box-with-icon.horizontal-box.light-skin -->
                    <div class="box-with-icon horizontal-box light-skin">
                        <div class="box-with-icon-icon">
                            <i class="pe-7s-config"></i>
                        </div>
                        <div class="box-with-icon-content">
                            <h3 class="box-with-icon-title">Advanced Settings</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div><!-- .box-with-icon.horizontal-box.light-skin -->
                    <div class="box-with-icon horizontal-box light-skin">
                        <div class="box-with-icon-icon">
                            <i class="pe-7s-comment"></i>
                        </div>
                        <div class="box-with-icon-content">
                            <h3 class="box-with-icon-title">Chat In Your App</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div><!-- .box-with-icon.horizontal-box.light-skin -->
                </div><!-- .col-lg-5. col-lg-offset-1 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .intro-section -->

    <!-- Market Buttons -->
    <section class="fw-section bg-white padding-top-3x padding-bottom-3x" id="markets">
        <div class="container text-center">
            <h6 class="text-thin">Application available on:</h6>
            <a href="#" class="app-store-btn"></a>
            <a href="#" class="google-play-btn"></a>
            <a href="#" class="windows-btn"></a>
            <a href="#" class="amazon-btn"></a>
            <div class="market-counter">
                <i class="pe-7s-download"></i>
                <span>133K</span>
                downloads
            </div><!-- .market-counter -->
        </div><!-- .container -->
    </section><!-- .fw-section.bg-white -->

    <!-- Device Gallery -->
    <section class="fw-section bg-white border-top padding-top-3x">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <h2>We worked hard to deliver a great experience and user-friendy interface.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Sed ut
                        perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                    <div class="device-gallery-thumbs">
                        <ul class="thumb-list">
                            <li class="thumb">
                                <a href="#scr01" data-toggle="tab">
                                    <img src="img/device-gallery/th01.jpg" alt="Thumb 1">
                                </a>
                            </li>
                            <li class="thumb active">
                                <a href="#scr02" data-toggle="tab">
                                    <img src="img/device-gallery/th02.jpg" alt="Thumb 2">
                                </a>
                            </li>
                            <li class="thumb">
                                <a href="#scr03" data-toggle="tab">
                                    <img src="img/device-gallery/th03.jpg" alt="Thumb 3">
                                </a>
                            </li>
                            <li class="thumb">
                                <a href="#scr04" data-toggle="tab">
                                    <img src="img/device-gallery/th04.jpg" alt="Thumb 4">
                                </a>
                            </li>
                            <li class="thumb">
                                <a href="#scr05" data-toggle="tab">
                                    <img src="img/device-gallery/th05.jpg" alt="Thumb 5">
                                </a>
                            </li>
                        </ul>
                    </div><!-- .device-gallery-thumbs -->
                </div><!-- .col-sm-6.col-md-push-6 -->
                <div class="col-md-6 col-md-pull-6">
                    <div class="space-top-2x visible-sm visible-xs"></div>
                    <div class="device-gallery-device">
                        <img src="img/device-gallery/device.png" alt="Device">
                        <div class="tab-content">
                            <div class="tab-pane transition fade scale" id="scr01">
                                <img src="img/device-gallery/screen01.jpg" alt="Screen 1">
                            </div>
                            <div class="tab-pane transition fade scale in active" id="scr02">
                                <img src="img/device-gallery/screen02.jpg" alt="Screen 2">
                            </div>
                            <div class="tab-pane transition fade scale" id="scr03">
                                <img src="img/device-gallery/screen03.jpg" alt="Screen 3">
                            </div>
                            <div class="tab-pane transition fade scale" id="scr04">
                                <img src="img/device-gallery/screen04.jpg" alt="Screen 4">
                            </div>
                            <div class="tab-pane transition fade scale" id="scr05">
                                <img src="img/device-gallery/screen05.jpg" alt="Screen 5">
                            </div>
                        </div><!-- .tab-content -->
                    </div><!-- .device-gallery-device -->
                </div><!-- .col-md-6.col-md-pull-6 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .fw-section.bg-white.border-top -->

    <!-- Testimonials Carousel -->
    <!-- Data API:
      data-loop="true/false" enable/disable looping
      data-autoplay="true/false" enable/disable carousel autoplay
      data-interval="3000" autoplay interval timeout in miliseconds 
      Simply add necessary data attribute to the ".testimonials-carousel" with appropriate value to adjust carousel functionality.
     -->
    <section class="container padding-top-3x">
        <h2 class="block-title text-center">What people say</h2>
        <div class="testimonials-carousel space-bottom-2x" data-loop="true">
            <div class="inner">
                <div class="testimonial">
                    <div class="testimonial-author-ava">
                        <img src="img/testimonials/01.jpg" alt="Jessie Pinkman">
                    </div>
                    <h3 class="testimonial-author-name">Jessie Pinkman</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore.</p>
                    <img src="img/testimonials/logo01.png" alt="MailChimp">
                </div><!-- .testimonial -->
                <div class="testimonial">
                    <div class="testimonial-author-ava">
                        <img src="img/testimonials/02.jpg" alt="Lara Goodwill">
                    </div>
                    <h3 class="testimonial-author-name">Lara Goodwill</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore.</p>
                    <img src="img/testimonials/logo02.png" alt="WordPress">
                </div><!-- .testimonial -->
                <div class="testimonial">
                    <div class="testimonial-author-ava">
                        <img src="img/testimonials/03.jpg" alt="Mike Johnson">
                    </div>
                    <h3 class="testimonial-author-name">Mike Johnson</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore.</p>
                    <img src="img/testimonials/logo03.png" alt="Bootstrap">
                </div><!-- .testimonial -->
            </div><!-- .inner -->
        </div><!-- .testimonials-carousel -->
        <img src="img/home/tablet.jpg" class="block-center" alt="Tablet">
    </section><!-- .container.padding-top-3x -->

    <!-- Team -->
    <section class="fw-section bg-white padding-top-3x padding-bottom-3x">
        <div class="container">
            <h2 class="block-title text-center">
                Our brilliant team
                <small>Smart people. Genius ideas. Prominent result.</small>
            </h2>
            <div class="row">
                <div class="col-sm-4">
                    <!-- Use ".light-skin" class to alter appearance. -->
                    <div class="box-with-image text-center">
                        <div class="box-with-image-image">
                            <img src="img/team/01.jpg" alt="Johnathan Doe">
                        </div>
                        <h3 class="box-with-image-title">Johnathan Doe
                            <small>CEO, Co-Founder</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class="social-bar text-center">
                            <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top"
                               title="Google+">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div><!-- .box-with-image -->
                </div><!-- .col-sm-4 -->
                <div class="col-sm-4">
                    <!-- Use ".light-skin" class to alter appearance. -->
                    <div class="box-with-image text-center">
                        <div class="box-with-image-image">
                            <img src="img/team/02.jpg" alt="Anabelle Dorris">
                        </div>
                        <h3 class="box-with-image-title">Anabelle Dorris
                            <small>Lead Designer</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class="social-bar text-center">
                            <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top"
                               title="Google+">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top"
                               title="Instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div><!-- .box-with-image -->
                </div><!-- .col-sm-4 -->
                <div class="col-sm-4">
                    <!-- Use ".light-skin" class to alter appearance. -->
                    <div class="box-with-image text-center">
                        <div class="box-with-image-image">
                            <img src="img/team/03.jpg" alt="Taylor White">
                        </div>
                        <h3 class="box-with-image-title">Taylor White
                            <small>UX / UI Engeneer</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class="social-bar text-center">
                            <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top"
                               title="Google+">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div><!-- .box-with-image -->
                </div><!-- .col-sm-4 -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-sm-4">
                    <!-- Use ".light-skin" class to alter appearance. -->
                    <div class="box-with-image text-center">
                        <div class="box-with-image-image">
                            <img src="img/team/04.jpg" alt="Suasanna Davis">
                        </div>
                        <h3 class="box-with-image-title">Suasanna Davis
                            <small>Marketing Director</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class="social-bar text-center">
                            <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top"
                               title="Google+">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top"
                               title="Instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div><!-- .box-with-image -->
                </div><!-- .col-sm-4 -->
                <div class="col-sm-4">
                    <!-- Use ".light-skin" class to alter appearance. -->
                    <div class="box-with-image text-center">
                        <div class="box-with-image-image">
                            <img src="img/team/05.jpg" alt="Christopher Walker">
                        </div>
                        <h3 class="box-with-image-title">Christopher Walker
                            <small>Lead Programmer</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class="social-bar text-center">
                            <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top"
                               title="Google+">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div><!-- .box-with-image -->
                </div><!-- .col-sm-4 -->
                <div class="col-sm-4">
                    <!-- Use ".light-skin" class to alter appearance. -->
                    <div class="box-with-image text-center">
                        <div class="box-with-image-image">
                            <img src="img/team/06.jpg" alt="Endy Garcia">
                        </div>
                        <h3 class="box-with-image-title">Endy Garcia
                            <small>Java Developer</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class="social-bar text-center">
                            <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top"
                               title="Google+">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top"
                               title="Instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div><!-- .box-with-image -->
                </div><!-- .col-sm-4 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .fw-section.bg-white -->

    <!-- Pricing -->
    <section class="pricing-table-container space-bottom-3x">
        <div class="pricing-header" style="background-image: url(img/home/pricing-bg.jpg);"
             data-stellar-background-ratio="0.65">
            <div class="overlay"></div>
        </div><!-- .pricing-header -->
        <div class="container space-bottom">
            <div class="pricing-table">
                <h2 class="block-title text-center text-light">Pricing plans for cloud service
                    <small>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</small>
                </h2>
                <table>
                    <thead>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <h3 class="plan-name">
                                Starter
                                <span class="label label-primary">Free forever</span>
                            </h3>
                            <h4 class="plan-price">
                                <span class="currency">$</span>0<span> / mo</span>
                            </h4>
                        </td>
                        <td>
                            <h3 class="plan-name">Individual</h3>
                            <h4 class="plan-price">
                                <span class="currency">$</span>5<span> / mo</span>
                            </h4>
                        </td>
                        <td>
                            <h3 class="plan-name">Team</h3>
                            <h4 class="plan-price">
                                <span class="currency">$</span>15<span> / mo</span>
                            </h4>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Max Number of Documents</td>
                        <td><strong>5</strong></td>
                        <td><strong>20</strong></td>
                        <td><strong>50</strong></td>
                    </tr>
                    <tr>
                        <td>Storage Space</td>
                        <td>100 Mb</td>
                        <td>500 Mb</td>
                        <td>1 Gb</td>
                    </tr>
                    <tr>
                        <td>Views Analytics</td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <a href="#" class="btn btn-ghost btn-primary btn-block">Sign Up</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-ghost btn-default btn-block">Sign Up</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-ghost btn-default btn-block">Sign Up</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div><!-- .pricing-table -->
        </div><!-- .container -->
    </section><!-- .pricing-table-container.space-bottom-3x -->

    <!-- Contacts -->
    <section class="container">
        <h2 class="text-center space-bottom-2x">Contact us for more details</h2>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="tile tile-with-icon">
                            <div class="tile-body">
                                <i class="pe-7s-map-marker"></i>
                                <h4>Address</h4>
                                <p>45 Park Avenue, Apt. 303 New York, NY 10016, USA</p>
                            </div>
                        </div><!-- .tile.tile-with-icon -->
                    </div><!-- .col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="tile tile-with-icon">
                            <div class="tile-body">
                                <i class="pe-7s-call"></i>
                                <h4>Phone</h4>
                                <p>001 (917) 555-4836</p>
                                <br>
                            </div>
                        </div><!-- .tile.tile-with-icon -->
                    </div><!-- .col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="tile tile-with-icon">
                            <div class="tile-body">
                                <i class="pe-7s-mail"></i>
                                <h4>Email</h4>
                                <p><a href="mailto:new_york@mail">new_york@mail.com</a><br><br></p>
                            </div>
                        </div><!-- .tile.tile-with-icon -->
                    </div><!-- .col-sm-4 -->
                </div><!-- .row -->
            </div><!-- .col-lg-10.col-lg-offset-1 -->
        </div><!-- .row -->
    </section><!-- .container -->

    <!-- Scroll To Top Button -->
    <a href="#" class="scroll-to-top-btn">
        <i class="icon-arrow-up"></i>
    </a><!-- .scroll-to-top-btn -->

    <!-- Footer -->
    <!-- Use modifier class ".footer-dark" to switch to dark skin. -->
    <footer class="footer space-top-3x">
        <div class="container">
            <form action="//rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;id=1194bb7544"
                  method="post" class="row subscription validate" target="_blank" novalidate>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-control">
                                <i class="pe-7s-user"></i>
                                <input type="text" name="FNAME" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-control">
                                <i class="pe-7s-mail"></i>
                                <input type="email" name="EMAIL" placeholder="Email">
                            </div>
                        </div>
                    </div>
                </div><!-- .col-sm-9 -->
                <div class="col-sm-3">
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                              name="b_c7103e2c981361a6639545bd5_1194bb7544"
                                                                                              tabindex="-1" value="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Subscribe *</button>
                </div><!-- .col-sm-3 -->
                <div class="col-sm-12">
                    <span class="text-muted">* Be the first to know about latest updates and new features.</span>
                </div><!-- .col-sm-12 -->
            </form><!-- .row.subscription -->
            <div class="padding-top-3x padding-bottom-2x text-center">
                <h6 class="text-thin">Application available on:</h6>
                <a href="#" class="app-store-btn"></a>
                <a href="#" class="google-play-btn"></a>
                <a href="#" class="windows-btn"></a>
                <a href="#" class="amazon-btn"></a>
                <div class="market-counter">
                    <i class="pe-7s-download"></i>
                    <span>133K</span>
                    downloads
                </div><!-- .market-counter -->
            </div><!-- .padding-top-3x.padding-bottom-2x.text-center -->

            <!-- Copyright -->
            <div class="copyright">
                <div class="inner">
                    <div class="column">
                        <a href="index.html" class="site-logo">
                            <img src="img/footer-logo-def.svg" alt="Metheor">
                        </a>
                        <span class="copy-text">&copy; 2015. All rights reserved</span>
                    </div><!-- .column -->
                    <div class="column">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="#">服务条款</a></li>
                                <li><a href="#">隐私协议</a></li>
                                <li><a href="contacts.html">联系我们</a></li>
                                <li><a href="help-center.html">常见问题</a></li>
                            </ul>
                        </nav><!-- .footer-nav -->
                    </div><!-- .column -->
                    <div class="column">
                        <div class="social-bar">
                            <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                        class="fa fa-facebook"></i></a>
                            <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                        class="fa fa-twitter"></i></a>
                            <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top"
                               title="Google+"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="sb-instagram"><i class="fa fa-instagram"></i></a>
                        </div><!-- .social-bar -->
                    </div><!-- .column -->
                </div><!-- .inner -->
            </div><!-- .copyright -->
        </div><!-- .container -->
    </footer><!-- .footer -->
</div><!-- .page-wrapper -->

<!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
<script src="js/vendor/jquery-2.1.4.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/placeholder.js"></script>
<script src="js/vendor/smoothscroll.js"></script>
<script src="js/vendor/jquery.stellar.min.js"></script>
<script src="js/vendor/velocity.min.js"></script>
<script src="js/vendor/magnific-popup.min.js"></script>
<script src="js/vendor/owl.carousel.min.js"></script>
<script src="js/vendor/jquery.mCustomScrollbar.min.js"></script>
<script src="js/scripts.js"></script>
<script src="color-switcher/color-switcher.js"></script>

</body><!-- <body> -->

</html>
