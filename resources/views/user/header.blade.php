<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Newsbox - Modern Magazine </title>

    <!-- Favicon -->
    <link rel="icon" href="/user/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/user/style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="newsbox-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newsboxNav">

                        <!-- Nav brand -->
                        <a href="/" class="nav-brand"><img src="/user/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    {{-- <li><a href="#">International</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Europe</li>
                                                <li><a href="#">United Kingdom</a></li>
                                                <li><a href="#">Germany</a></li>
                                                <li><a href="#">Latvia</a></li>
                                                <li><a href="#">Poland</a></li>
                                                <li><a href="#">Italy</a></li>
                                                <li><a href="#">France</a></li>
                                                <li><a href="#">Crotia</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Africa</li>
                                                <li><a href="#">Algeria</a></li>
                                                <li><a href="#">Angola</a></li>
                                                <li><a href="#">Benin</a></li>
                                                <li><a href="#">Botswana</a></li>
                                                <li><a href="#">Burkina Faso</a></li>
                                                <li><a href="#">Burundi</a></li>
                                                <li><a href="#">Cameroon</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Asia</li>
                                                <li><a href="#">Bangladesh</a></li>
                                                <li><a href="#">Chaina</a></li>
                                                <li><a href="#">India</a></li>
                                                <li><a href="#">Afganistan</a></li>
                                                <li><a href="#">Sri Lanka</a></li>
                                                <li><a href="#">Nepal</a></li>
                                                <li><a href="#">Bhutan</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">USA &amp; Canada</li>
                                                <li><a href="#">California</a></li>
                                                <li><a href="#">Florida</a></li>
                                                <li><a href="#">Alabama</a></li>
                                                <li><a href="#">New Yorks</a></li>
                                                <li><a href="#">Texas</a></li>
                                                <li><a href="#">Lowa</a></li>
                                                <li><a href="#">Montana</a></li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                    @foreach ($getMenu as $item)
                                        <li>
                                            <a href="#">{{ $item->name }}</a>
                                            <ul class="dropdown">
                                                @foreach ($item->kindOfNews as $submenu)
                                                    <li><a href="">{{ $submenu->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach

                                    {{-- <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="catagory.html">Catagory</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sport</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Archery</a></li>
                                            <li><a href="#">Badminton</a></li>
                                            <li><a href="#">Baseball</a></li>
                                            <li><a href="#">Boxing</a></li>
                                            <li><a href="#">Climbing</a></li>
                                            <li><a href="#">Cricket</a></li>
                                            <li><a href="#">Football</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Lifestyle</a></li> --}}
                                </ul>

                                <!-- Header Add Area -->
                                {{-- <div class="header-add-area">
                                    <a href="#">
                                        <img src="user/img/bg-img/add.png" alt="">
                                    </a>
                                </div> --}}
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breaking News Area Start ##### -->
    <section class="breaking-news-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                        <div class="title">
                            <h6>{{@trans('header.user.header.title')}}</h6>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                @foreach ($getTrending as $item)
                                    <li><a href="{{ route('showNews', $item->id) }}">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breaking News Area End ##### -->
