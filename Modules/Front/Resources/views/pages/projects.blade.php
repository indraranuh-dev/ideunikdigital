@extends('front::layouts.master')

@section('content')
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">PROJECT</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="blog.html">Project</a></li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Portfolio -->
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="portfolio-filter style1">
                        <li class="active"><a data-filter="*" href="#">All Projects</a></li>
                        <li><a data-filter=".builder" href="#">Makerting</a></li>
                        <li><a data-filter=".electric" href="#">Seo</a></li>
                        <li><a data-filter=".hammer" href="#">Design</a></li>
                        <li><a data-filter=".painting" href="#">Photo gallery</a></li>
                    </ul><!-- /.project-filter -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-portfolio grid-3columns">
                        <div class="portfolio-wrap clearfix">
                            <div class="item builder painting electric">
                                <div class="featured-images">
                                    <img src="images/portfolio/case-1.png" alt="images">
                                    <div class="project-title">
                                        <h3><a href="#">60% increase in organic traffic.</a></h3>
                                        <div class="project-redmore"><a href="#">See full case study</a></div>
                                    </div>
                                    <div class="overlay">
                                    </div>
                                </div><!-- /.featured-images -->
                            </div><!-- /.portfolio-item -->

                            <div class="item painting">
                                <div class="featured-images">
                                    <img src="images/portfolio/case-2.png" alt="images">
                                    <div class="project-title">
                                        <h3><a href="#">243% increase in the number of keywords driving traffic to the
                                                site</a></h3>
                                        <div class="project-redmore"><a href="#">See full case study</a></div>
                                    </div>
                                    <div class="overlay">
                                    </div>
                                </div><!-- /.featured-images -->
                            </div><!-- /.portfolio-item -->

                            <div class="item painting electric">
                                <div class="featured-images">
                                    <img src="images/portfolio/case-3.png" alt="images">
                                    <div class="project-title">
                                        <h3><a href="#">391% increase in website visits.</a></h3>
                                        <div class="project-redmore"><a href="#">See full case study</a></div>
                                    </div>
                                    <div class="overlay">
                                    </div>
                                </div><!-- /.featured-images -->
                            </div><!-- /.portfolio-item -->

                            <div class="item painting electric hammer">
                                <div class="featured-images">
                                    <img src="images/portfolio/case-4.png" alt="images">
                                    <div class="project-title">
                                        <h3><a href="#">568.67% increase in website traffic.</a></h3>
                                        <div class="project-redmore"><a href="#">See full case study</a></div>
                                    </div>
                                    <div class="overlay">
                                    </div>
                                </div><!-- /.featured-images -->
                            </div><!-- /.portfolio-item -->

                            <div class="item builder painting hammer">
                                <div class="featured-images">
                                    <img src="images/portfolio/case-5.png" alt="images">
                                    <div class="project-title">
                                        <h3><a href="#">568.67% increase in website traffic.</a></h3>
                                        <div class="project-redmore"><a href="#">See full case study</a></div>
                                    </div>
                                    <div class="overlay">
                                    </div>
                                </div><!-- /.featured-images -->
                            </div><!-- /.portfolio-item -->

                            <div class="item builder painting hammer">
                                <div class="featured-images">
                                    <img src="images/portfolio/case-6.png" alt="images">
                                    <div class="project-title">
                                        <h3><a href="#">568.67% increase in website traffic.</a></h3>
                                        <div class="project-redmore"><a href="#">See full case study</a></div>
                                    </div>
                                    <div class="overlay">
                                    </div>
                                </div><!-- /.featured-images -->
                            </div><!-- /.portfolio-item -->
                        </div><!-- /.portfolio-wrap -->
                    </div><!-- /.flat-portfolio -->
                </div>
            </div>
        </div>
    </section>

    <!-- Promobox style1 -->
    <section class="flat-row background-theme row-promobox">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-promobox style1 color-white">
                        <div class="promobox-group-content">
                            <h3><span>Try our 1 month days free services</span></h3>
                            <p>See how we optimize your site’s performances and grow your business!</p>
                        </div>
                        <div class="promobox-group-btn">
                            <a class="flat-button medium button-color button-radius white" href="#">Read More</a>
                            <a class="flat-button medium button-color button-radius black" href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section>
@endsection
