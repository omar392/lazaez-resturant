@extends('frontend.layouts.master')
@section('content')
    <!-- sign Up -->
    <section class="main-page">
        <div class="row row-100vw">
            <!-- sign up -->
            <section class="sec-form sec-form-sign-up">
                <div class="container">
                    <div class="sec-title-from">
                        <h3>تسجيل جديد</h3>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-100vw form-sign form-sign-Up">
                        <form action="{{route('user.signup')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <!-- الاسم -->
                                <div>
                                    <input type="text" placeholder="الاسم" name="name" required />
                                    <div></div>
                                </div>
                                <!-- رقم الهاتف -->
                                <div>
                                    <input type="tel" class="number" placeholder="رقم الهاتف" name="phone"
                                        required />
                                    <div></div>
                                </div>
                                <!-- البريد الالكترونى -->
                                <div>
                                    <input type="text" placeholder="البريد الالكترونى" name="email" required />
                                    <div></div>
                                </div>
                                <!-- الباسورد -->
                                <div>
                                    <div class="show-hide-password">
                                        <input class="password" type="password" placeholder="كلمه المرور"
                                            name="password" required />
                                        <i class="far fa-eye-slash show-hide-icon"></i>
                                    </div>
                                    <div></div>
                                </div>
                                <!-- اعاده الباسورد -->
                                <div>
                                    <div class="show-hide-password">
                                        <input class="password" type="password" placeholder="تأكيد كلمة المرور"
                                            name="password_confirmation" required />
                                        <i class="far fa-eye-slash show-hide-icon"></i>
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="submit">
                                    تسجيل الحساب
                                </button>
                            </div>
                            <div class="question">
                                <span>
                                    لديك حساب؟
                                    <a href="{{route('user.login')}}">تسجيل دخول </a>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
