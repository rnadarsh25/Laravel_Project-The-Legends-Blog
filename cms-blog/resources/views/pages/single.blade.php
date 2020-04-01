@extends('layouts.main')


@section('content')

<section class="section single-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            <div class="page-wrapper">
                                <div class="blog-title-area text-center">
                                    <ol class="breadcrumb hidden-xs-down">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                        <li class="breadcrumb-item active">{{$post->title}}</li>
                                    </ol>

                                    <span class="color-orange"><a href="tech-category-01.html" title="">{{$post->category->name}}</a></span>

                                    <h3>{{$post->title}}</h3>

                                    <div class="blog-meta big-meta">
                                        <small><a href="tech-single.html" title="">{{$post->created_at->toFormattedDateString()}}</a></small>
                                        <small><a href="tech-author.html" title="">by Jessica</a></small>
                                        <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                                    </div><!-- end meta -->

                                    <div class="post-sharing">
                                        <ul class="list-inline">
                                            <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                            <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                            <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div><!-- end post-sharing -->
                                </div><!-- end title -->

                                <div class="single-post-media">
                                    <img src="{{url($post->featured)}}" alt="" class="img-fluid">
                                </div><!-- end media -->

                                <div class="blog-content">  
                                    <div class="pp">
                                        
                                        {!! $post->content !!}
                                        
                                    </div><!-- end pp -->
                                   
                                </div><!-- end content -->

                                <div class="blog-title-area">
                                    <div class="tag-cloud-single">
                                        <span>Tags</span>
                                        <small><a href="#" title="">lifestyle</a></small>
                                        <small><a href="#" title="">colorful</a></small>
                                        <small><a href="#" title="">trending</a></small>
                                        <small><a href="#" title="">another tag</a></small>
                                    </div><!-- end meta -->

                                    <div class="post-sharing">
                                        <ul class="list-inline">
                                            <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                            <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                            <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div><!-- end post-sharing -->
                                </div><!-- end title -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="banner-spot clearfix">
                                            <div class="banner-img">
                                                <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                                            </div><!-- end banner-img -->
                                        </div><!-- end banner -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <hr class="invis1">

                                <div class="custombox prevnextpost clearfix">
                                    <div class="row">
                                        <div class="col-lg-6">
                                           @if($prev)
                                            <div class="blog-list-widget">
                                                <div class="list-group">
                                                    <a href="{{route('page.single', $prev->slug)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                                        <div class="w-100 justify-content-between text-right">
                                                            <img src="{{url($prev->featured)}}" alt="" class="img-fluid float-right">
                                                            <h5 class="mb-1">{{$prev->title}}</h5>
                                                            <small>Prev Post</small>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            @endif
                                        </div><!-- end col -->

                                        <div class="col-lg-6">
                                           @if($next)
                                            <div class="blog-list-widget">
                                                <div class="list-group">
                                                    <a href="{{route('page.single', $next->slug)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                                        <div class="w-100 justify-content-between">
                                                            <img src="{{url($next->featured)}}" alt="" class="img-fluid float-left">
                                                            <h5 class="mb-1">{{$next->title}}</h5>
                                                            <small>Next Post</small>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            @endif
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end author-box -->

                                <hr class="invis1">

                                <div class="custombox authorbox clearfix">
                                    <h4 class="small-title">About author</h4>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <img src="upload/author.jpg" alt="" class="img-fluid rounded-circle"> 
                                        </div><!-- end col -->

                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <h4><a href="#">{{$user->name}}</a></h4>
                                            <p>This blog is wriiten by me. <a href="#">visit my website</a> I hope you will like it. This post is about someone whom I always admired! </p>

                                            <div class="topsocial">
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                            </div><!-- end social -->

                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end author-box -->

                                <hr class="invis1">

                                <div class="custombox clearfix">
                                    <h4 class="small-title">3 Comments</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="comments-list">
                                                <div class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="upload/author.jpg" alt="" class="rounded-circle">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading user_name">Amanda Martines <small>5 days ago</small></h4>
                                                        <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean.</p>
                                                        <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="upload/author_01.jpg" alt="" class="rounded-circle">
                                                    </a>
                                                    <div class="media-body">

                                                        <h4 class="media-heading user_name">Baltej Singh <small>5 days ago</small></h4>

                                                        <p>Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small.</p>

                                                        <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="media last-child">
                                                    <a class="media-left" href="#">
                                                        <img src="upload/author_02.jpg" alt="" class="rounded-circle">
                                                    </a>
                                                    <div class="media-body">

                                                        <h4 class="media-heading user_name">Marie Johnson <small>5 days ago</small></h4>
                                                        <p>Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small.</p>

                                                        <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end custom-box -->

                                <hr class="invis1">

                                <div class="custombox clearfix">
                                    <h4 class="small-title">Leave a Reply</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="form-wrapper">
                                                <input type="text" class="form-control" placeholder="Your name">
                                                <input type="text" class="form-control" placeholder="Email address">
                                                <input type="text" class="form-control" placeholder="Website">
                                                <textarea class="form-control" placeholder="Your comment"></textarea>
                                                <button type="submit" class="btn btn-primary">Submit Comment</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end page-wrapper -->
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