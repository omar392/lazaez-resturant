@extends('admin.layouts.master')
@section('content')


<div class="content">
    <div class="container-fluid">
        @include('admin.layouts.notification')
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title" style="font-family: cairo;">الأقسام</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active">الأقسام</li>
                    </ol>
                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">القسم</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name_ar" value="{{$category->name_ar}}"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="name_en" value="{{$category->name_en}}"
                                            id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">وصف موجز</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="summary_ar" value="{{$category->summary_ar}}"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="summary_en" value="{{$category->summary_en}}"
                                            id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="input-preview" for="img">أضف صورة</label>
                                    <div class="col-sm-10">
                                        <input class="input-preview__src" id="img" name="image" type="file" value="{{url(public_path('upload/team/' . $category->image))}}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> يوجد أقسام فرعية : </label>
                                    <input id="is_parent" type="checkbox" name="is_parent" value="{{$category->is_parent}}" {{$category->is_parent==1 ? 'checked':''}}>  موجود 
                                </div>
                                <div class="form-group {{$category->is_parent==1 ? 'd-none' : ''}}" id="parent_cat_div">
                                <label for="parent_id">الأقسام الفرعية</label>
                                    <select name="parent_id" class="form-control show-tick">
                                        <option value="">--الأقسام الفرعية--</option>
                                        @foreach ($parent_cats as $pcats)
                                            <option value="{{$pcats->id}}" {{$pcats->id==$category->parent_id ? 'selected' : '' }}>{{$pcats->name_ar}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">الحالة</label>
                                    <div class="col-sm-10">
                                        <select name="status" class="form-control show-tick">
                                            <option value="">--الحالة--</option>
                                            <option value="active" {{old('status')=='active'?'selected':''}}>مفعل</option>
                                            <option value="inactive" {{old('status')=='inactive'?'selected':''}}>غير مفعل</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="form-group text-center m-t-20">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-block btn-lg" name="submit"
                                            type="submit">تــعــديـــل</button>
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
@section('scripts')
{{-- <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script> --}}
{{-- <script>
     $('#lfm').filemanager('image');
</script> --}}
{{-- <script id="description">
    $(document).ready(function() {
        $('#description').summernote();
    });
</script> --}}
<script>
      $('#is_parent').change(function(e){
        e.preventDefault();
        var is_checked=$('#is_parent').prop('checked');
        // alert(is_checked);
        if(is_checked){
            $('#parent_cat_div').addClass('d-none');
            $('#parent_cat_div').val('');
        }
        else{
            $('#parent_cat_div').removeClass('d-none');
        }
      });
</script>
@endsection