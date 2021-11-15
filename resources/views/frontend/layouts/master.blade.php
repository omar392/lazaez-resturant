<!DOCTYPE html>
<html lang="ar">

@include('frontend.layouts.head')

<body>

    <!-- loader -->
    <!-- sass/components/_loader-->
    <div class="loader">
        <div class="lds-default">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end loader -->

    <!-- up -->
    <!-- sass/components/_up-->
    <div class="up">
        <a href="#up">
            <i class="fas fa-hand-point-up"></i>
        </a>
    </div>
    <!-- end---Up -->

    @include('frontend.layouts.header')

    @yield('content')

    <!-- section search -->
    <section class="container sec-col-4-1 search-sec-main">
        <div class="row">
            <div class="filter-search parent-sec-col-4-1"
                style="display:flex;flex-wrap: wrap;justify-content:space-around;align-content: center;">

            </div>
        </div>
    </section>

@include('frontend.layouts.footer')


@include('frontend.layouts.scripts')

</body>

</html>
