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
                        <br>
                        <div class="row align-items-center">
                            @if(Auth::guard('admin')->user()->hasPermission('categories-create'))
                            <div class="text-center">
                                <!-- Large modal -->
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fas fa-plus-circle"></i> إضافة قسم </button>
                            </div>
                            @endif
                        <!--  Modal content for the above example -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0" id="myLargeModalLabel" style="font-family: cairo;">إضافة قسم جديد</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body">
                                            <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">اسم القسم</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="name_ar" value=""
                                                            id="example-text-input" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Category Name</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="name_en" value=""
                                                            id="example-text-input" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">وصف موجز</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="summary_ar" value=""
                                                            id="example-text-input" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Small Description</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="summary_en" value=""
                                                            id="example-text-input" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="input-preview" for="img">أضف صورة</label>
                                                    <div class="col-sm-10">
                                                        <input class="input-preview__src" id="img" name="image" type="file" />
                                                    </div>
                                                </div>
                                               <div class="form-group">
                                                    <label>تابع لقسم رئيسى :</label>
                                                    <input id="is_parent" type="checkbox" name="is_parent" value="1" checked>اختيار 
                                                </div>
                                                <div class="form-group d-none" id="parent_cat_div">
                                                    <label for="parent_id">الأقسام الرئيسية</label>
                                                    <select name="parent_id" class="form-control show-tick">
                                                        <option value="">--الأقسام الرئيسية--</option>
                                                        @foreach ($parent_cats as $pcats)
                                                            <option value="{{$pcats->id}}"{{old('parent_id')==$pcats->id ? 'selected':''}}>{{$pcats->name_ar}}</option>
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
                                        <th>الاسم</th>
                                        <th>الصورة</th>
                                        <th>نوع القسم</th>
                                        <th>القسم الرئيسى</th>
                                        <th>الحالة</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>
                                @foreach ($categories as $item)
                                <tbody>
                                
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->name_ar}}</td>
                                        <td><img src="{{ !empty($item->image) ? url('upload/category/' . $item->image) : url('upload/no.png') }}"
                                            width="100px" height="110px" alt="image" style="border-radius: 70px;">
                                        </td>
                                         <td>{{$item->is_parent===1 ? 'رئيسى' : 'فرعى'}}</td>
                                        <td>{{\App\Models\Category::where('id',$item->parent_id)->value('name_ar')}}</td>
                                        <td>
                                            <input type="checkbox" name="toogle" value="{{$item->id}}"  data-toggle="toggle" {{$item->status=='active' ? 'checked' : ''}} data-on="active" data-off="inactive" data-size="sm" data-onstyle="success" data-offstyle="danger">
                                        </td>
                                        <td>
                                            @if(Auth::guard('admin')->user()->hasPermission('categories-update'))
                                            <a href="{{route('category.edit',$item->id)}}"><button type="button"  class="float-left btn btn-info" data-size="sm" title="Edit"><i class="fa fa-edit"></i></button></a>
                                            @endif
                                            &ensp;
                                            @if(Auth::guard('admin')->user()->hasPermission('categories-delete'))
                                            <form class="float-left ml-1" action="{{route('category.destroy',$item->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                            <a data-toggle="tooltip" title="delete" data-id="{{$item->id}}" class="dltBtn"><button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash"></i></button></a>
                                            </form>
                                            @endif
                                        </td>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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
            url:"{{route('category.status')}}",
            type:"POST",
            data:{
                _token:'{{csrf_token()}}',
                mode:mode,
                id:id,
            },
            success:function(response){
                if(response.status){
                    toastr.success(response.msg);
                }
                else{
                    alert('من فضلك حاول مرة أخرى')
                }
            }
        })
    });
</script>
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