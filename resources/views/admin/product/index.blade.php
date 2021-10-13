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
                        <br>
                        <div class="row align-items-center">
                            <div class="text-center">
                                <!-- Large modal -->
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fas fa-plus-circle"></i> إضافة منتج </button>
                            </div>
                        <!--  Modal content for the above example -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0" id="myLargeModalLabel" style="font-family: cairo;">إضافة منتج جديد</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body">
                                            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">اسم المنتج</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="name_ar" value=""
                                                            id="example-text-input" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Product Name</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="name_en" value=""
                                                            id="example-text-input" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input"
                                                        class="col-sm-2 col-form-label">الوصف</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description_ar" id="editor5"></textarea>
                                                    <script>
                                                            CKEDITOR.replace( 'editor5' );
                                                    </script>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description_en" id="editor"></textarea>
                                                        <script>
                                                                CKEDITOR.replace( 'editor' );
                                                        </script>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">السعر</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="number" name="price" value=""
                                                            id="example-text-input" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">الخصم</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="number" name="discount" value=""
                                                            id="example-text-input" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="input-preview" for="img">أضف صورة</label>
                                                    <div class="col-sm-10">
                                                        <input class="input-preview__src" id="img" name="image" type="file" />
                                                    </div>
                                                </div>
                                            <div class="form-group row">
                                                <label>القسم</label>
                                                <select id="cat_id" name="cat_id" class="form-control show-tick">
                                                    <option value="">--القسم--</option>
                                                    @foreach (\App\Models\Category::where('is_parent',1)->get() as $cat)
                                                    <option value="{{$cat->id}}" {{old('cat_id')==$cat->id? 'selected' : ''}}>{{$cat->name_ar}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group d-none" id="child_cat_div">
                                                <label>القسم الفرعى</label>
                                                <select id="chil_cat_id" name="child_cat_id" class="form-control show-tick">
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label>التقطيع</label>
                                                <select name="cutting_id" class="form-control show-tick">
                                                    <option value="">--التقطيع--</option>
                                                @foreach (\App\Models\Cutting::get() as $cutting)
                                                <option value="{{$cutting->id}}" {{old('cutting_id')==$cutting->id? 'selected' : ''}}>{{$cutting->name_ar}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label>التغليف</label>
                                                <select name="wrapping_id" class="form-control show-tick">
                                                    <option value="">--التغليف--</option>
                                                @foreach (\App\Models\Wrapping::get() as $wrapping)
                                                <option value="{{$wrapping->id}}" {{old('wrapping_id')==$wrapping->id? 'selected' : ''}}>{{$wrapping->name_ar}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label>الطهى</label>
                                                <select name="cooking_id" class="form-control show-tick">
                                                    <option value="">--الطهى--</option>
                                                @foreach (\App\Models\Cooking::get() as $cooking)
                                                <option value="{{$cooking->id}}" {{old('cooking_id')==$cooking->id? 'selected' : ''}}>{{$cooking->name_ar}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label>التوابل</label>
                                                <select name="spice_id" class="form-control show-tick">
                                                    <option value="">--التوابل--</option>
                                                @foreach (\App\Models\Spice::get() as $spice)
                                                <option value="{{$spice->id}}" {{old('spice_id')==$spice->id? 'selected' : ''}}>{{$spice->name_ar}}</option>
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
                                                            type="submit">إضافة</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        </div> <!-- end row -->
                    </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead >
                                    <tr>
                                        <th>#</th>
                                        <th>المنتج</th>
                                        <th>الصورة</th>
                                        <th>السعر</th>
                                        <th>الخصم</th>
                                        <th>السعر بعد الخصم</th>
                                        <th>الحالة</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>
                                @foreach ($products as $item)
                                <tbody>
                                
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->name_ar}}</td>
                                        <td><img src="{{ !empty($item->image) ? url('upload/product/' . $item->image) : url('upload/no.png') }}"
                                            width="100px" height="110px" alt="image" style="border-radius: 70px;">
                                        </td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->discount}}</td>
                                        <td>{{$item->offer_price}}</td>
                                        <td>
                                            <input type="checkbox" name="toogle" value="{{$item->id}}"  data-toggle="toggle" {{$item->status=='active' ? 'checked' : ''}} data-on="active" data-off="inactive" data-size="sm" data-onstyle="success" data-offstyle="danger">
                                        </td>
                                        <td>
                                            <a></a><button type="button" class="float-left btn btn-success" data-toggle="modal" data-target="#productID{{$item->id}}" data-size="sm" title="View"><i class="fa fa-eye"></i></button></a>
                                            <a href="{{route('product.edit',$item->id)}}"><button type="button"  class="float-left btn btn-info" data-size="sm" title="Edit"><i class="fa fa-edit"></i></button></a>
                                            <form class="float-left ml-1" action="{{route('product.destroy',$item->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                            <a data-toggle="tooltip" title="delete" data-id="{{$item->id}}" class="dltBtn"><button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete" data-size="sm"><i class="fa fa-trash"></i></button></a>
                                            </form>
                                        </td>
                                        <div class="modal" id="productID{{$item->id}}">
                                            <div class="modal-dialog">
                                                @php
                                                    $product =\App\Models\Product::where('id',$item->id)->first();
                                                @endphp
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title" style="font-family: cairo;">{{\Illuminate\Support\Str::upper($product->name_ar)}}</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">

                                                <strong> صورة المنتج:</strong>
                                                <div><img src="{{ !empty($product->image) ? url('upload/product/' . $product->image) : url('upload/no.png') }}"
                                                width="100px" height="110px" alt="image" style="border-radius: 70px;"></div>
                                                <strong> اسم المنتج:</strong>
                                                <p>{!! $product->name_ar !!}</p>
                                                <strong>  Product :</strong>
                                                <p>{!! $product->name_en !!}</p>
                                                <strong>تفاصيل عن المنتج :</strong>
                                                <p>{!! $product->description_ar !!}</p>
                                                <strong>  Product Description :</strong>
                                                <p>{!! $product->description_en !!}</p>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <strong>سعر المنتج :</strong>
                                                        <p>{{ $product->price }}</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <strong> الخصم :</strong>
                                                        <p>{{ $product->discount }}</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <strong>السعر بعد الخصم :</strong>
                                                        <p>{{ $product->offer_price }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <strong>التوابل : </strong>
                                                        <p>{{ \App\Models\Spice::where('id',$product->spice_id)->value('name_ar') }}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <strong>التقطيع : </strong>
                                                        <p>{{ \App\Models\Cutting::where('id',$product->cutting_id)->value('name_ar') }}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <strong>الطهى : </strong>
                                                        <p>{{ \App\Models\Cooking::where('id',$product->cooking_id)->value('name_ar') }}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <strong>التغليف : </strong>
                                                        <p>{{ \App\Models\Wrapping::where('id',$product->wrapping_id)->value('name_ar') }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <strong>القسم : </strong>
                                                        <p>{{ \App\Models\Category::where('id',$product->cat_id)->value('name_ar') }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <strong> القسم الفرعى :</strong>
                                                        <p>{{ \App\Models\Category::where('id',$product->child_cat_id)->value('name_ar') }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <strong>الحالة :</strong>
                                                        <p class="badge badge-warning">{{ $product->status}}</p>
                                                    </div>
                                                </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </tr>
                                
                                </tbody>
                                @endforeach
                            </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
@endsection
@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$('.dltBtn').click(function (e) {
    var form=$(this).closest('form');
    var dataID=$(this).data('id');
    e.preventDefault();
    swal({
        title: "هل أنت فعلا تريد الحذف ؟",
        text: "فى حالة الحذف لن تستطيع الإعاده مرة أخرى",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            form.submit();
            swal("تم الحذف بنجاح", {
            icon: "success",
            });
        } else {
            swal("تم إلغاء الحذف");
        }
        });
});
</script>
<script>
    $('input[name=toogle]').change(function(){
        var mode=$(this).prop('checked');
        var id=$(this).val();
        // alert(id);
        $.ajax({
            url:"{{route('product.status')}}",
            type:"POST",
            data:{
                _token:'{{csrf_token()}}',
                mode:mode,
                id:id,
            },
            success:function(response){
                if(response.status){
                    // alert(response.msg);
                }
                else{
                    alert('من فضلك حاول مرة أخرى')
                }
            }
        })
    });
</script>
<script>
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
                        html_option +="<option value='"+id+"'>"+title+"</option>"
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
</script>
@endsection