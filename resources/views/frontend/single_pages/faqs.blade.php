@extends('frontend.layouts.master')
@section('content')
@section('pageTitle',__('website.faqs-'))

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


        <!-- question section -->
        <div class="container">
            <div class="row Pragraph-page question">
                <h3>{{__('website.faqs')}}</h3>

                @foreach ($faqs as $item)
                                    <!-- هنااول سؤال باجابته -->
                <div class="ques-ans">
                    <!-- السؤال -->
                    <div class="questions">
                        <!-- هنا يكتب السؤال -->
                        <p class="questions-1">{{$item->question}}</p>
                        <span>
                            <i class="fas fa-chevron-down" style="color: var(--primary-color);"></i>
                        </span>
                    </div>
                    <!-- اجابه السؤال -->
                    <div class="answer">
                        <div class="answer-qus">
                            <!-- هنا يكتب نفس السؤال -->
                            <p>{{$item->question}}</p>
                            <span>
                                <i class="fas fa-chevron-up"></i>
                            </span>
                        </div>
                        <!-- هنا تكتب الاجابه -->
                        <p class="ans-pragrah">{!! $item->answer !!}</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
