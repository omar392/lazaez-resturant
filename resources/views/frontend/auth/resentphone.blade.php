@extends('frontend.layouts.master')
@section('content')

  <!-- forget password -->
  <section class="main-page">
    <div class="row row-100vw">
      <section class="sec-form">
        <div class="container">
          <div class="row row-100vw form-sign form-forget">
              <!-- دى الصوره-->
              <div class="form-sign-img col-lg-6 d-none d-sm-none d-md-none d-lg-flex">
                  <img src="{{asset('frontend/images/forget.svg')}}"/>
              </div>

              <!-- name for forget is :: forgetPassword -->
              <form class="col-md-9 col-lg-6 col-xl-6 offset-xl-1 col-xs-9" action="{{route('send.verify')}}" method="POST" enctype="multipart/form-data">
                @csrf   
                <!-- عنوان الفورم -->
                <div class="sec-title-from" style="margin-bottom: 2.187rem !important;">
                  <h3>نسيت كلمه المرور</h3>
                </div>
                <!-- نص -->
                <div class="text-form">
                  <p>من فضلك قم بإدخال رقم هاتفك لارسال كود مكون من4 أرقام لإعادة ضبط كلمة المرور الخاصة بك</p>
                </div>
                
                <!-- name for forget for email or password is user name
                ف التسجيل الجديد كان email and yourphone--- -->
                <div>
                  <input type="text" name="phone" placeholder="رقم الهاتف" required/>
                  <div></div>
                </div>
                <button class="submit" name="submit" type="submit">ارسال</button>
              </form>
          </div>
        </div>
      </section>
    </div>
  </section> 
@endsection