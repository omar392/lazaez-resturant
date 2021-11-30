@extends('frontend.layouts.master')
@section('content')
  <!-- reassign password section -->
  <section class="main-page">
    <!-- اعاده تعين كلمه السر-->
    <div class="row row-100vw">
      <section class="sec-form">

        <div class="container">
          <div class="row form-sign form-reassign-password">
              <div class="form-sign-img col-lg-4 col-xl-3 d-none d-sm-none d-md-none d-lg-inline-block">
                  <img src="{{asset('frontend/images/Re-password.svg')}}" style="height: 351px;"/>
              </div>
              <form class="col-md-9 col-lg-7 col-xl-6 col-xs-9" action="{{route('reset.pass')}}" method="POST">
                @csrf
                <div class="sec-title-from">
                  <h3>اعاده ضبط كلمه المرور</h3>
                </div>
                <div>
                    <input type="text" class="nuumber" name="code" placeholder="كود التفعيل" required/>
                    <div></div>
                  </div>
                <div>
                    <div class="show-hide-password">
                        <input class="password" type="password" name="password" placeholder=" كلمه المرور الجديده"/>
                        {{-- <i class="far fa-eye-slash show-hide-icon"></i> --}}
                    </div>
                    <div></div>
                </div>

                <div>
                    <div class="show-hide-password">
                        <input class="password" type="password" name="confirm_password" placeholder=" تأكيد كلمه المرور الجديده"/>
                        {{-- <i class="far fa-eye-slash show-hide-icon"></i> --}}
                    </div>
                    <div></div>
                </div>

                <button class="submit">تسجيل الدخول</button>

              </form>
          </div>
      </div>

      </section>
    </div>


  </section>
@endsection