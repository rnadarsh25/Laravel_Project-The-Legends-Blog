@extends('layouts.main')


@section('content')

        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    <div class="first-slot">
                        <div class="masonry-box post-media">
                             <img src="{{url($movie1->featured)}}" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">{{$movie1->category->name}}</a></span>
                                        <h4><a href="{{route('page.single', $movie1->slug)}}" title="">{{$movie1->title}}</a></h4>
                                        <small><a href="tech-single.html" title="">{{$movie1->created_at->diffForHumans()}}</a></small>
                                        <small><a href="tech-author.html" title=""> by {{$user->name}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end first-side -->

                    <div class="second-slot">
                        <div class="masonry-box post-media">
                             <img src="{{url($news1->featured)}}" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">{{$news1->category->name}}</a></span>
                                        <h4><a href="{{route('page.single', $news1->slug)}}" title="">{{$news1->title}}</a></h4>
                                        <small><a href="tech-single.html" title="">{{$news1->created_at->diffForHumans()}}</a></small>
                                        <small><a href="tech-author.html" title="">by {{$user->name}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->

                    <div class="last-slot">
                        <div class="masonry-box post-media">
                             <img src="{{url($travel1->featured)}}" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">{{$travel1->category->name}}</a></span>
                                        <h4><a href="{{route('page.single', $travel1->slug)}}" title="">{{$travel1->title}}</a></h4>
                                        <small><a href="tech-single.html" title="">{{$travel1->created_at->diffForHumans()}}</a></small>
                                        <small><a href="tech-author.html" title="">by {{$user->name}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Recent Blog Posts <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                                
                                @foreach($posts as $post)
                                
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{route('page.single', $post->slug)}}" title="">
                                                <img src="{{url($post->featured)}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="{{route('page.single', $post->slug)}}" title="">{{$post->title}}</a></h4>
                                        <p> This post is about <strong>{{$post->title}}</strong> who have done something amazing in his life. He taught us something that live your life not just for yourself but for others as well.</p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">{{$post->category->name}}</a></small>
                                        <small><a href="tech-single.html" title="">{{$post->created_at->toFormattedDateString()}}</a></small>
                                        <small><a href="tech-author.html" title="">by {{$user->name}}</a></small>
                                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 1114</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                                
                                @endforeach
                                
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_07.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Trend Videos</h2>
                                <div class="trend-videos">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="upload/tech_video_01.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class="videohover"></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="tech-single.html" title="">We prepared the best 10 laptop presentations for you</a></h4>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr class="invis">

                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="upload/tech_video_02.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class="videohover"></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="tech-single.html" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr class="invis">

                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="upload/tech_video_03.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class="videohover"></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="tech-single.html" title="">Both blood pressure monitor and intelligent clock</a></h4>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end videos -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Popular Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_08.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">5 Beautiful buildings you need..</h5>
                                                <small>12 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Let's make an introduction for..</h5>
                                                <small>11 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Did you see the most beautiful..</h5>
                                                <small>07 Jan, 2016</small>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Recent Reviews</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_02.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Banana-chip chocolate cake recipe..</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">10 practical ways to choose organic..</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="upload/tech_blog_07.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">We are making homemade ravioli..</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Follow Us</h2>

                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button facebook-button">
                                            <i class="fa fa-facebook"></i>
                                            <p>27k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button twitter-button">
                                            <i class="fa fa-twitter"></i>
                                            <p>98k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button google-button">
                                            <i class="fa fa-google-plus"></i>
                                            <p>17k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button youtube-button">
                                            <i class="fa fa-youtube"></i>
                                            <p>22k</p>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end widget -->

                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

@endsection