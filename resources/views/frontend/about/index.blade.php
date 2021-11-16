@extends('frontend.layouts.master')
@section('content')
    <!-- section for page -->
    <!-- scss/pragraph -->
    <section class="main-page">

        <!-- slider  -->
        <!-- sass/components/_slider -->
        <div id="carouselExampleCaptions" class="carousel slide parent-slider wow slideInRight" data-wow-duration="2.5s"
            data-bs-ride="carousel">

            <div class="carousel-indicators parent-slider-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="indicator active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner parent-slider-slides">
                @foreach ($banner as $item)
                <div class="carousel-item active slider">
                    <img src="{{ asset('upload/banners/' . $item->image) }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-flex slider-text">
                        <span></span>
                        <h5>{{$item->name}}</h5>
                        <p>{!! $item->description !!}</p>
                        <a href="{{route('offers.index')}}"><button> تسوق الان</button></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- end ------- slider -->
        <!-- الديف دى بتاعت الصفحه ال فيها من نحن -->
        <div class="container">
            <div class="row Pragraph-page whoUs">
                <h3>{{__('website.about')}}</h3>
                <!-- هنا يتم كتابه من نحن -->
                <div class="pragraph wow flipOutY" data-wow-duration="1.5s">
                <div class="pragraph wow flipInY" data-wow-duration="1.7s">
                    <p>{!! $about->about !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
