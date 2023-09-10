<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="page-wrapper">

    <!-- main header -->
    <header class="main-header">

        <!-- header top -->
        <div class="header-top black-bg-4">
            <div class="container clearfix">
                <!--Top Left-->
                <div class="top-left pull-left">
                    <ul class="links-nav clearfix">
                        <li>Welcome to Starting Business company</li>
                    </ul>
                </div>

                <!--Top Right-->
                <div class="top-right pull-right">
                    <div class="social-links clearfix">
                        <a href="#"><span class="fa fa-facebook-f"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-instagram"></span></a>
                        <a href="#"><span class="fa fa-pinterest-p"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- header info -->
        <div class="header-info">
            <div class="container">
                <div class="clearfix">
                    <div class="float-left">
                        <div class="main-logo">
                            <a class="navbar-brand pr-50" href="index.html"><img src="/code/images/logo.png" class="logo"
                                                                                 alt=""></a>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="header-contact-info">
                            <ul>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="flaticon-signs"></span>
                                    </div>
                                    <div class="text-holder">

                                        <h6>321, Breaking Street</h6>
                                        <p>Newyork ,USA 10002</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="flaticon-technology-1"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h6>Supportus@gmail.com</h6>
                                        <p>1-8000-978-6543</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="flaticon-clock-2"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h6>Mon - Sat 9.00 - 19.00</h6>
                                        <a href="#"><p>Sunday closed</p></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="container clearfix">


                <div class="upper-right clearfix">

                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="#">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home One</a></li>
                                            <li><a href="index-2.html">Home Two</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="service.html">Services</a></li>
                                            <li><a href="single-service.html">Services Details</a></li>
                                            <li><a href="faq.html">FAQ's</a></li>
                                            <li><a href="error.html">404 Page</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Projects</a>
                                        <ul>
                                            <li><a href="project.html">Projects</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog-1.html">Blog Default</a></li>
                                            <li><a href="blog-2.html">Blog Clasic</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop-1.html">Shop</a></li>
                                            <li><a href="shop-cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="shop-single.html">Shop Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>

                        <!-- Main Menu End-->
                        <div class="outer-box float-right">
                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value=""
                                                               placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span
                                                                    class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="reservation-form-btn consult-form-btn"><span
                                        class="icon flaticon-menu-options"></span></div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="index.html" class="img-responsive"><img src="/code/images/logo.png" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="index-2.html">Home Two</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="service.html">Services</a></li>
                                        <li><a href="single-service.html">Services Details</a></li>
                                        <li><a href="faq.html">FAQ's</a></li>
                                        <li><a href="error.html">404 Page</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Projects</a>
                                    <ul>
                                        <li><a href="project.html">Projects</a></li>
                                        <li><a href="project-details.html">Project Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-1.html">Blog Default</a></li>
                                        <li><a href="blog-2.html">Blog Clasic</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop-1.html">Shop</a></li>
                                        <li><a href="shop-cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="shop-single.html">Shop Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->
    </header>

    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="/code/images/image-1.jpg" data-title="Slide Title"
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                             data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                             src="/code/images/image-1.jpg">

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['650','750','700','420']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['-100','-100','-100','-90']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <h2 class="white-heading">Starting helps you to<br> innovative and<br>great plan</h2>
                        </div>

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['500','500','450','420']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['35','40','25','15']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <div class="text">Starting business theme continues to grow every day thanks to the
                                confidence.
                            </div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['550','600','650','420']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['115','130','100','100']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <a href="services.html" class="theme-btn btn-style-two">Read More</a>
                        </div>

                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="/code/images/image-2.jpg" data-title="Slide Title"
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                             data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                             src="/code/images/image-2.jpg">

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['550','550','650','420']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['-100','-100','-100','-90']"
                             data-x="['right','right','right','right']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <h2 class="white-heading">Provide creative <br> and consulting <br>services</h2>
                        </div>

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['500','500','450','420']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['35','40','0','5']"
                             data-x="['right','right','right','right']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <div class="text">Starting business theme continues to grow every day thanks to the
                                confidence.
                            </div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['550','550','650','420']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['115','130','80','105']"
                             data-x="['right','right','right','right']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <a href="services.html" class="theme-btn btn-style-two">Read More</a>
                        </div>

                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="/code/images/image-3.jpg" data-title="Slide Title"
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                             data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                             src="/code/images/image-3.jpg">

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['550','650','400','420']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['-100','-100','-100','-120']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <h2 class="white-heading">World best <br> leading consulting <br>company inc</h2>
                        </div>

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['550','700','600','420']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['20','45','20','30']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <div class="text">Starting business theme continues to grow every day <br>thanks to the
                                confidence.
                            </div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['550','600','600','420']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['110','130','105','120']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <a href="services.html" class="theme-btn btn-style-two">Read More</a>
                        </div>

                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- welcome section -->
    <section class="welcome-section sp-two">
        <div class="container">
            <div class="welcome-title">
                <h2>WELCOME TO STARTING <span class="theme-color">CONSULTING COMPANY</span></h2>
                <div class="text">Ipsum is simply text of the stry simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum is simply text of the.<br> Lorem Ipsum is simply text of the stry simply dummy
                    text of the printing and.
                </div>
            </div>
            <div class="row">
                <div class="services-block-one col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="/code/images/welcome-1.jpg" alt="">
                        </div>
                        <div class="lower-content">
                            <div class="upper-box">
                                <div class="icon-box">
                                    <span class="flaticon-business-10"></span>
                                </div>
                                <h3><a href="services-single.html">Corporate Services</a></h3>
                            </div>
                            <div class="text">Costs are closely monitored during Starting and you receive a monthly
                                report, including your contingency balance..
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-block-one col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="/code/images/welcome-2.jpg" alt="">
                        </div>
                        <div class="lower-content">
                            <div class="upper-box">
                                <div class="icon-box">
                                    <span class="flaticon-pie-chart"></span>
                                </div>
                                <h3><a href="services-single.html">Financial Planing</a></h3>
                            </div>
                            <div class="text">Costs are closely monitored during Starting and you receive a monthly
                                report, including your contingency balance..
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-block-one col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="/code/images/welcome-3.jpg" alt="">
                        </div>
                        <div class="lower-content">
                            <div class="upper-box">
                                <div class="icon-box">
                                    <span class="flaticon-luxury"></span>
                                </div>
                                <h3><a href="services-single.html">Business Consulting</a></h3>
                            </div>
                            <div class="text">Costs are closely monitored during Starting and you receive a monthly
                                report, including your contingency balance..
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>
    </section>

    <!-- about us -->
    <section class="about-us sp-two black-bg-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-block-one light">
                        <h2>We have 25 years experiens & We provied Business Idea</h2>
                        <div class="text mb-30">Just sit right back and you'll hear a tale a tale of a fateful trip
                            started from this tropic port aboard this tiny ship. Love exciting and new. Come aboard were
                            expecting you. Love life's sweetest reward Let it flow it floats back to you. Feels so right
                            it cant be wrong. Rockin' and rollin' all week long. You wanna be where you can see our
                            troubles are all the same. You wanna be where everybody knows Your name.
                        </div>
                        <div class="link"><a href="#" class="theme-btn btn-style-two">Read More</a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image mb-30">
                        <img src="/code/images/about.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="service-section sp-two">
        <div class="container">
            <div class="sec-title centered">
                <h2>Our Services</h2>
            </div>
            <div class="row">
                <div class="services-block-two col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="flaticon-graphic-16"></span>
                        </div>
                        <h2>01</h2>
                        <h5><a href="single-service.html" class="tran4s">Investing Planing</a></h5>
                        <p>We’ll generate a sitemap for your site, submit it to search engine is and track crawler
                            access.</p>
                    </div>
                </div>
                <div class="services-block-two col-lg-4 col-md-6">
                    <div class="inner-box active">
                        <div class="icon-box">
                            <span class="flaticon-money-6"></span>
                        </div>
                        <h2>02</h2>
                        <h5><a href="single-service.html" class="tran4s">Retirement Planing</a></h5>
                        <p>We’ll generate a sitemap for your site, submit it to search engine is and track crawler
                            access.</p>
                    </div>
                </div>
                <div class="services-block-two col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="flaticon-graphic-12"></span>
                        </div>
                        <h2>03</h2>
                        <h5><a href="single-service.html" class="tran4s">Lawyer Consulting</a></h5>
                        <p>We’ll generate a sitemap for your site, submit it to search engine is and track crawler
                            access.</p>
                    </div>
                </div>
                <div class="services-block-two col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="flaticon-travel-1"></span>
                        </div>
                        <h2>04</h2>
                        <h5><a href="single-service.html" class="tran4s">Business Idea</a></h5>
                        <p>We’ll generate a sitemap for your site, submit it to search engine is and track crawler
                            access.</p>
                    </div>
                </div>
                <div class="services-block-two col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="flaticon-coins-1"></span>
                        </div>
                        <h2>05</h2>
                        <h5><a href="single-service.html" class="tran4s">Risk Management</a></h5>
                        <p>We’ll generate a sitemap for your site, submit it to search engine is and track crawler
                            access.</p>
                    </div>
                </div>
                <div class="services-block-two col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="flaticon-money-8"></span>
                        </div>
                        <h2>06</h2>
                        <h5><a href="single-service.html" class="tran4s">Business Policy</a></h5>
                        <p>We’ll generate a sitemap for your site, submit it to search engine is and track crawler
                            access.</p>
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>
    </section>

    <!--Fact Counter-->
    <div class="fact-counter gradient-bg sp-two">
        <div class="container">
            <div class="row">

                <!--Column-->
                <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="900ms">
                    <div class="item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-agenda"></i>
                            </div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000" data-stop="350">0</span>
                                <p>Successfull Projects</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!--Column-->
                <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="300ms">
                    <div class="item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-users"></i>
                            </div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000" data-stop="275">0</span>
                                <p>Satisfied Customers</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!--Column-->
                <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="600ms">
                    <div class="item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-medal-2"></i>
                            </div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000" data-stop="125">0</span>
                                <p>Awards Wining </p>
                            </div>
                        </div>
                    </div>
                </article>


                <!--Column-->
                <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="900ms">
                    <div class="item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-business-14"></i>
                            </div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000" data-stop="12">0</span>
                                <p>Year of experience</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <section class="testimonial sp-one" style="background-image:url(/code/images/parallax-1.png);">
        <div class="container">
            <div class="sec-title centered">
                <h2>What Client Say</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                <div class="testimonial-block-one">
                    <div class="quote-icon">
                        <span class="flaticon-left-quotes-sign"></span>
                    </div>
                    <div class="text">Focus Lab took a unique and very cool-looking design approach to its testimonial
                        page -- which is fitting, seeing as its trade is in creating visual branding systems.
                    </div>
                    <div class="author">
                        <div class="image"><img src="/code/images/author-3.jpg" alt=""></div>
                        <h4>Robert Boult</h4>
                        <p>CO-Founder</p>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="quote-icon">
                        <span class="flaticon-left-quotes-sign"></span>
                    </div>
                    <div class="text">Focus Lab took a unique and very cool-looking design approach to its testimonial
                        page -- which is fitting, seeing as its trade is in creating visual branding systems.
                    </div>
                    <div class="author">
                        <div class="image"><img src="/code/images/author-2.jpg" alt=""></div>
                        <h4>Maria Josefine</h4>
                        <p>Manager</p>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="quote-icon">
                        <span class="flaticon-left-quotes-sign"></span>
                    </div>
                    <div class="text">Focus Lab took a unique and very cool-looking design approach to its testimonial
                        page -- which is fitting, seeing as its trade is in creating visual branding systems.
                    </div>
                    <div class="author">
                        <div class="image"><img src="/code/images/author-4.jpg" alt=""></div>
                        <h4>Adam Smith</h4>
                        <p>Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- project section -->
    <section class="project-section sp-two grey-bg">
        <div class="container">
            <div class="sec-title centered">
                <h2>Latest Project</h2>
            </div>
            <!--Sortable Gallery-->
            <div class="mixitup-gallery">

                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns">
                        <li class="filter active" data-role="button" data-filter="all"><span>View All</span></li>
                        <li class="filter" data-role="button" data-filter=".Consultin"><span>Consulting</span></li>
                        <li class="filter" data-role="button" data-filter=".Finance"><span>Finance</span></li>
                        <li class="filter" data-role="button" data-filter=".Marketing"><span>Marketing</span></li>
                        <li class="filter" data-role="button" data-filter=".Growth"><span>Growth</span></li>
                    </ul>
                </div>

                <div class="filter-list row clearfix">


                    <!-- projects block one -->
                    <div class="projects-block-two mix all col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="/code/images/1.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="project-details.html">International Meet</a></h3>
                                            <h4 class="cat"><a href="project-details.html">Finance, Marketing</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- projects block one -->
                    <div class="projects-block-two mix all Marketing col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="/code/images/2.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="project-details.html">Consumer Products</a></h3>
                                            <h4 class="cat"><a href="project-details.html">Growth, Consulting</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- projects block one -->
                    <div class="projects-block-two mix all Finance col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="/code/images/3.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="project-details.html">Best Consultation</a></h3>
                                            <h4 class="cat"><a href="project-details.html">Finance, Consulting</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- projects block one -->
                    <div class="projects-block-two mix all Finance Marketing col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="/code/images/4.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="project-details.html">Latest Technology</a></h3>
                                            <h4 class="cat"><a href="project-details.html">Marketing, Growth</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- projects block one -->
                    <div class="projects-block-two mix all Growth col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="/code/images/5.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="project-details.html">Business Idea</a></h3>
                                            <h4 class="cat"><a href="project-details.html">Business, Marketing</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- projects block one -->
                    <div class="projects-block-two mix all Consultin col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="/code/images/6.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="project-details.html">Business Policy</a></h3>
                                            <h4 class="cat"><a href="project-details.html">Marketing, Growth</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- client logo -->
    <section class="client-logo sp-five grey-bg">
        <div class="container">
            <div class="five-item-carousel owl-carousel owl-theme owl-dot-none owl-nav-none">
                <div class="img-box">
                    <img src="/code/images/1.jpg" alt="">
                </div>
                <div class="img-box">
                    <img src="/code/images/2.jpg" alt="">
                </div>
                <div class="img-box">
                    <img src="/code/images/3.jpg" alt="">
                </div>
                <div class="img-box">
                    <img src="/code/images/1.jpg" alt="">
                </div>
                <div class="img-box">
                    <img src="/code/images/2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- why-chooseus -->
    <section class="why-chooseus sp-four">
        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="image">
                        <img src="/code/images/people.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="text-block-two">
                        <div class="title">
                            <h2>Why People <span>Choosing Starting</span></h2>
                        </div>
                        <div class="text">More split well sentimental publicly regarding distant hello adroit after
                            ocelot cut the abashe
                            explicitly much rabid one goodness within that tarantula stung well against cast obscure
                            badger jeepers quail congenially along hello where.
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="list-style-one">
                                    <li>Trusted Company</li>
                                    <li>Safe &amp; Secure</li>
                                    <li>Customer Relationship</li>
                                    <li>Quality Services</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="list-style-one">
                                    <li>Trusted Company</li>
                                    <li>Safe &amp; Secure</li>
                                    <li>Customer Relationship</li>
                                    <li>Quality Services</li>
                                </ul>
                            </div>

                        </div>

                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one">Vew Details</a></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action-one text-center sp-one" style="background-image:url(/code/images/parallax-2.jpg);">
        <div class="container">
            <div class="default-video-box">
                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s"
                   class="overlay-link lightbox-image video-fancybox"><span class="flaticon-arrows"></span></a>
            </div>
            <h2>Our training is simple to understand</h2>
            <div class="text">More split well sentimental publicly regarding distant hello adroit after ocelot cut the
                abashe explicitly much rabid one goodness within that tarantula stung well against cast obscure badger
                jeepers quail congenially along hello where.
            </div>
            <a href="#" class="theme-btn btn-style-eleven">GET A QUOTES</a>
        </div>
    </section>

    <!-- blog section -->
    <section class="blog-section sp-two">
        <div class="container">
            <div class="sec-title centered">
                <h2>Latest From Blog</h2>
            </div>
            <div class="row">
                <div class="news-block-one col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-details.html"><img src="/code/images/news-1.jpg" alt=""></a>
                            <div class="post-time">16 Jan, 2018</div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="blog-details.html">How to become a best sale marketer in a year!</a></h3>
                            <a href="blog-details.html" class="more-detail">More Details <span
                                        class="icon fa fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="news-block-one col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-details.html"><img src="/code/images/news-2.jpg" alt=""></a>
                            <div class="post-time">16 Jan, 2018</div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="blog-details.html">Finance and legal work throughout the project</a></h3>
                            <a href="blog-details.html" class="more-detail">More Details <span
                                        class="icon fa fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="news-block-one col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-details.html"><img src="/code/images/news-3.jpg" alt=""></a>
                            <div class="post-time">16 Jan, 2018</div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="blog-details.html">How to become a best sale marketer in a year!</a></h3>
                            <a href="blog-details.html" class="more-detail">More Details <span
                                        class="icon fa fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>
    </section>

    <!-- map section -->
    <section class="map-section">
        <div class="home-google-map">
            <div
                    class="google-map"
                    id="contact-google-map"
                    data-map-lat="40.700843"
                    data-map-lng="-74.004012"
                    data-icon-path="/code/images/map-marker.png"
                    data-map-title="Chester"
                    data-map-zoom="11">
            </div>
        </div>
    </section>

    <!-- contact form -->
    <section class="contact-form-section sp-five">
        <div class="container">
            <div class="consultation-form">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="contact-info">
                            <h4>Contact Info</h4>
                            <ul class="list-style-four mb-40">
                                <li><i class="flaticon-signs"></i><strong>Address:</strong> 121, Park Drive, Varick Str
                                    <br>New York, NY 10012, USA
                                </li>
                                <li><i class="flaticon-technology-1"></i><strong>Phone:</strong> (123) 0200 12345 &amp;
                                    <br>1800-45-678-9012
                                </li>
                                <li><i class="flaticon-note"></i><strong>Email:</strong> mailus@starting.com</li>
                            </ul>
                            <ul class="social-icon-four">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="default-form-area">
                            <form id="contact-form" name="contact_form" class="contact-form style-two"
                                  action="inc/sendmail.php" method="post">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group style-two">
                                            <input type="text" name="form_name" class="form-control" value=""
                                                   placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group style-two">
                                            <input type="email" name="form_email" class="form-control required email"
                                                   value="" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group style-two">
                                            <textarea name="form_message" class="form-control textarea required"
                                                      placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-section-btn">
                                    <div class="form-group style-two">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control"
                                               type="hidden" value="">
                                        <button class="theme-btn btn-style-two" type="submit"
                                                data-loading-text="Please wait...">send message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Main Footer-->
    <footer class="main-footer">
        <div class="footer-top sp-two black-bg-3">
            <div class="container">
                <div class="row">
                    <!--footer about one -->
                    <div class="footer-about footer-column-border col-xl-4 col-lg-6">
                        <div class="inner">
                            <div class="footer-logo"><img src="/code/images/footer-logo.png" alt=""></div>
                            <div class="text">Over 24 years experience and knowledge international standards,
                                technologicaly changes and industrial systems, we are dedicated to provides seds the
                                best and economical solutions to our valued.
                            </div>
                            <div class="link"><a href="#" class="thme-btn btn-style-twelve">Read More</a></div>
                        </div>
                    </div>
                    <!-- end -->

                    <!--footer link-->
                    <div class="footer-link footer-column-border col-xl-4 col-lg-6">
                        <h3 class="footer-title">Usefull Links</h3>
                        <div class="inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><a href="3"><i class="fa fa-angle-right"></i>Financial Planning</a></li>
                                        <li><a href="3"><i class="fa fa-angle-right"></i>Saving & Investing</a></li>
                                        <li><a href="3"><i class="fa fa-angle-right"></i>Mortgage Advice</a></li>
                                        <li><a href="3"><i class="fa fa-angle-right"></i>Retirement Plan</a></li>
                                        <li><a href="3"><i class="fa fa-angle-right"></i>Market Research</a></li>
                                        <li><a href="3"><i class="fa fa-angle-right"></i>Debt & Borrowing</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><a href="3"><i class="fa fa-angle-right"></i>About Starting</a></li>
                                        <li><a href="3"><i class="fa fa-angle-right"></i>Customer FAQ’s</a></li>
                                        <li><a href="3"><i class="fa fa-angle-right"></i>Testimonials</a></li>
                                        <li><a href="3"><i class="fa fa-angle-right"></i>Get a Quote</a></li>
                                        <li><a href="3"><i class="fa fa-angle-right"></i>Meet Our Team</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end -->
                    <!--footer newsletter one -->
                    <div class="footer-newsletter footer-column-border col-xl-4 col-lg-6">
                        <h3 class="footer-title">Newsletter</h3>
                        <div class="inner">
                            <div class="text">Sign up today for get hints, tips, latest updates & new product of
                                Starting.
                            </div>
                            <form class="subscribe-form-two">
                                <div class="form-group">
                                    <input type="email" placeholder="Email Addres...">
                                    <button type="submit" class="fa fa-paper-plane"></button>
                                </div>
                            </form>
                            <ul class="social-icon-four">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end -->

                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom text-center black-bg">
            <div class="container">
                <div class="footer-copyright">Copyrights © 2018 <a href="#">Starting</a> All Rights Reserved.</div>
            </div>
        </div>
    </footer>
    <!--Main Footer-->

</div>
<!--End pagewrapper-->


<!-- Scroll Top Button -->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</button>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
