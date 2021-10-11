<!DOCTYPE html>
<html lang="en">


@include('admin.layouts.head')


<body>

    <div id="wrapper">

@include('admin.layouts.header')
@include('admin.layouts.sidebar')
<div class="content-page">
@yield('content')
<footer class="footer" dir="ltr">
    © {{ now()->year }}  <span class="d-none d-sm-inline-block"> -  Designing & Programming <i class="mdi mdi-heart text-danger"></i> Soft Steps</span>.
</footer>

</div>
    </div>


@include('admin.layouts.footer')

</body>


</html>