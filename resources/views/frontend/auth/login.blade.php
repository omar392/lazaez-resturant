@extends('frontend.layouts.master')
@section('content')
        <!-- تسجيل الدخول -->
  <section class="main-page">

    <div class="row row-100vw">
      <section class="sec-form">
        <div class="container">
          <div class="row row-100vw form-sign form-sign-in">
              <div class="form-sign-img col-lg-6 col-xl-5 d-sm-none d-none d-md-none d-lg-inline-block">
                  <img src="{{asset('frontend/images/signIn.svg')}}" />
              </div>
              <form class="col-md-9 col-lg-6 col-xl-6 offset-xl-1 col-xs-9" action="{{route('user.sign')}}" method="POST">
                  @csrf   
                  <h3 class="sec-title-from">تسجيل الدخول</h3>
                  <!-- البريد الالكترونى او الهاتف  -->
                  <!-- عملت ال name : yourphone فى التسجيل كان email or yourphone -->
                  <div>
                    <input type="text" class="nuumber" name="phone" placeholder="رقم الهاتف" required/>
                    <div></div>
                  </div>
                  
                  <!--الرقم السري  -->
                  <div>
                    <div class="show-hide-password text-right">
                        <input class="password mb-0" type="password" name="password" placeholder="كلمه المرور" required/>
                        <i class="far fa-eye-slash show-hide-icon"></i>
                    </div>

                    <div></div>
                  </div>
              
                  <!-- check box -->
                  <div class="rember-password">
                        <a href="{{route('user.verify')}}">نسيت كلمه السر ؟</a>
                        <div>
                          <label>
                            تذكر كلمه المرور
                          </label>
                          <input type="checkbox">
                        </div>
                  </div>
                  <!-- زرار الادخال ع الصفحه -->
                  <button class="submit" name="submit" type="submit">تسجيل الدخول</button>
                  <div class="question qus-signin">
                    <span>
                      أليس لديك حساب؟
                      <a href="{{route('user.register')}}">انشاء حساب جديد</a>
                    </span>
                    
                  </div>
              </form>
          </div>
        </div>
      </section>
    </div>
  </section>  
@endsection