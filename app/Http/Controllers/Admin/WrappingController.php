<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wrapping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WrappingController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:wrappings-read')->only(['index']);
        $this->middleware('permission:wrappings-create')->only(['create','store']);
        $this->middleware('permission:wrappings-update')->only(['edit','update']);
        $this->middleware('permission:wrappings-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wrapping = Wrapping::get();
        return view('admin.wrapping.index',compact('wrapping'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_ar'=>'string|required',
            'name_en'=>'string|required',
            'status'=>'nullable|in:active,inactive',
        ]);
        $data = $request->all();
        $status = Wrapping::create($data);
        if($status){
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('wrapping.index');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
    }
    public function wrappingStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('wrappings')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('wrappings')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'تم تغيير الحالة بنجاح','status'=>true]);
        
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wrapping = Wrapping::find($id);
        if($wrapping){
            return view('admin.wrapping.edit',compact('wrapping'));
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wrapping = Wrapping::find($id);
        if($wrapping){
            $this->validate($request,[
                'name_ar'=>'string|required',
                'name_en'=>'string|required',
                'status'=>'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            $status = $wrapping->fill($data)->save();
            if($status){
                toastr()->info('تم التعديل بنجاح');
                return redirect()->route('wrapping.index');
            }else{
                return back()->with('error','هناك خطأ ما !!');
            }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wrapping = Wrapping::find($id);
        if($wrapping){
        $status=$wrapping->delete();
        if($status){
            toastr()->error('تم الحذف بنجاح');
            return redirect()->route('wrapping.index');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}
