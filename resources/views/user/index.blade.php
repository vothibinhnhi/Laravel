@include('user.header')
<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <!-- Hero Post Slides -->
    <div class="hero-post-slides owl-carousel">

        <!-- Single Slide -->
        <div class="single-slide">
            <div class="container-fluid">
                <div class="row">
                    <!-- Single Blog Post Area -->
                    @foreach ($getRandom1 as $item)
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms"
                                data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="{{ route('showNews', $item->id) }}"><img src="{{ $item->thumbnail }}" width="100%"
                                            style="height: 69vh !important" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">{{ date_format($item->created_at, 'F d,Y') }}</span>
                                    <a href="{{ route('showNews', $item->id) }}"
                                        class="post-title">{{ $item->title }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post Area -->
                        @foreach ($getRandom2 as $item)
                            <div class="single-blog-post style-1 mb-30" data-animation="fadeInUpBig" data-delay="300ms"
                                data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="{{ route('showNews', $item->id) }}"><img src="{{ $item->thumbnail }}" style="height: 32vh !important"
                                            alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">{{ date_format($item->created_at, 'F d,Y') }}</span>
                                    <a href="{{ route('showNews', $item->id) }}" class="post-title">{{ $item->title }}</a>
                                </div>
                            </div>
                        @endforeach
                        <!-- Single Blog Post Area -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="single-slide">
            <div class="container-fluid">
                <div class="row">
                    <!-- Single Blog Post Area -->
                    @foreach ($getRandom1 as $item)
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms"
                                data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="{{ route('showNews', $item->id) }}"><img src="{{ $item->thumbnail }}" width="100%"
                                            style="height: 69vh !important" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">{{ date_format($item->created_at, 'F d,Y') }}</span>
                                    <a href="{{ route('showNews', $item->id) }}" class="post-title">{{ $item->title }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post Area -->
                        @foreach ($getRandom2 as $item)
                            <div class="single-blog-post style-1 mb-30" data-animation="fadeInUpBig" data-delay="300ms"
                                data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="{{ route('showNews', $item->id) }}"><img src="{{ $item->thumbnail }}" style="height: 32vh !important"
                                            alt="" style=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">{{ date_format($item->created_at, 'F d,Y') }}</span>
                                    <a href="{{ route('showNews', $item->id) }}" class="post-title">{{ $item->title }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Intro News Area Start ##### -->
<section class="intro-news-area section-padding-100-0 mb-70">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Intro News Tabs Area -->
            <div class="col-12 col-lg-8">
                <div class="intro-news-tab">

                    <!-- Intro News Filter -->
                    <div class="intro-news-filter d-flex justify-content-between">
                        <h6>All the news</h6>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab"
                                    aria-controls="nav-1" aria-selected="true">Latest</a>
                                
                            </div>
                        </nav>
                    </div>

                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                            <div class="row">
                                @foreach ($getNews2Lasted as $item)
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="{{ route('showNews', $item->id) }}"><img src="{{ $item->thumbnail }}"
                                                        style="width: 100%;height:35vh !important" alt=""></a>

                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span
                                                    class="post-date">{{ date_format($item->created_at, 'F d,Y') }}</span>
                                                <a href="{{ route('showNews', $item->id) }}" class="post-title">{{ $item->title }}</a>
                                                <a href="#" class="post-author">By {{ $item->user['name'] }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- Single News Area -->
                                @foreach ($getNews6Lasted as $item)
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="{{ route('showNews', $item->id) }}"><img src="{{ $item->thumbnail }}"
                                                        style="width: 100%;height:14vh !important" alt=""></a>
                                                    {{-- Thêm ảnh = link ->làm upload   --}}

                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span
                                                    class="post-date">{{ date_format($item->created_at, 'F d,Y') }}</span>
                                                <a href="{{ route('showNews', $item->id) }}" class="post-title">{{ $item->title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar Widget -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="sidebar-area">

                    <!-- Newsletter Widget -->
                    <div class="single-widget-area newsletter-widget mb-30">
                        <h4>Subscribe to our newsletter</h4>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Your E-mail">
                            <button type="submit" class="btn newsbox-btn w-100">Subscribe</button>
                        </form>
                        <p class="mt-30">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue
                            condimentum. Etiam pretium turpis eget nibh . volutpat lobortis.</p>
                    </div>

                    <!-- Add Widget -->
                    <div class="single-widget-area add-widget mb-30">
                        <a href="#">
                            <img src="user/img/bg-img/add3.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Intro News Area End ##### -->

<!-- ##### Video Area Start ##### -->
<section class="video-area bg-img bg-overlay bg-fixed" style="background-image: url(user/img/bg-img/10.jpg);">
    <div class="container">
        <div class="row">
            <!-- Featured Video Area -->
            <div class="col-12">
                <div class="featured-video-area d-flex align-items-center justify-content-center">
                    <div class="video-content text-center">
                        <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                        <h3 class="video-title">{{@trans('index.user.index.video-title')}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Slideshow -->
    <div class="video-slideshow py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Video Slides -->
                    <div class="video-slides owl-carousel">
                        @foreach ($getNews9Lasted as $item)

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="{{ route('showNews', $item->id) }}"><img src="{{ $item->thumbnail }}"
                                            style="width: 100%;height:35vh !important" alt=""></a>
                                    <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">{{ date_format($item->created_at, 'F d,Y') }}</span>
                                    <a href="{{ route('showNews', $item->id) }}" class="post-title">{{ $item->title }}</a>
                                    <a href="#" class="post-author">By {{ $item->user['name'] }}</a>
                                </div>
                            </div>

                            <!-- Single News Area -->

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Video Area End ##### -->

<!-- ##### Top News Area Start ##### -->
<div class="top-news-area section-padding-100">
    <div class="container">
        <div class="row">
            @foreach ($getNewsLasted as $item)
                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="{{ route('showNews', $item->id) }}"><img src="{{ $item->thumbnail }}" style="width: 100%;height:35vh !important"
                                    alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">{{ date_format($item->created_at, 'F d,Y') }}</span>
                            <a href="{{ route('showNews', $item->id) }}" class="post-title">{{ $item->title }}</a>
                            <a href="#" class="post-author">By {{ $item->user['name'] }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Single News Area -->
            <div class="col-12 text-center">
                {{ $getNewsLasted->links() }}
            </div>

        </div>
    </div>
</div>
<!-- ##### Top News Area End ##### -->

<!-- ##### Add Area Start ##### -->
<div class="big-add-area mb-100">
    <div class="container-fluid">
        <a href="#"><img src="user/img/bg-img/add2.png" alt=""></a>
    </div>
</div>
<!-- ##### Add Area End ##### -->

<!-- ##### Footer Area Start ##### -->
@include('user.footer')
