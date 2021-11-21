@extends('frontend.layouts.master')
@section('content')
    <!-- page sections -->
    <section class="main-page">

        <!-- slider  -->
        <!-- sass/components/_slider -->
        <div class="row row-100vw p-0 parent-slider">
            <div class="swiper4 row row-100vw p-0 h-100 w-100" style="position: relative;">
                <div class="swiper-wrapper parent-slider-slides">
                    @foreach ($banner as $item)
                        <div class="swiper-slide slider">
                            <img src="{{ asset('upload/banners/' . $item->image) }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-flex slider-text">

                                {{-- <span>لحوم عضويه طازجه %100</span> --}}
                                <h5>{{ $item->name }}</h5>
                                <p>{!! $item->description !!}</p>
                                <a href="{{ route('offers.index') }}"><button>{{ __('website.shop') }}</button></a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper4-pagination parent-slider-indicators"></div>
            </div>
        </div>
        <!-- end ------- slider -->


        <!--- sec1  -->
        <!-- sass/components/_stylesMainPage -->
        <section class="container sec-imp-dep wow bounceInDown" data-wow-duration="2.5s">
            <div class="container sec-title">
                <h3>
                    {{ __('website.browse') }}
                </h3>
            </div>

            <div class="parent-col-1-4">

                @foreach ($categories as $item)
                    <div class="col-1-4 sec1-card fourth-card">
                        <img src="{{ asset('upload/category/' . $item->image) }}">
                        <div class="col-1-4-card">
                            <span>{{ $item->name }}</span>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
        <!-- end ------ sec1 -->


        <!-- swiper for high price section -->
        <!-- sass/components/_stylesMainPage -->
        <section class="container sec-high-price wow bounceInUp" data-wow-duration="2s">

            <!-- tiltle -->
            <div class="sec-title">
                <!-- arrows for slider -->
                <div class="arrows">
                    <i class="fas fa-chevron-left arrow swiper-arrow-left"></i>
                    <i class="fas fa-chevron-right arrow swiper-arrow-right"></i>
                </div>
                <h3>
                    {{ __('website.high') }}
                </h3>
            </div>
            <div class="sec-swiper swiper">




                <div class="swiper-wrapper">

                    @foreach ($products as $item)
                        <!-- fourth card -->
                        <div class="swiper-slide">
                            <div class="card sec-card product-sec" id="90">
                                <div class="sec-card-img">
                                    <img src="{{ asset('upload/product/' . $item->image) }}" class="card-img-top"
                                        alt="...">
                                </div>

                                <!-- card-body consists of titles -->
                                <div class="card-body sec-card-body">
                                    @if (app()->getLocale() == 'ar')
                                        {{ \App\Models\Category::where('id', $item->cat_id)->value('name_ar') }}
                                    @endif
                                    @if (app()->getLocale() == 'en')
                                        {{ \App\Models\Category::where('id', $item->cat_id)->value('name_en') }}
                                    @endif
                                    <!-- //غنوان الكارد -->
                                    <div class="card-title sec-card-body-title">
                                        <div class="stars-card">
                                            <span>4.5</span>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <a href="pages/productPage.html" class="name-product">
                                            {{ $item->name }}
                                        </a>
                                    </div>

                                    <!-- price of card -->
                                    <p class="card-text card-price">
                                        ريال / كيلو
                                        <span>{{ $item->price }}</span>
                                    </p>
                                    <p class="card-text card-price">{{ $item->offer_price }}</p>

                                </div>
                                <!-- end body card -->
                                <!-- footer of card -->
                                <div class="sec-card-footer">

                                    <a href="" href="" class="card-bag">
                                        <img src="{{ asset('frontend/images/bag-card.svg') }}"></i>
                                    </a>

                                    <div class="card-increment-decrement">
                                        <span class="increment">+</span>
                                        <span class="number">0</span>
                                        <span class="decrement">-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </section>


        <!-- swiper for offers section -->
        <!-- sass/components/_stylesMainPage -->
        <section class="container sec-offers wow bounceInDown" data-wow-duration="2s">
            <!-- tiltle -->
            <div class="sec-title">
                <!-- arrows for slider -->
                <div class="arrows">
                    <i class="fas fa-chevron-left arrow swiper-arrow-left1"></i>
                    <i class="fas fa-chevron-right arrow swiper-arrow-right1"></i>
                </div>
                <h3>
                    {{ __('website.offers') }}
                </h3>
            </div>
            <div class="sec-swiper swiper1">
                <div class="swiper-wrapper">

                    @foreach ($offers as $item)
                        <div class="swiper-slide">
                            <div class="card sec-card" id="product-5">
                                <div class="sec-card-img">
                                    <img src="{{ asset('upload/offer/' . $item->image) }}" class="card-img-top"
                                        alt="...">
                                </div>
                                <!-- card-body consists of titles -->
                                <div class="card-body sec-card-body">
                                    <span class="sec-card-body-top">{{ $item->name }}</span>
                                    <!-- //غنوان الكارد -->
                                    <div class="card-title sec-card-body-title">
                                        <div class="stars-card">
                                            <span>4.5</span>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <a href="pages/productPage.html" class="name-product">
                                            {{ $item->name }}
                                        </a>
                                    </div>
                                    <!-- price of card -->
                                    <p class="card-text card-price">
                                        ريال / كيلو
                                        <span>{{ $item->end_price }}</span>
                                    </p>
                                    <p class="card-text card-price">{{ $item->main_price }} ريال / كيلو</p>
                                </div>
                                <!-- end body card -->
                                <!-- footer of card -->
                                <div class="sec-card-footer">
                                    <a href="" class="card-bag">
                                        <img src="{{ asset('frontend/images/bag-card.svg') }}"></i>
                                    </a>
                                    <div class="card-increment-decrement">
                                        <span class="increment">+</span>
                                        <span class="number">0</span>
                                        <span class="decrement">-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </section>


        <!-- section for sign and mob -->
        <!-- sass/components/_stylesMainPage -->
        <section class="container sec-col-1-2">
            <div class="row row-100vw justify-content-start col-1-2">

                <div class="sec-col-1-2-text col-xl-4 col-lg-4 col-md-5 m-r-xs-0 row-1-2  col-xs-9 wow bounceInLeft"
                    data-wow-duration="2s">
                    <h3 class="row-1-2-title">تسوق اسرع مع تطبيق لذائذ واطياب</h3>
                    <p>متاح التطبيق الان للاندؤويد والايفون</p>
                    <div class="button-card">
                        <a href="{{$setting->android_url}}">
                            <img src="{{ asset('frontend/images/google-play.svg') }}" />
                            <span>Google play</span>
                        </a>
                        <a href="{{$setting->apple_url}}">
                            <img src="{{ asset('frontend/images/app-store (1).svg') }}" />
                            <span>Apple store</span>
                        </a>
                    </div>
                    <div class="img">
                        <img src="{{ asset('frontend/images/android-screen.png') }}" alt="">
                        <img src="{{ asset('frontend/images/apple-screen.png') }}" alt="">
                    </div>

                </div>

                <div class="col-xl-7 col-lg-7 row-2-4 col-md-6  col-xs-9 wow bounceInRight" data-wow-duration="2s">
                    <img src="{{ asset('frontend/images/bkground.png') }}">
                    <div class="row-text">
                        <h3>اكتشف صفقات موقع لذيذ واطياب الجديده والمذهله</h3>
                        <p>الغذائ العضوى الاكثر صحه هو امت للصحه</p>
                        <a href="pages/signUp.html"> <button>سجل الان</button> </a>
                    </div>
                </div>

            </div>
        </section>
        <!-- end section -->


        <!-- swiper for you can watch section -->
        <!-- sass/components/_stylesMainPage -->
        <section class="container sec-Also-watch wow bounceInUp" data-wow-duration="2s">

            <!-- tiltle -->
            <div class="sec-title">
                <!-- arrows for slider -->
                <div class="arrows">
                    <i class="fas fa-chevron-left arrow swiper-arrow-left2"></i>
                    <i class="fas fa-chevron-right arrow swiper-arrow-right2"></i>
                </div>
                <h3>
                    {{ __('website.also') }}
                </h3>
            </div>

            <div class="sec-swiper swiper2">

                <div class="swiper-wrapper">

                    @foreach ($all_products as $item)
                        <!-- fourth card -->
                        <div class="swiper-slide">
                            <div class="card sec-card" id="product-9">
                                <div class="sec-card-img">
                                    <img src="{{ asset('upload/product/' . $item->image) }}" class="card-img-top"
                                        alt="...">
                                </div>

                                <!-- card-body consists of titles -->
                                <div class="card-body sec-card-body">
                                    @if (app()->getLocale() == 'ar')
                                        {{ \App\Models\Category::where('id', $item->cat_id)->value('name_ar') }}
                                    @endif
                                    @if (app()->getLocale() == 'en')
                                        {{ \App\Models\Category::where('id', $item->cat_id)->value('name_en') }}
                                    @endif

                                    <!-- //غنوان الكارد -->
                                    <div class="card-title sec-card-body-title">
                                        <div class="stars-card">
                                            <span>4.5</span>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <a href="pages/productPage.html" class="name-product">
                                            {{ $item->name }}
                                        </a>
                                    </div>

                                    <!-- price of card -->
                                    <p class="card-text card-price">
                                        ريال / كيلو
                                        <span>{{ $item->offer_price }}</span>
                                    </p>
                                    <p class="card-text card-price">{{ $item->price }} ريال / كيلو</p>

                                </div>
                                <!-- end body card -->

                                <!-- footer of card -->
                                <div class="sec-card-footer">
                                    <a href="" class="card-bag">
                                        <img src="{{ asset('frontend/images/bag-card.svg') }}"></i>
                                    </a>
                                    <div class="card-increment-decrement">
                                        <span class="increment">+</span>
                                        <span class="number">0</span>
                                        <span class="decrement">-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
@endsection
