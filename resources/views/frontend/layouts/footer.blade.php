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
                        <li><a href="{{route('contact')}}" class="footer-inf">{{__('website.contact')}}</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-7 col-xs-6">
                    <h5>معلومات</h5>
                    <ul>
                        <li>
                            <a href="{{route('about.us')}}" class="footer-inf">{{__('website.about')}}</a>
                        </li>
                        <li>
                            <a href="pages/privacyPolicy.html" class="footer-inf">الخصوصيه</a>
                        </li>
                        <li>
                            <a href="{{route('terms.index')}}" class="footer-inf">{{__('website.terms')}}</a>
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