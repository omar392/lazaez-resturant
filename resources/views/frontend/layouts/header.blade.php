    <!-- first --- header  -->
    <!-- sass/components/_firstheader-->
    <div class="row row-100vw first-tab">
        <div class="container first-header">

            <ul class="first-header-left-items">

                {{-- <li class="first-header-left-item">
                    <img src="{{ asset('frontend/images/english.svg') }}" />
                    <a href="#" action="" method="" id="language" data-language='english'>English</a>
                </li> --}}
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                @if($localeCode == LaravelLocalization::getCurrentLocale())
                @elseif($url = LaravelLocalization::getLocalizedURL($localeCode))
                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                        class="nav-link">
                        @if (app()->getLocale() == 'ar')
                        <img src="{{asset('frontend/images/english.svg')}}"  style="width: 40px;height: 20px;">
                        English
                        @else
                        <img src="{{ asset('frontend/images/ksa.png') }}" style="width: 40px;height: 20px;">
                        العربية
                        @endif
                    </a>
                @endif
                @endforeach
                {{-- <li class="first-header-left-item">
                    <a href="pages/errorPage1.html">مساعده</a>
                    <img src="{{ asset('frontend/images/help-circle.svg') }}">
                </li> --}}

            </ul>

            <h2 class="d-none d-sm-none d-md-inline-block">
                {{__('website.welcome')}}
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
                @auth
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
                </ul>
                    @else
                    <ul class="second-header-left login-sec-cart-second">
                    <li>
                        <a href="{{route('user.login')}}">
                            <span class="login">تسجيل دخول</span>
                            <img src="{{ asset('frontend/images/login.svg') }}"></i>
                        </a>
                    </li>
                </ul>

                @endauth
                <!-- لمعرفه جميع الاقسام والبراند -->
                <ul class="second-header-right">
                    <li>
                        <!-- كود البحث -->
                        <form class="card-body" action="/search" method="GET" role="search">
                            {{ csrf_field() }}
                        <div class="search">
                            <img src="{{ asset('frontend/images/search-line (3).svg') }}">
                            <input data-filter="type" class="input-search search-placeholder" type="search"
                                placeholder="ابحث عن المنتج">
                            <span class="space"></span>
                        </div>
                        </form>
                        <!-- كود اختيار المنتجات -->
                        <div class="select">
                            <select class="search select-qesm filter-select" data-filter="productname">
                                <option value="">
                                   {{__('website.categories')}}
                                </option>
                                @foreach ($categories as $item)
                                <option value="{{$item->name}}">
                                    {{$item->name}}
                                </option>
                                @endforeach

                            </select>
                        </div>

                    </li>

                    <li>
                        <a href="{{route('website')}}" class="brand">
                            <img src="{{ asset('frontend/images/brand.svg') }}" />
                        </a>
                    </li>
                </ul>
            </div>

            <nav class="container nav">
                <ul>
                    <li class="nav-item">
                        <a href="{{route('contact')}}" class="{{ URL::route('contact') === URL::current() ? 'active' : '' }}">{{__('website.contact')}}</a>
                    </li>

                    <li class="nav-item">

                        <div class="menu-information-toggle">
                            <i class="fas fa-caret-down"></i>
                            <a style="pointer-events: none;">{{__('website.pages')}}</a>
                        </div>

                        <ul class="menu-information">
                            <li>
                                <a href="{{route('terms.index')}}">{{__('website.terms')}}</a>
                            </li>
                            <li>
                                <a href="{{route('privcy.index')}}">{{__('website.privcy')}}</a>
                            </li>
                            <li>
                                <a href="{{route('faqs.index')}}">{{__('website.faqs')}}</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="{{route('about.us')}}" class="{{ URL::route('about.us') === URL::current() ? 'active' : '' }}">{{__('website.about')}}</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('offers.index')}}" class="{{ URL::route('offers.index') === URL::current() ? 'active' : '' }}">{{__('website.offers')}}</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('website')}}" class="{{ URL::route('website') === URL::current() ? 'active' : '' }}">{{__('website.home')}}</a>
                    </li>

                    <li class="nav-item">
                        <div class="menu-information-toggle">
                            <i class="fas fa-chevron-down"></i>
                            <a> {{__('website.categories')}} </a>
                        </div>

                        <ul class="menu-information">
                         @foreach ($categories as $item)
                         <li>
                            <a href="pages/filterPage.html#meat">{{$item->name}}</a>
                        </li>
                         @endforeach
                        </ul>

                    </li>

                    <li class="nav-item mob-toggle-link">
                        <a href="{{route('user.login')}}">
                            تسجيل الدخول
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- end ------- second header code  -->
