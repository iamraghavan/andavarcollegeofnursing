@extends('layouts.app')
@section('content')


<div class="site-main">


    <div class="ttm-row sidebar ttm-sidebar-right clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-lg-8 content-area">
                    <!-- post --><article class="post ttm-blog-single clearfix">
                         <!-- post-featured-wrapper -->
                        <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                            <div class="ttm-post-featured">
                                <img class="img-fluid" src="{{asset('images/blog.svg')}}" alt="" height="100%" width="100%">
                            </div>
                            <div class="ttm-box-post-date">
                                <span class="ttm-entry-date">
                                    <time class="entry-date" datetime="{{ $circular['created_timestamp'] }}">{{ \Carbon\Carbon::parse($circular['created_timestamp'])->format('F d') }}</time>
                                </span>
                            </div>
                        </div><!-- post-featured-wrapper end -->
                        <!-- ttm-blog-classic-content -->
                        <div class="ttm-blog-single-content">
                            <div class="ttm-post-entry-header">
                                <div class="post-meta">

                                    <span class="ttm-meta-line byline"><i class="ti ti-user"></i>{{ $circular['authorized_person'] }}</span>
                                    <span class="ttm-meta-line tags-links"><i class="fa fa-exchange"></i>{{ $circular['circular_id'] }}</span>
                                    <span class="ttm-meta-line tags-links"><i class="fa fa-calendar-check-o"></i>{{ $circular['date'] }}</span>
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="ttm-box-desc-text">

                                    <h3>{{ $circular['title'] }}</h3>

                                    <br/>
                                    <blockquote class="ttm-bgcolor-grey">
                                    <div class="qoute-text"><p>{{ $circular['description'] }}</p><p><cite class="ttm-textcolor-darkgrey">{{ $circular['authorized_person'] }}</cite></p></div>

                                </blockquote>

                                    <p></p>
                                    <div class="social-media-block">
                                        <div class="d-sm-flex justify-content-between">
                                            <div class="ttm-social-share-wrapper margin_top15">
                                                <h6 class="fs-16 m-0 padding_right10">Share : </h6>
                                                <ul class="social-icons">
                                                    <li>
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" rel="noopener" aria-label="facebook" target="_blank">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}" rel="noopener" aria-label="twitter" target="_blank">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://api.whatsapp.com/send?text={{ url()->current() }}" rel="noopener" aria-label="whatsapp" target="_blank">
                                                            <i class="fa fa-whatsapp"></i>
                                                        </a>
                                                    </li>
                                                    <!-- Add more social media platforms as needed -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ttm-blog-classic-content end -->

                    </article><!-- post end -->
                </div>

                <div class="col-lg-4 widget-area sidebar-right">
                    <aside class="widget widget-Categories with-title">
                        <h3 class="widget-title">Recent Circulars</h3>
                        <ul>
                            @foreach($latestCirculars as $circular)
                                <li><a href="{{ route('circulars.show', $circular['circular_id']) }}">{{ $circular['title'] }}</a></li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
            </div>

        </div>

    </div>



</div>




@endsection
