@extends('admin.layouts.master')
@section('content')


<div class="content">
    <div class="container-fluid">
        @include('admin.layouts.notification')
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title" style="font-family: cairo;">المنتجات</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active">المنتجات</li>
                    </ol>
                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">المنتج</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name_ar" value="{{$product->name_ar}}"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Product</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="name_en" value="{{$product->name_en}}"
                                            id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-sm-2 col-form-label">الوصف</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description_ar" id="editor5">{!! $product->description_ar !!}</textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor5' );
                                    </script>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description_en" id="editor">{!! $product->description_en !!}</textarea>
                                        <script>
                                                CKEDITOR.replace( 'editor' );
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">السعر</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="price" value="{{$product->price}}"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">الخصم</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="discount" value="{{$product->discount}}"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="input-preview" for="img">أضف صورة</label>
                                    <div class="col-sm-10">
                                        <input class="input-preview__src" id="img" name="image" type="file" value="{{url(public_path('upload/product/' . $product->image))}}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>القسم</label>
                                    <select id="cat_id" name="cat_id" class="form-control show-tick">
                                        <option value="">--القسم--</option>
                                        @foreach (\App\Models\Category::where('is_parent',1)->get() as $cat)
                                        <option value="{{$cat->id}}" {{$cat->id==$product->cat_id? 'selected' : ''}}>{{$cat->name_ar}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group d-none" id="child_cat_div">
                                    <label>القسم الفرعى</label>
                                    <select id="chil_cat_id" name="child_cat_id" class="form-control show-tick">
                                        
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
<script>
    var child_cat_id={{$product->child_cat_id}};
    $('#cat_id').change(function(){
        var  cat_id=$(this).val();
        // alert(cat_id);
        if(cat_id !=null){
            $.ajax({
                url:"/admin/category/"+cat_id+"/child",
                type:"POST",
                data:{
                    _token:"{{csrf_token()}}",
                    cat_id:cat_id,
                },
                success:function(response){
                    // console.log(response);
                    var html_option="<option value=''> ---الاقسام الفرعية--- </option>";
                    if(response.status){
                        $('#child_cat_div').removeClass('d-none');
                        $.each(response.data,function(id,title){
                            html_option +="<option value='"+id+"' "+(child_cat_id==id ? 'selected' : '')+">"+title+"</option>"
                        });
                    }
                    else{
                        // alert('لا يوجد قسم فرعى !!');
                        $('#child_cat_div').addClass('d-none');
                    }
                    $('#chil_cat_id').html(html_option);
                }
            });
        }
    });
    if(child_cat_id !=null){
        $('#cat_id').change();
    }
</script>
@endsection