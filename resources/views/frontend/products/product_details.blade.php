@extends('frontend.layouts.master')
@section('content')
    <!-- sections for page -->
    <!-- js/cart.js -->
    <section class="main-page">
        <div class="container p-0">
            <div class="row">
                <div class="breadcrumb-error d-none d-sm-none d-md-flex" style="--bs-breadcrumb-divider: '<';"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                        <li class="breadcrumb-item"><a href="filterPage.html">{{ $single_product->name }}</a></li>
                    </ol>
                </div>
            </div>
            <div class="product-page">

                <!-- دا اول سيكشن ف الصفحه -->
                <div class="row row-100vw product-page-sec1">
                    <!-- هنا صوره المنتج -->
                    <div class="product-page-sec1-1 col-lg-5 col-md-4 col-xs-12">
                        <div class="img-col-5">
                            <img src="{{ asset('upload/product/' . $single_product->image) }}" alt="">
                            <span class="discard-product">sale {{ $single_product->discount }}</span>
                        </div>
                    </div>
                    <div class="product-page-sec1-2 col-lg-7 col-md-8 col-xs-12">
                        <!-- اسم المنتج -->
                        <h4>
                            {{ $single_product->name }}
                        </h4>
                        <!-- نوعه -->
                        <p class="product-page-sec1-2-2">
                            الطليان
                            <span> : النوع</span>
                        </p>
                        <!-- تقيمه -->
                        <div class="product-page-sec1-2-3">

                            <a href="#rating">اضافه تقيم</a>
                        </div>
                        <h5 class="product-page-sec1-2-1">الوصف</h5>
                        <!-- وصفه -->
                        <p class="product-page-sec1-2-4">{!! $single_product->description !!}</p>
                        <!-- الكميه والسعر المنتج -->
                        <div class="product-page-sec1-2-5">
                            <!-- الكميه -->
                            <div class="product-page-sec1-2-5-1">
                                <span class="decrement">-</span>
                                <span class="number quantity-product">1</span>
                                <span class="increment">+</span>
                            </div>
                            <!-- السعر والسعر السابق -->
                            <div class="product-page-sec1-2-5-2">
                                <span class="price-product"> {{ $single_product->offer_price }}
                                    {{ __('website.price') }}</span>
                                {{-- <span class="price-product-perv">{{$single_product->offer_price}} LE</span> --}}
                            </div>
                        </div>
                        <!-- اسم الطرق -->
                        <div class="product-page-sec1-2-6">
                            <h6 class="toggle-way active">طرق التغليف</h6>
                            <h6 class="toggle-way">طرق التعبئه</h6>
                        </div>
                        <!-- سكشن الطرق -->
                        <div class="product-page-sec1-2-7">
                            <!-- طريقه التغليف -->
                            <form class="ways-covering active">
                                <!-- هنا تكتب الطريفه الاولى -->
                                <div>
                                    <input type="radio" name="way">
                                    <!-- هنا تكتب الطريفه الاولى -->
                                    <label>هذا النص هو مثال لنص يمكن أن يستبدل في </label>
                                </div>
                                <!-- هنا تكتب الطريفه التانيه -->
                                <div>
                                    <input type="radio" name="way">
                                    <!-- هنا تكتب الطريفه الاولى -->
                                    <label>هذا النص هو مثال لنص يمكن أن يستبدل في </label>
                                </div>
                                <!-- هنا تكتب الطريفه التالته -->
                                <div>
                                    <input type="radio" name="way">
                                    <!-- هنا تكتب الطريفه الاولى -->
                                    <label>هذا النص هو مثال لنص يمكن أن يستبدل في </label>
                                </div>
                            </form>

                            <!-- طريقه التعبئه -->
                            <form class="ways-covering">
                                <div>
                                    <input type="radio" name="way">
                                    <label>هذا النص هو مثال لنص يمكن أن يستبدل في </label>
                                </div>
                                <div>
                                    <input type="radio" name="way">
                                    <label>هذا النص هو مثال لنص يمكن أن يستبدل في </label>
                                </div>
                                <div>
                                    <input type="radio" name="way">
                                    <label>هذا النص هو مثال لنص يمكن أن يستبدل في </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="product-page-sec1-3">
                        <button class="submit btn-cart" onclick="window.location.href='cart.html'">
                            اضافه الى السله
                            <img src="{{ asset('frontend/images/cart-svg.svg') }}" alt="">
                        </button>
                    </div>

                </div>
                <!-- تانى سيكشن ف الصفحه -->
                <!-- اضافه تقيم -->
                <div class="row row-100vw product-page-sec2" id="rating">
                    <div class="col-lg-5 col-xl-4 product-page-sec2-2 col-lg-offset-2 d-none d-sm-none d-md-none d-lg-flex">

                        <div class="product-page-sec2-2-3">
                            <img src="{{ asset('frontend/images/productPage.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- تالت سيكشن ف الصفحه -->

            </div>
        </div>
    </section>
@endsection
