@extends('admin.layouts.master')
@section('content')


<div class="content">
    <div class="container-fluid">
        @include('admin.layouts.notification')
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title" style="font-family: cairo;">المديرين</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active">المديرين</li>
                    </ol>
                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form action="{{route('admins.update',$admin->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-sm-2 col-form-label">الاسم</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name"
                                            id="example-text-input" placeholder="الاسم" value="{{$admin->name}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">البريد الالكترونى</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email" type="email"
                                            id="example-text-input" placeholder="البريد الالكترونى" value="{{$admin->email}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">الرقم السرى</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="password" type="password"
                                            id="example-text-input" placeholder="الرقم السرى" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">@lang('admin.role')</label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-round" name="role_id" id="role_id" required>
                                        <option value="">---</option>
                                        @foreach($roles as $role)
                                        <option  value="{{$role->id}}" {{$admin->hasRole($role->name) == 'true'? 'selected':''}}>{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group text-center m-t-20">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-block btn-lg" name="submit"
                                            type="submit">تعديل</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> 
        </div>
    </div>
</div>


@endsection