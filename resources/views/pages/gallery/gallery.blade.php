@extends('layouts.app')
@section('content')


<div class="site-main">


   <!--grid-section-->
<section class="ttm-row grid-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            @foreach($folders as $folder)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-imagebox-team -->
                    <div class="featured-imagebox featured-imagebox-team style1">
                        <div class="ttm-team-box-view-overlay">
                            @php
                                $image = $folder->images->random();
                            @endphp
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ $image->firebase_url }}" alt="" height="100%" width="100%">
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5><a href="{{ route('folder.show', $folder->id) }}">{{ $folder->name }}</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-team end-->
                </div>
            @endforeach
        </div>
        <!-- row end -->
    </div>
</section>
<!--grid-section end-->



</div>

@endsection
