<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <link rel="shortcut icon" href="{{ asset('frontend/images/لوجو لذائذ.png') }}" />
    <link rel="icon" href="{{ asset('frontend/images/لوجو لذائذ.png') }}" />
    <title>لذائذ واطياب</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="//unpkg.com/swiper/swiper-bundle.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
        href="https://blogfonts.com/css/aWQ9MTE2NDIyJnN1Yj00MjImYz1iJnR0Zj1CYWhpal9UaGVTYW5zQXJhYmljLVBsYWluLnR0ZiZuPWJhaGlqLXRoZXNhbnNhcmFiaWMtcGxhaW4/Bahij TheSansArabic Plain.ttf"
        rel="stylesheet" type="text/css" />
    <link
        href="https://blogfonts.com/css/aWQ9NjQxOTEmc3ViPTE5MSZjPWImdHRmPUJhaGlqK1RoZVNhbnNBcmFiaWMtU2VtaUJvbGQudHRmJm49YmFoaWotdGhlc2Fuc2FyYWJpYy1zZW1pYm9sZA/Bahij TheSansArabic SemiBold.ttf"
        rel="stylesheet" type="text/css" />
    <link
        href="https://blogfonts.com/css/aWQ9MTE2NDIwJnN1Yj00MjAmYz1iJnR0Zj1CYWhpal9UaGVTYW5zQXJhYmljLUV4dHJhTGlnaHQudHRmJm49YmFoaWotdGhlc2Fuc2FyYWJpYw/Bahij TheSansArabic.ttf"
        rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    {{-- <link rel="stylesheet" href="{{asset('frontend/css/mainTrans.css')}}"> --}}
</head>

<body>

    <!-- loader -->
    <!-- sass/components/_loader-->
    <div class="loader">
        <div class="lds-default">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end loader -->

    <!-- up -->
    <!-- sass/components/_up-->
    <div class="up">
        <a href="#up">
            <i class="fas fa-hand-point-up"></i>
        </a>
    </div>
    <!-- end---Up -->

    <!-- first --- header  -->
    <!-- sass/components/_firstheader-->
    <div class="row row-100vw first-tab">
        <div class="container first-header">

            <ul class="first-header-left-items">

                <li class="first-header-left-item">
                    <img src="{{ asset('frontend/images/english.svg') }}" />
                    <a href="#" action="" method="" id="language" data-language='english'>اللغه الانجليزيه</a>
                </li>

                <li class="first-header-left-item">
                    <a href="pages/errorPage1.html">مساعده</a>
                    <img src="{{ asset('frontend/images/help-circle.svg') }}">
                </li>

            </ul>

            <h2 class="d-none d-sm-none d-md-inline-block">
                مرحبا بك ف موقع لذائذ واطباب لاجود انواع الذبائح واللحوم والادوات بأفضل الاسعار
            </h2>

        </div>
    </div>
    <!-- end ---- first header  -->


    <!-- second tab -->
    <!-- sass/components/_secondHeader -->
    <div class="row row-100vw">
        <div class="container second-tab wow slideInRight" data-wow-duration="2.5s">
            <div class="second-header">
                <!-- mob toggle -->
                <div class="mob">
                    <span></span>
                </div>

                <!-- للتسجيل الدخول وايضا للاشياء تم شرائه -->
                <ul class="second-header-left login-sec-cart-second">
                    <li class="d-none d-md-none d-lg-flex">
                        <a href="">
                            <div class="cart">
                                <img class="cart-img" src="{{ asset('frontend/images/Bag-header.svg') }}">
                                <span class="cart-quantity">0</span>
                            </div>
                        </a>
                        <span class="price-cart"> $0.00 </span>
                    </li>


                    <li>
                        <a href="pages/signIn.html">
                            <span class="login">تسجيل دخول</span>
                            <img src="{{ asset('frontend/images/login.svg') }}"></i>
                        </a>
                    </li>
                </ul>


                <!-- لمعرفه جميع الاقسام والبراند -->
                <ul class="second-header-right">
                    <li>
                        <!-- كود البحث -->
                        <div class="search">
                            <img src="{{ asset('frontend/images/search-line (3).svg') }}">
                            <input data-filter="type" class="input-search search-placeholder" type="search"
                                placeholder="ابحث عن المنتج">
                            <span class="space"></span>
                        </div>
                        <!-- كود اختيار المنتجات -->
                        <div class="select">
                            <select class="search select-qesm filter-select" data-filter="productname">
                                <option value="">
                                    كل الاقسام
                                </option>
                                <option value="لحوم">
                                    لحوم
                                </option>
                                <option value="ذبائح">
                                    ذبائح
                                </option>
                                <option value="ادوات">
                                    ادوات
                                </option>
                                <option value="توابل">
                                    توابل
                                </option>
                            </select>
                        </div>

                    </li>

                    <li>
                        <a href="index.html" class="brand">
                            <img src="{{ asset('frontend/images/brand.svg') }}" />
                        </a>
                    </li>
                </ul>
            </div>

            <nav class="container nav">
                <ul>
                    <li class="nav-item">
                        <a href="pages/joinUs.html">تواصل معنا</a>
                    </li>

                    <li class="nav-item">

                        <div class="menu-information-toggle">
                            <i class="fas fa-caret-down"></i>
                            <a style="pointer-events: none;">معلومات عنا</a>
                        </div>

                        <ul class="menu-information">
                            <li>
                                <a href="pages/ConditionPage.html">السياسه والاحكام</a>
                            </li>
                            <li>
                                <a href="pages/privacyPolicy.html">سياسه الخصوصيه</a>
                            </li>
                            <li>
                                <a href="pages/question.html">الاسئله الشائعه</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="pages/whoUs.html">من نحن</a>
                    </li>

                    <li class="nav-item">
                        <a href="pages/offers.html">العروض</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.html" class="active">الصفحه الرئيسيه</a>
                    </li>

                    <li class="nav-item">
                        <div class="menu-information-toggle">
                            <i class="fas fa-chevron-down"></i>
                            <a> كل الاقسام</a>
                        </div>

                        <ul class="menu-information">
                            <li>
                                <a href="pages/filterPage.html#meat">لحوم</a>
                            </li>
                            <li>
                                <a href="pages/filterPage.html#zb2h">ذبائح</a>
                            </li>
                            <li>
                                <a href="pages/filterPage.html#tools">ادوات</a>
                            </li>
                            <li>
                                <a href="pages/filterPage.html#spices">توابل</a>
                            </li>
                        </ul>

                    </li>

                    <li class="nav-item mob-toggle-link">
                        <a href="pages/signIn.html">
                            تسجيل الدخول
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- end ------- second header code  -->

    <!-- page sections -->
    <section class="main-page">

        <!-- slider  -->
        <!-- sass/components/_slider -->
        <div id="carouselExampleCaptions" class="carousel slide parent-slider wow slideInRight" data-wow-duration="2.5s"
            data-bs-ride="carousel">

            <div class="carousel-indicators parent-slider-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                    class="indicator active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>


            <div class="carousel-inner parent-slider-slides">

                <!-- ------ first slider ------ -->
                <div class="carousel-item active slider">
                    <img src="{{ asset('frontend/images/front-image.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-flex slider-text">

                        <span>لحوم عضويه طازجه %100</span>
                        <h5>اكتشف صققات موقع لذائذ واطياب الجديده والمذهله</h5>
                        <p>الغذاء الصحى الاكثر صحه هو امن صحه</p>
                        <button> تسوق الان</button>

                    </div>
                </div>

                <!-- ------ second slider ------ -->
                <div class="carousel-item slider">
                    <img src="{{ asset('frontend/images/front-image.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-flex slider-text">

                        <span>لحوم عضويه طازجه %100</span>
                        <h5>اكتشف صققات موقع لذائذ واطياب الجديده والمذهله</h5>
                        <p>الغذاء الصحى الاكثر صحه هو امن صحه</p>
                        <button>تسوق الان</button>

                    </div>
                </div>

                <!-- ------ third slider ------ -->
                <div class="carousel-item slider">
                    <img src="{{ asset('frontend/images/front-image.png') }}" class="d-block w-100" alt="...">
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


        <!--- sec1  -->
        <!-- sass/components/_stylesMainPage -->
        <section class="container sec-imp-dep wow bounceInDown" data-wow-duration="2.5s">
            <div class="container sec-title">
                <h3>
                    تصفح اهم اقسامنا
                </h3>
            </div>

            <div class="parent-col-1-4">

                <div class="col-1-4 sec1-card fourth-card">
                    <img src="{{ asset('frontend/images/Spices.svg') }}">
                    <div class="col-1-4-card">
                        <span>توابل</span>
                    </div>
                </div>

                <div class="col-1-4 sec1-card third-card">
                    <img src="{{ asset('frontend/images/knives (1).svg') }}">
                    <div class="col-1-4-card">
                        <span>ادوات</span>
                    </div>
                </div>

                <div class="col-1-4 sec1-card second-card">
                    <img src="{{ asset('frontend/images/camal.svg') }}">
                    <div class="col-1-4-card">
                        <span>ذبائح</span>
                    </div>
                </div>

                <div class="col-1-4 sec1-card first-card">
                    <img src="{{ asset('frontend/images/meat.svg') }}">
                    <div class="col-1-4-card">
                        <span>لحوم</span>
                    </div>
                </div>

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
                    الاعلى سعرا
                </h3>
            </div>
            <div class="sec-swiper swiper">




                <div class="swiper-wrapper">

                    <!-- fourth card -->
                    <div class="swiper-slide">
                        <div class="card sec-card product-sec" id="90">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider1.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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


                    <!-- third card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="5770">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider2.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                    <!-- second card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-3">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider3.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                    <!-- first card -->
                    <div class="swiper-slide">


                        <div class="card sec-card" id="product-4">

                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider4.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                    <!-- fourth card -->
                    <div class="swiper-slide">
                        <div class="card sec-card product-sec" id="90">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider1.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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


                    <!-- third card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="5770">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider2.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                    <!-- second card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-3">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider3.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                    <!-- first card -->
                    <div class="swiper-slide">


                        <div class="card sec-card" id="product-4">

                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider4.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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
                    العروض
                </h3>
            </div>
            <div class="sec-swiper swiper1">




                <div class="swiper-wrapper">

                    <!-- fourth card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-5">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider1.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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


                    <!-- third card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-6">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider2.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                    <!-- second card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-7">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider3.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                    <!-- first card -->
                    <div class="swiper-slide">


                        <div class="card sec-card" id="product-8">

                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider4.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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


                    <!-- fourth card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-5">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider1.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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


                    <!-- third card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-6">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider2.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                    <!-- second card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-7">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider3.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                    <!-- first card -->
                    <div class="swiper-slide">


                        <div class="card sec-card" id="product-8">

                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider4.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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
                        <a href="https://play.app.goo.gl/?link=https://play.google.com/store/apps/details?id=com.myapp">
                            <img src="{{ asset('frontend/images/google-play.svg') }}" />
                            <span>Google play</span>
                        </a>
                        <a href="https://play.app.goo.gl/?link=https://play.google.com/store/apps/details?id=com.myapp">
                            <img src="{{ asset('frontend/images/app-store (1).svg') }}" />
                            <span>play store</span>
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
                    يمكنك مشاهده ايضا
                </h3>
            </div>

            <div class="sec-swiper swiper2">




                <div class="swiper-wrapper">

                    <!-- fourth card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-9">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider1.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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


                    <!-- third card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-10">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider2.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                    <!-- second card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-11">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider3.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                    <!-- first card -->
                    <div class="swiper-slide">


                        <div class="card sec-card" id="product-12">

                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider4.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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



                    <!-- fourth card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-9">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider1.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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


                    <!-- third card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-10">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider2.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                    <!-- second card -->
                    <div class="swiper-slide">
                        <div class="card sec-card" id="product-11">
                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider3.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                    <!-- first card -->
                    <div class="swiper-slide">


                        <div class="card sec-card" id="product-12">

                            <div class="sec-card-img">
                                <img src="{{ asset('frontend/images/slider4.png') }}" class="card-img-top"
                                    alt="...">
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
                                    <a href="pages/productPage.html" class="name-product">
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

                </div>

            </div>
        </section>

    </section>

    <!-- section search -->
    <section class="container sec-col-4-1 search-sec-main">
        <div class="row">
            <div class="filter-search parent-sec-col-4-1"
                style="display:flex;flex-wrap: wrap;justify-content:space-around;align-content: center;">

            </div>
        </div>
    </section>

    <!-- ادخال الايميل -->
    <section class="row row-100vw row-1-4 wow slideInRight" data-wow-duration="2s">
        <img src="{{ asset('frontend/images/before-footer.png') }}" />
        <div class="row-form">
            <input class="enter-email" placeholder="Enter your email address" type="email">
            <a href="pages/signUp.html"><button class="enterbtn">Sign Up</button></a>
        </div>
    </section>

    <!-- footer -->
    <section class="footer wow slideInLeft" data-wow-duration="2s">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 footer-1 col-md-4 col-xs-6">
                    <h5>حسابي</h5>
                    <ul>
                        <li> <a href="" class="footer-inf"> حسابي </a></li>
                        <li> <a href="" class="footer-inf"> طلباتى </a></li>
                        <li> <a href="" class="footer-inf">السله</a></li>
                        <li><a href="pages/joinUs.html" class="footer-inf">تواصل معنا</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-7 col-xs-6">
                    <h5>معلومات</h5>
                    <ul>
                        <li>
                            <a href="pages/whoUs.html" class="footer-inf">من نحن</a>
                        </li>
                        <li>
                            <a href="pages/privacyPolicy.html" class="footer-inf">الخصوصيه</a>
                        </li>
                        <li>
                            <a href="pages/ConditionPage.html" class="footer-inf">شروط الاستخدام</a>
                        </li>
                        <li>
                            <a href="pages/question.html" class="footer-inf">الاسئله الشائعه</a>
                        </li>
                    </ul>
                </div>



                <div class="col-lg-2 fast-arrive-sec offset-lg-1 col-md-4 col-xs-3">
                    <h5 class="fast-arrive-h5"> الوصول السريع </h5>
                    <div class="fast-arrive" style="display: flex; justify-content: flex-end;">
                        <ul style="margin-right: 6rem;">
                            <li>
                                <a href="pages/filterPage.html#meat" class="footer-inf">لحوم</a>
                            </li>
                            <li><a href="pages/filterPage.html#zab2h" class="footer-inf">ذبائح</a></li>
                            <li><a href="pages/filterPage.html#tools" class="footer-inf">ادوات</a></li>
                            <li><a href="pages/filterPage.html#spices" class="footer-inf">توابل</a></li>
                        </ul>
                        <ul>
                            <li>
                                <a href="pages/filterPage.html#meat" class="footer-inf">لحوم</a>
                            </li>
                            <li><a href="pages/filterPage.html#zab2h" class="footer-inf">ذبائح</a></li>
                            <li><a href="pages/filterPage.html#tools" class="footer-inf">ادوات</a></li>
                            <li><a href="pages/filterPage.html#spices" class="footer-inf">توابل</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-2 offset-lg-0 col-xs-6 footer-join" style="margin-top: -5px;">
                    <img src="{{ asset('frontend/images/brand.svg') }}">

                    <div class="footor-join-call">
                        <div>
                            <p>للاستفسار ؟ تواصل معنا</p>
                            <a href="tel:+800800185880600874548">(800) 8001-8588,(0600) 874 548</a>
                        </div>
                        <div>
                            <img src="{{ asset('frontend/images/headphone.svg') }}">
                        </div>
                    </div>

                    <div class="footor-join-information">
                        <h5>معلومات التواصل</h5>
                        <p> المنصوره , الدقهليه, جمهوريه مصر العربيه , مجمع المحاكم 10 بلوك شارع المحكمه </p>
                    </div>

                </div>

            </div>
        </div>

        <div class="container footer-before-footer">

            <div>
                <a href="https://play.app.goo.gl/?link=https://play.google.com/store/apps/details?id=com.myapp">
                    <img src="{{ asset('frontend/images/app-store (1).svg') }}" />
                    <span>apple store</span>
                </a>
                <a href="https://play.app.goo.gl/?link=https://play.google.com/store/apps/details?id=com.myapp">
                    <img src="{{ asset('frontend/images/google-play.svg') }}" />
                    <span>Google play</span>
                </a>
                <span class="d-none d-sm-inline-block">لتحميل التطبيق</span>
            </div>

            <div>
                <a href="" class="socail"><img src="{{ asset('frontend/images/snapchat.png') }}"></a>
                <a href="" class="socail"><img src="{{ asset('frontend/images/NoPath - Copy.png') }}"></a>
                <a href=""><img src="{{ asset('frontend/images/instagram.png') }}"></a>
            </div>

        </div>
    </section>

    <!-- all rights -->
    <div class="footer-footer">
        <div class="container">
            <div class="footer-footer-allrights">
                <div>
                    <span>لذائذ واطياب <span style="font-weight: 200;">
                            - All Rights Reserved
                        </span>
                    </span>
                </div>
                <div>
                    <span style="font-weight: 200;">Made by <img
                            src="{{ asset('frontend/images/footer-footer.svg') }}"> SoftSteps</span>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/nav.js') }}"></script>
    <script src="{{ asset('frontend/js/searchindex.js') }}"></script>
    <script src="{{ asset('frontend/js/changeEnglishIndex.js') }}"></script>
    <script src="{{ asset('frontend/js/lockNav.js') }}"></script>

    <script src="//unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>

    <script>
        new WOW().init();
        let swiperNum = document.querySelectorAll(".swiper");
        console.log(swiperNum);

        var swiper = new Swiper('.swiper', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 10,
            // init: false,

            breakpoints: {

                568: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },

                786: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                994: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1224: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            },

            navigation: {
                nextEl: '.swiper-arrow-right',
                prevEl: '.swiper-arrow-left',
            },
        });

        var swiper1 = new Swiper('.swiper1', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 10,
            // init: false,

            breakpoints: {

                568: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },

                786: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                994: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1224: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            },

            navigation: {
                nextEl: '.swiper-arrow-right1',
                prevEl: '.swiper-arrow-left1',
            },
        });

        var swiper2 = new Swiper('.swiper2', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 10,
            // init: false,

            breakpoints: {

                568: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },

                786: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                994: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1224: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            },

            navigation: {
                nextEl: '.swiper-arrow-right2',
                prevEl: '.swiper-arrow-left2',
            },
        });

        var openPage = document.querySelectorAll('.sec1-card');
        for (let i = 0; i < openPage.length; i++) {
            openPage[i].addEventListener('click', function() {
                window.location.href = 'pages/filterPage.html';
            })
        }
    </script>

</body>

</html>
