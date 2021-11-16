@extends('frontend.layouts.master')
@section('content')
        <!-- section main-page -->
    <!-- scss/components/_form/scss -->
    <section class="main-page">
        <div class="container join-Us">
            <div class="row row-100vw">
                <div class="row row-100vw sec-form">
                    <div class="sec-title-from">
                        <h3>{{__('website.contact')}}</h3>
                    </div>
                </div>
                <!-- فورم تواصل معنا -->
                <div class="row row-100vw form-join">
                    <form class="col-md-10 col-lg-6 col-xs-12">
                        <label>{{__('website.phone')}}</label>
                        <!-- ادخال الرقم -->
                        <input type="text" name="phone" />
                        <label>{{__('website.writemessage')}}</label>
                        <!-- كتابه الرساله -->
                        <textarea name="message" placeholder="{{__('website.writemessage')}}"></textarea>

                        <!-- زرار الادخال ع الصفحه -->
                        <button class="submit">{{__('website.send')}}</button>

                    </form>

                    <!-- دى صوره تواصل مع كتابه محتوى تحت -->
                    <div class="form-sign-img col-lg-6 d-sm-none d-none d-md-none d-lg-flex">
                        <img src="{{asset('frontend/images/jion us.svg')}}" />
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection