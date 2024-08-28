@extends('layouts.app')
@section('content')


<div class="site-main">




    <section class="ttm-row grid-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h2 class="title"><b>Events</b></h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
            <div class="row">
                @forelse ($events as $event)
                    <div class="col-lg-4 mb-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ $event['image_url'] ? $event['image_url'] : asset('images/blog.svg') }}" alt="{{ $event['title'] }}" height="100%" width="100%">
                            </div>
                            <div class="featured-content">
                                <!-- ttm-box-post-date -->
                                <div class="ttm-box-post-date">
                                    <i class="fa fa-calendar"></i>
                                    <time class="entry-date published" datetime="{{ $event['created_timestamp'] }}">{{ \Carbon\Carbon::parse($event['created_timestamp'])->format('F d, Y') }}</time>
                                </div><!-- ttm-box-post-date end -->
                                <div class="post-meta">
                                    <span class="ttm-meta-line tag"><i class="fa fa-map-marker"></i>{{ $event['location'] }}</span>
                                </div><!-- post-meta end -->
                                <div class="featured-title">
                                    <h3><a href="{{ route('events.show', $event['event_id']) }}" target="_blank">{{ $event['title'] }}</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>{{ $event['description'] }}</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                @empty
                    <p>No circulars found.</p>
                @endforelse
            </div>
        </div>
    </section>



</div>




@endsection
