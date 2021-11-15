@extends('frontend.layouts.master')
@section('content')
    <!-- section for page -->
    <!-- scss/pragraph -->
    <section class="main-page">


        <!-- slider  -->
        <!-- sass/components/_slider -->
        <div id="carouselExampleCaptions" class="carousel slide parent-slider wow slideInRight" data-wow-duration="2.5s"
            data-bs-ride="carousel">

            <div class="carousel-indicators parent-slider-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="indicator active"
                    aria-current="true" aria-label="Slide 1"></button>
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

        <!-- الديف دى بتاعت الصفحه ال فيها من نحن -->
        <div class="container">
            <div class="row Pragraph-page whoUs">
                <h3>من نحن</h3>
                <!-- هنا يتم كتابه من نحن -->
                <div class="pragraph wow flipOutY" data-wow-duration="1.5s">
                    <p>
                        .هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                        يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                    </p>
                    <p>
                        .إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن
                        يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج
                        العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع
                    </p>
                    <p>
                        ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى
                        أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا
                        يليق </p>
                    </p>
                    <p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو
                        حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                </div>
                <div class="pragraph wow flipInY" data-wow-duration="1.7s">
                    <p>
                        .هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                        يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                    </p>
                    <p>
                        .إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن
                        يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج
                        العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع
                    </p>
                    <p>
                        ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى
                        أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا
                        يليق </p>
                    </p>
                    <p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو
                        حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                </div>
                <div class="pragraph wow flipOutY" data-wow-duration="1.5s">
                    <p style="text-align: center;">
                        .هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                        يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                    </p>
                    <p class="container" style="text-align: center;">
                        .إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن
                        يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج
                        العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع
                    </p>
                </div>
                <div class="pragraph wow flipInY" data-wow-duration="1.7s">
                    <p style="text-align: center;">
                        .هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                        يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                    </p>
                    <p class="container" style="text-align: center;">
                        .إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن
                        يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج
                        العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع
                    </p>
                </div>
                <div class="pragraph wow flipOutY" data-wow-duration="1.5s">
                    <p>
                        .هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                        يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                    </p>
                    <p>
                        .إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن
                        يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج
                        العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع
                    </p>
                    <p>
                        ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى
                        أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا
                        يليق </p>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
