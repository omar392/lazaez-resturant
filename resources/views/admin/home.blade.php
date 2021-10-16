@extends('admin.layouts.master')
@section('content')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    @include('admin.layouts.notification')
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title" style="font-family: cairo;">الرئيسية</h4>
                            </div>
                            {{-- <div class="col-sm-6">
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Stexo</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div> --}}
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->

                    <div class="row">
                    @if(Auth::guard('admin')->user()->hasPermission('admins-read'))
                    <div class="col-sm-6 col-xl-4">
                            <a href="{{route('admins.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-human-male-female bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >الاداريين</h5>
                                    </div>
                                    {{-- <h3 class="mt-4">{{\App\Models\Bolg::where('status','inactive')->count()}}</h3> --}}
                                    <h3 class="mt-4">{{\App\Models\Admin::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Admin::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">عدد الاداريين<span class="float-right">{{\App\Models\Admin::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('adverts-read'))
                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('advert.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-microphone-variant bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >الاعلانات</h5>
                                    </div>
                                    {{-- <h3 class="mt-4">{{\App\Models\Bolg::where('status','inactive')->count()}}</h3> --}}
                                    <h3 class="mt-4">{{\App\Models\Advert::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Advert::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">عدد الاعلانات<span class="float-right">{{\App\Models\Advert::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('categories-read'))
                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('category.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-dns bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >الاقسام الرئيسية</h5>
                                    </div>
                                    {{-- <h3 class="mt-4">{{\App\Models\Bolg::where('status','inactive')->count()}}</h3> --}}
                                    <h3 class="mt-4">{{\App\Models\Category::where('is_parent', 1)->count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Category::where('is_parent', 1)->count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">الاقسام الرئيسية<span class="float-right">{{\App\Models\Category::where('is_parent', 1)->count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('category.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-dns bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >الاقسام الفرعية</h5>
                                    </div>
                                    <h3 class="mt-4">{{\App\Models\Category::where('is_parent',0)->count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Category::where('is_parent',0)->count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">الاقسام الفرعية<span class="float-right">{{\App\Models\Category::where('is_parent',0)->count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('products-read'))
                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('product.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-laptop-windows bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >المنتجات </h5>
                                    </div>
                                    <h3 class="mt-4">{{\App\Models\Product::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Product::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">عدد المنتجات <span class="float-right">{{\App\Models\Product::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('offers-read'))
                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('offer.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-coin bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >العروض </h5>
                                    </div>
                                    <h3 class="mt-4">{{\App\Models\Offer::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Offer::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">عدد العروض <span class="float-right">{{\App\Models\Offer::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endif
                    </div>

                    <!-- end row -->


                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

        
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
@endsection