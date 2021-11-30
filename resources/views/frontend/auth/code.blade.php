@extends('frontend.layouts.master')
@section('content')
      <!-- ارجاع كلمه السر  -->
  <section class="main-page">
    <div class="row row-100vw">
      <section class="sec-form">

        <div class="container">
          <div class="row row-100vw form-sign form-backforget">
            <!-- الصوره -->
            <div class="form-sign-img col-xl-4 col-lg-5 d-none d-sm-none d-md-none d-lg-flex">
                <img src="{{asset('frontend/images/استرجاع كلمه المرور.svg')}}" height="350px"/>
            </div>

            <!-- name for forget is :: forgetPassword -->
            <form class="col-md-10 col-lg-7 col-xl-6 col-xs-12" action="get" name="form-backpassword">

                <div class="sec-title-from">
                  <h3>أدخل كود التفعيل</h3>
                </div>
                <div class="text-form">
                  {{-- <p>أدخل الكود</p> --}}
                </div>
                
                <!-- name for forget for email or password is user name
                ف التسجيل الجديد كان email and yourphone--- -->
                <form class="col-md-9 col-lg-6 col-xl-6 offset-xl-1 col-xs-9" action="{{route('user.sign')}}" method="POST" enctype="multipart/form-data">
                    @csrf  
                    <h3 class="sec-title-from">كود التفعيل</h3>
                    <br>
                    <div>
                      <input type="text" class="nuumber" name="code" placeholder="كود التفعيل" required/>
                      <div></div>
                    </div>
                    <button class="submit" name="submit" type="submit">إرسال</button>
                </form>
                <div class="question">
                  <span class="timer-text" style="display: none; color: #1A0405;">
                    (<span class="time"style="color: #1A0405;">1:59</span>) اعاده الارسال بعد 
                  </span>
                  {{-- <span class="qusetionForReSend">ألم تستلم الرساله؟</span>       --}}
                </div>


            </form>
          </div>
        </div>

      </section>
    </div>
  </section>  
@endsection