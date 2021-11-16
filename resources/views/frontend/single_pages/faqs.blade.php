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
                        <a href="{{route('offers.index')}}"><button> {{__('website.shop')}}</button></a>
        
                    </div>
                </div>
                @endforeach

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
