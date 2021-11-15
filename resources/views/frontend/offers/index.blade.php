@extends('frontend.layouts.master')
@section('content')

    <!-- سكشن الصفحه -->
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

                <!-- ------ first slider ------ -->
                <div class="carousel-item active slider">
                    <img src="{{asset('frontend/images/front-image.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-flex slider-text">

                        <span>لحوم عضويه طازجه %100</span>
                        <h5>اكتشف صققات موقع لذائذ واطياب الجديده والمذهله</h5>
                        <p>الغذاء الصحى الاكثر صحه هو امن صحه</p>
                        <button> تسوق الان</button>

                    </div>
                </div>

                <!-- ------ second slider ------ -->
                <div class="carousel-item slider">
                    <img src="{{asset('frontend/images/front-image.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-flex slider-text">

                        <span>لحوم عضويه طازجه %100</span>
                        <h5>اكتشف صققات موقع لذائذ واطياب الجديده والمذهله</h5>
                        <p>الغذاء الصحى الاكثر صحه هو امن صحه</p>
                        <button>تسوق الان</button>

                    </div>
                </div>

                <!-- ------ third slider ------ -->
                <div class="carousel-item slider">
                    <img src="{{asset('frontend/images/front-image.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-flex slider-text">

                        <span>لحوم عضويه طازجه %100</span>
                        <h5>اكتشف صققات موقع لذائذ واطياب الجديده والمذهله</h5>
                        <p>الغذاء الصحى الاكثر صحه هو امن صحه</p>
                        <button>تسوق الان</button>

                    </div>
                </div>
            </div>
        </div>
        <!-- end ------- slider -->

        <!-- swiper for offers section -->
        <!-- sass/components/_stylesMainPage -->
        <section class="container sec-offers wow bounceInDown" data-wow-duration="2s">

            <!-- tiltle -->
            <div class="sec-title">
                <!-- arrows for slider -->
                <div class="arrows">
                    <i class="fas fa-chevron-left arrow swiper-arrow-left"></i>
                    <i class="fas fa-chevron-right arrow swiper-arrow-right"></i>
                </div>
                <h3>
                    العروض
                </h3>
            </div>
            <div class="sec-swiper swiper">


                <div class="swiper-wrapper page-offers">

                    <!-- fourth card -->
                    <div class="swiper-slide">
                        <div class="card sec-card">
                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider1.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">توابل</span>

                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>

                                <!-- price of card -->
                                <p class="card-text card-price">
                                    ريال / كيلو
                                    <span>150.00</span>
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">

                                <a href="errorPage2.html" class="card-bag">
                                    <img src="../images/bag-card.svg"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- third card -->
                    <div class="swiper-slide">
                        <div class="card sec-card">
                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider2.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">ادوات</span>

                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>

                                <!-- price of card -->
                                <p class="card-text card-price">
                                    ريال / كيلو
                                    <span>150.00</span>
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">

                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- second card -->
                    <div class="swiper-slide">
                        <div class="card sec-card">
                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider3.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">ذبائح</span>

                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>

                                <!-- price of card -->
                                <p class="card-text card-price">
                                    ريال / كيلو
                                    <span>150.00</span>
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">

                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- first card -->
                    <div class="swiper-slide">


                        <div class="card sec-card">

                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider4.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">لحوم</span>
                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <!-- كود النجمه والرقم -->
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <!-- كود اسم المنتج -->
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>
                                <!-- price of card -->
                                <p class="card-text card-price">
                                    <span>150.00</span>
                                    ريال / كيلو
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">
                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- fourth card -->
                    <div class="swiper-slide">
                        <div class="card sec-card">
                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider1.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">توابل</span>

                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>

                                <!-- price of card -->
                                <p class="card-text card-price">
                                    ريال / كيلو
                                    <span>150.00</span>
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">

                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- third card -->
                    <div class="swiper-slide">
                        <div class="card sec-card">
                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider2.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">ادوات</span>

                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>

                                <!-- price of card -->
                                <p class="card-text card-price">
                                    ريال / كيلو
                                    <span>150.00</span>
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">

                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- second card -->
                    <div class="swiper-slide">
                        <div class="card sec-card">
                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider3.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">ذبائح</span>

                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>

                                <!-- price of card -->
                                <p class="card-text card-price">
                                    ريال / كيلو
                                    <span>150.00</span>
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">

                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- first card -->
                    <div class="swiper-slide">


                        <div class="card sec-card">

                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider4.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">لحوم</span>
                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <!-- كود النجمه والرقم -->
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <!-- كود اسم المنتج -->
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>
                                <!-- price of card -->
                                <p class="card-text card-price">
                                    <span>150.00</span>
                                    ريال / كيلو
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">
                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>
                            </div>

                        </div>



                    </div>


                </div>

            </div>
        </section>
        <!-- end swiper -->


        <!-- for offers section  -->
        <!-- sass/components/_stylesMainPage -->
        <section class="container sec-col-4-1  wow bounceInDown" data-wow-duration="2s">
            <!-- كود السليدات ككاردز -->
            <div class="row">
                <div class="parent-sec-col-4-1">

                    <!-- code first slide with touch -->
                    <div class="sec-col-4-1-card">
                        <div class="card sec-card">
                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider1.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">توابل</span>

                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>

                                <!-- price of card -->
                                <p class="card-text card-price">
                                    ريال / كيلو
                                    <span>150.00</span>
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">

                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end code -->

                    <!-- code second slide with touch -->
                    <div class="sec-col-4-1-card">
                        <div class="card sec-card">
                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider2.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">ادوات</span>

                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>

                                <!-- price of card -->
                                <p class="card-text card-price">
                                    ريال / كيلو
                                    <span>150.00</span>
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">

                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- code third slide with touch -->
                    <div class="sec-col-4-1-card">
                        <div class="card sec-card">
                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider3.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">ذبائح</span>

                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>

                                <!-- price of card -->
                                <p class="card-text card-price">
                                    ريال / كيلو
                                    <span>150.00</span>
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">

                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- code fourth slide with touch -->
                    <div class="sec-col-4-1-card">

                        <div class="card sec-card">

                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider4.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">لحوم</span>
                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <!-- كود النجمه والرقم -->
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <!-- كود اسم المنتج -->
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>
                                <!-- price of card -->
                                <p class="card-text card-price">
                                    <span>150.00</span>
                                    ريال / كيلو
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">
                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end for offers section -->


        <!-- section for sign and mob -->
        <!-- sass/components/_stylesMainPage -->
        <section class="container sec-col-1-2">
            <div class="row justify-content-center col-1-2">

                <div class="sec-col-1-2-text col-xl-4 col-lg-4 col-md-5 m-r-xs-0 row-1-2  col-xs-9 wow bounceInLeft"
                    data-wow-duration="2s">
                    <h3 class="row-1-2-title">تسوق اسرع مع تطبيق لذائذ واطياب</h3>
                    <p>متاح التطبيق الان للاندؤويد والايفون</p>
                    <div class="button-card">
                        <a href="https://play.app.goo.gl/?link=https://play.google.com/store/apps/details?id=com.myapp">
                            <img src="{{asset('frontend/images/google-play.svg')}}" />
                            <span>Google play</span>
                        </a>
                        <a href="https://play.app.goo.gl/?link=https://play.google.com/store/apps/details?id=com.myapp">
                            <img src="{{asset('frontend/images/app-store (1).svg')}}" />
                            <span>play store</span>
                        </a>
                    </div>
                    <div class="img">
                        <img src="{{asset('frontend/images/android-screen.png')}}" alt="">
                        <img src="{{asset('frontend/images/apple-screen.png')}}" alt="">
                    </div>

                </div>

                <div class="col-xl-7 col-lg-7 row-2-4 col-md-6  col-xs-9 wow bounceInRight" data-wow-duration="2s">
                    <img src="{{asset('frontend/images/bkground.png')}}">
                    <div class="row-text">
                        <h3>اكتشف صفقات موقع لذيذ واطياب الجديده والمذهله</h3>
                        <p>الغذائ العضوى الاكثر صحه هو امت للصحه</p>
                        <a href="signUp.html"> <button>سجل الان</button> </a>
                    </div>
                </div>

            </div>
        </section>
        <!-- end section -->



        <!-- for offers section -->
        <!-- sass/components/_stylesMainPage -->
        <section class="container sec-col-4-1  wow bounceInDown" data-wow-duration="2s">
            <!-- كود السليدات ككاردز -->
            <div class="row">
                <div class="parent-sec-col-4-1 " style="margin-top: 0;">

                    <!-- code first slide with touch -->
                    <div class="sec-col-4-1-card">
                        <div class="card sec-card">
                            <div class="sec-card-img">
                                <img src="{{asset('frntend/images/slider1.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">توابل</span>

                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>

                                <!-- price of card -->
                                <p class="card-text card-price">
                                    ريال / كيلو
                                    <span>150.00</span>
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">

                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end code -->

                    <!-- code second slide with touch -->
                    <div class="sec-col-4-1-card">
                        <div class="card sec-card">
                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider2.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">ادوات</span>

                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>

                                <!-- price of card -->
                                <p class="card-text card-price">
                                    ريال / كيلو
                                    <span>150.00</span>
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">

                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- code third slide with touch -->
                    <div class="sec-col-4-1-card">
                        <div class="card sec-card">
                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider3.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">ذبائح</span>

                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>

                                <!-- price of card -->
                                <p class="card-text card-price">
                                    ريال / كيلو
                                    <span>150.00</span>
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">

                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- code fourth slide with touch -->
                    <div class="sec-col-4-1-card">

                        <div class="card sec-card">

                            <div class="sec-card-img">
                                <img src="{{asset('frontend/images/slider4.png')}}" class="card-img-top" alt="...">
                            </div>

                            <!-- card-body consists of titles -->
                            <div class="card-body sec-card-body">
                                <span class="sec-card-body-top">لحوم</span>
                                <!-- //غنوان الكارد -->
                                <div class="card-title sec-card-body-title">
                                    <!-- كود النجمه والرقم -->
                                    <div class="stars-card">
                                        <span>4.5</span>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <!-- كود اسم المنتج -->
                                    <a href="productPage.html" class="name-product">
                                        فريش بيف استربس 1 كيلو
                                    </a>
                                </div>
                                <!-- price of card -->
                                <p class="card-text card-price">
                                    <span>150.00</span>
                                    ريال / كيلو
                                </p>
                                <p class="card-text card-price">100.00 ريال / كيلو</p>

                            </div>
                            <!-- end body card -->

                            <!-- footer of card -->
                            <div class="sec-card-footer">
                                <a href="errorPage2.html" class="card-bag">
                                    <img src="{{asset('frontend/images/bag-card.svg')}}"></i>
                                </a>

                                <div class="card-increment-decrement">
                                    <span class="increment">+</span>
                                    <span class="number">0</span>
                                    <span class="decrement">-</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end for offers section -->

    </section>

@endsection
