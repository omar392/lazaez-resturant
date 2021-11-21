@extends('frontend.layouts.master')
@section('content')
@section('pageTitle',__('website.privcy-'))
  <!-- section for page -->
  <!-- scss/pragraph -->
  <section class="main-page">

    <!-- slider  -->
    <!-- sass/components/_slider -->
    <div class="row row-100vw p-0 parent-slider">
      <div class="swiper4 row row-100vw p-0 h-100 w-100" style="position: relative;" >
        <div class="swiper-wrapper parent-slider-slides">
        @foreach ($banner as $item)
        <div class="swiper-slide slider">
          <img src="{{ asset('upload/banners/' . $item->image) }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-flex slider-text">

            {{-- <span>لحوم عضويه طازجه %100</span> --}}
            <h5>{{$item->name}}</h5>
            <p>{!! $item->description !!}</p>
            <a href="{{route('offers.index')}}"><button>{{__('website.shop')}}</button></a>
          </div>
        </div>
        @endforeach
        </div>
           <!-- Add Pagination -->
           <div class="swiper4-pagination parent-slider-indicators"></div>
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