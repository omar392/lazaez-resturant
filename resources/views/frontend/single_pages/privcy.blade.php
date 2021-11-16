@extends('frontend.layouts.master')
@section('content')

  <!-- section for page -->
  <!-- scss/pragraph -->
  <section class="main-page">


    <!-- slider  -->
    <!-- sass/components/_slider -->
    <div id="carouselExampleCaptions" class="carousel slide parent-slider wow slideInRight" data-wow-duration="2.5s" data-bs-ride="carousel">

      <div class="carousel-indicators parent-slider-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="indicator active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"  aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>


      <div class="carousel-inner parent-slider-slides">

        @foreach ($banner as $item)
        <div class="carousel-item active slider">
            <img src="{{ asset('upload/banners/' . $item->image) }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-flex slider-text">
                <span></span>
                <h5>{{$item->name}}</h5>
                <p>{!! $item->description !!}</p>
                <a href="{{route('offers.index')}}"><button> {{__('website.shop')}}</button></a>

            </div>
        </div>
        @endforeach

      </div>
    </div>
    <!-- end ------- slider -->

    <!-- دى بتاعت الخصوصيه -->
    <div class="container">
        <div class="row Pragraph-page">
            <h3>{{__('website.privcy')}}</h3>
            <!-- هنا يكتب سياسه الخصوصيه الخاصه بالشركه -->
            <div class="pragraph wow flipInY" data-wow-duration="1.7s">
                <p>{!! $about->polices !!}</p>
            </div>
        </div>
    </div>
  </section>

@endsection