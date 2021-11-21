@extends('frontend.layouts.master')
@section('content')
    <!-- sections for page -->
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

        <!-- filterPage -->
        <div class="container">
            <div class="row" style="margin-top: 4.5rem;" id="filter">

                <div class="sec-col-4-1 col-9">
                    <h5>{{__('website.products')}}</h5>

                    <!-- دى ال بيتحط فيها المنتجات من filter.js  -->
                    <div class="row" id="products">
                        @foreach ($category_products->products as $item)
                        <div class="sec-col-4-1-card col-xl-4 col-md-6 col-sm-10 col-xs-9 product wow slideInLeft"
                        data-wow-duration="1s" data-productname='${productName}' data-type='${type}'>
                        <div class="card sec-card">
                            <div class="sec-card-img">
                                <img src="{{ asset('upload/product/' . $item->image) }}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">{{$item->name}}</span>

                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="{{route('single.product', [$item->id])}}" class="name-product">
                                        {{__('website.details')}}
                                    </a>
                                </div>

                                <!-- price of card -->
                                <p class="card-text card-price">
                                    ريال / كيلو
                                    <span>{{$item->price}}</span>
                                </p>
                                <p class="card-text card-price">{{$item->offer_price}} ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">

                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{ asset('frontend/images/bag-card.svg') }}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>
                            </div>
                            <span class="discard-card-swiper">خصم {{$item->discount}}</span>
                        </div>
                    </div>
                        @endforeach
                    </div>
                </div>

                <!-- الاقسام -->
                <div class="col-3 divide wow bounceInRight" data-wow-duration="2s">
                    <div>
                        <h5>الاقسام</h5>
                        <!-- الاقسام الرئيسيه -->
                        <ul>
                            <li data-filter="productname" id="meat" class="filter depart">
                                لحوم
                            </li>
                            <li data-filter="productname" id="zb2h" class="filter depart">
                                ذبائح
                            </li>
                            <li data-filter="productname" id="tools" class="filter depart">
                                ادوات
                            </li>
                            <li data-filter="productname" id="spices" class="filter depart">
                                توابل
                            </li>
                        </ul>
                    </div>

                    <!-- الاقسام الفرعيه ايضا معموله ب filter.js
                لو هيتم مسح js يتم مسح التلات فروع الاخري -->
                    <form class="types-prod">
                        <h5>اقسام داخليه</h5>
                        <!-- لحوم -->
                        <div class="types-prod-num active">
                            <div class="label-check">
                                استيك
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                            <div class="label-check">
                                برجر
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                            <div class="label-check">
                                مشوى
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                            <div class="label-check">
                                على الفحم
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                        </div>

                        <!-- ذبائح -->
                        <div class="types-prod-num">
                            <div>
                                لحم بقري
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                            <div>
                                لحم خروف
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                            <div>
                                لحم جملى
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                        </div>

                        <!-- ادوات -->
                        <div class="types-prod-num">
                            <div>
                                سكين
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                            <div>
                                مقص
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                            <div>
                                ادوات اخري
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                        </div>

                        <!-- توابل -->
                        <div class="types-prod-num">
                            <div>
                                ملح
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                            <div>
                                فلفل
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                            <div>
                                شطه
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                            <div>
                                كمون
                                <input class="mycheck filter1" data-filter="type" type="checkbox">
                            </div>
                        </div>

                    </form>

                    <!-- دى للتسجيل -->
                    <div class="row-2-4 w-100 d-none d-sm-none d-md-none d-lg-flex" data-wow-duration="2s"
                        style="height: 602px;  margin-bottom: 2.5rem;">
                        <img src="{{ asset('frontend/images/bkground.png') }}" class="w-100">
                        <div class="row-text">
                            <h3>اكتشف صفقات موقع لذيذ واطياب الجديده والمذهله</h3>
                            <p>الغذائ العضوى الاكثر صحه هو امت للصحه</p>
                            <a href="signUp.html"> <button>سجل الان</button> </a>
                        </div>
                    </div>

                    <div class="w-100">
                        <img class="w-100" src="{{ asset('frontend/images/Re-password.svg') }}">
                    </div>

                </div>


            </div>
        </div>
    </section>
@endsection
