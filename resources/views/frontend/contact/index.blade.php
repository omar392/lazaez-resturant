@extends('frontend.layouts.master')
@section('content')
        <!-- section main-page -->
    <!-- scss/components/_form/scss -->
    <section class="main-page">
        <div class="container join-Us">
            <div class="row row-100vw">
                <div class="row row-100vw sec-form">
                    <div class="sec-title-from">
                        <h3>تواصل معنا</h3>
                    </div>
                </div>
                <!-- فورم تواصل معنا -->
                <div class="row row-100vw form-join">
                    <form class="col-md-10 col-lg-6 col-xs-12">
                        <label>رقم الهاتف</label>
                        <!-- ادخال الرقم -->
                        <input type="text" name="phone" />
                        <label>اكتب رسالتك هنا</label>
                        <!-- كتابه الرساله -->
                        <textarea name="message" placeholder="اكتب رسالتك هنا"></textarea>

                        <!-- زرار الادخال ع الصفحه -->
                        <button class="submit">ارسال</button>

                    </form>

                    <!-- دى صوره تواصل مع كتابه محتوى تحت -->
                    <div class="form-sign-img col-lg-6 d-sm-none d-none d-md-none d-lg-flex">
                        <img src="{{asset('frontend/images/jion us.svg')}}" />
                        <p>االنص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection