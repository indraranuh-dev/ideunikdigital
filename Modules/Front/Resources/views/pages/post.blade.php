@extends('front::layouts.master')

@section('content')
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">BLOG DETAILS</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Blog posts -->
    <section class="main-content blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-wrap">
                        <article class="post clearfix">
                            <div class="featured-post">
                                <img src="images/blog/1.jpg" alt="image">
                                <ul class="post-comment">
                                    <li class="date">
                                        <span class="day"> 11 </span>
                                    </li>
                                    <li class="comment">
                                        August
                                    </li>
                                </ul><!-- /.post-comment -->
                            </div><!-- /.feature-post -->
                            <div class="content-post">
                                <h2 class="title-post"><a href="blog-single.html">
                                        What Are The Search Engines And How To</a></h2>
                                <ul class="meta-post clearfix">
                                    <li class="author">
                                        <a href="#">By Admin</a>
                                    </li>
                                    <li class="categories">
                                        <a href="#">Makerting</a>, <a href="#">Website</a>
                                    </li>
                                    <li class="vote">
                                        <a href="#">16</a>
                                    </li>
                                </ul><!-- /.meta-post -->
                                <div class="entry-post excerpt">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                        eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                        takimata sanctus est Lorem ipsum dolor sit amet. At vero eos et accusam et justo duo
                                        dolores et ea rebum.
                                    </p>
                                    <div class="more-link"><a href="blog-single.html">CONTINUE RED</a></div>
                                </div>
                            </div><!-- /.content-post -->
                        </article>

                        <article class="post clearfix">
                            <div class="featured-post flat-blog-slider">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <a href="#"><img src="images/blog/2.jpg" alt="image"></a>
                                        </li>
                                        <li>
                                            <a href="blog-single-v1.html"><img src="images/blog/1.jpg" alt="image"></a>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="post-comment">
                                    <li class="date">
                                        <span class="day"> 12 </span>
                                    </li>
                                    <li class="comment">
                                        April
                                    </li>
                                </ul><!-- /.post-comment -->
                            </div><!-- /.feature-post -->
                            <div class="content-post">
                                <h2 class="title-post"><a href="blog-single.html">
                                        This Is Standerd Blog For Digital Seo</a></h2>
                                <ul class="meta-post clearfix">
                                    <li class="author">
                                        <a href="#">By Admin</a>
                                    </li>
                                    <li class="categories">
                                        <a href="#">Seo</a>, <a href="#">Business</a>
                                    </li>
                                    <li class="vote">
                                        <a href="#">16</a>
                                    </li>
                                </ul><!-- /.meta-post -->
                                <div class="entry-post excerpt">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                        eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                        takimata sanctus est Lorem ipsum dolor sit amet. At vero eos et accusam et justo duo
                                        dolores et ea rebum.
                                    </p>
                                    <div class="more-link"><a href="blog-single.html">CONTINUE RED</a></div>
                                </div>
                            </div><!-- /.content-post -->
                        </article>

                        <article class="post clearfix">
                            <div class="featured-post">
                                <iframe width="770" height="381"
                                        src="https://www.youtube.com/embed/TBJMq-isHU4"></iframe>
                                <ul class="post-comment">
                                    <li class="date">
                                        <span class="day"> 14 </span>
                                    </li>
                                    <li class="comment">
                                        May
                                    </li>
                                </ul><!-- /.post-comment -->
                            </div><!-- /.feature-post -->
                            <div class="content-post">
                                <h2 class="title-post"><a href="blog-single.html">Basic SEO On-Page Optimization Factors
                                    </a></h2>
                                <ul class="meta-post clearfix">
                                    <li class="author">
                                        <a href="#">By Admin</a>
                                    </li>
                                    <li class="categories">
                                        <a href="#">Maketing</a>, <a href="#">Seo</a>
                                    </li>
                                    <li class="vote">
                                        <a href="#">16</a>
                                    </li>
                                </ul><!-- /.meta-post -->
                                <div class="entry-post excerpt">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                        eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                        takimata sanctus est Lorem ipsum dolor sit amet. At vero eos et accusam et justo duo
                                        dolores et ea rebum.
                                    </p>
                                    <div class="more-link"><a href="blog-single.html">CONTINUE RED</a></div>
                                </div>
                            </div><!-- /.content-post -->
                        </article>

                    </div><!-- /.post-wrap -->
                    <div class="blog-pagination">
                        <ul class="flat-pagination clearfix">
                            <li class="prev">
                                <a href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li class="next">
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul><!-- /.flat-pagination -->
                    </div><!-- /.blog-pagination -->
                </div><!-- /.col-md-9 -->

                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="widget widget_search">
                            <form role="search" method="get" class="search-form" action="#">
                                <label>
                                    <input type="search" class="search-field" placeholder="Search …" value=""
                                           name="s">
                                </label>
                                <input type="submit" class="search-submit" value="Search">
                            </form>
                        </div><!-- /.widget-search -->

                        <div class="widget widget_categories">
                            <h5 class="widget-title">Popular Categories</h5>
                            <ul>
                                <li><a href="#">Business<span class="pull-right">(12)</span></a></li>
                                <li><a href="#">Website<span class="pull-right">(32)</span></a></li>
                                <li><a href="#">Financial<span class="pull-right">(17)</span></a></li>
                                <li><a href="#">Accounting<span class="pull-right">(9)</span></a></li>
                                <li><a href="#">Marketing<span class="pull-right">(25)</span></a></li>
                                <li><a href="#">Optimizing<span class="pull-right">(4)</span></a></li>
                            </ul>
                        </div><!-- /.widget-categories -->

                        <div class="widget widget-recent-news">
                            <h5 class="widget-title">Recent Posts</h5>
                            <ul class="popular-news clearfix">
                                <li>
                                    <div class="thumb">
                                        <img src="images/blog/s1.jpg" alt="image">
                                    </div>
                                    <div class="text">
                                        <h6>
                                            <a href="#">Optimizing your Website for Mobile Search</a>
                                        </h6>
                                        <a class="post_meta">May 28, 2017</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="images/blog/s3.jpg" alt="image">
                                    </div>
                                    <div class="text">
                                        <h6><a href="#">Advanced Guide to Google Penalty Removal</a></h6>
                                        <a class="post_meta">July 22, 2017</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="images/blog/s2.jpg" alt="image">
                                    </div>
                                    <div class="text">
                                        <h6><a href="#"> Website Speed and Search Rankings</a></h6>
                                        <a class="post_meta">June 21, 2017</a>
                                    </div>
                                </li>
                            </ul><!-- /.popular-news -->
                        </div><!-- /.widget-popular-news -->

                        <div class="widget widget_archive">
                            <h5 class="widget-title">Archive</h5>
                            <ul class="unstyled">
                                <li><a href="#">May'16</a></li>
                                <li><a href="#">April'16 </a></li>
                                <li><a href="#">March'16</a></li>
                                <li><a href="#">February'16</a></li>
                                <li><a href="#">January'16</a></li>
                                <li><a href="#">December'16</a></li>
                            </ul>
                        </div><!-- /.widget-Archive -->

                        <div class="widget widget_tag">
                            <h5 class="widget-title">Featured Tags</h5>
                            <div class="tag-list">
                                <a class="active" href="#">Design</a>
                                <a href="#">Seo</a>
                                <a href="#">Website</a>
                                <a href="#">Makerting</a>
                                <a href="#">Business</a>
                            </div>
                        </div><!-- /.widget-tag -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection
