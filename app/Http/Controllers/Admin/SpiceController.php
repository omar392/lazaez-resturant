<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Spice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:spices-read')->only(['index']);
        $this->middleware('permission:spices-create')->only(['create','store']);
        $this->middleware('permission:spices-update')->only(['edit','update']);
        $this->middleware('permission:spices-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spice = Spice::get();
        return view('admin.spice.index',compact('spice'));
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
        $status = Spice::create($data);
        if($status){
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('spice.index');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
    }

    public function spiceStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('spices')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('spices')->where('id',$request->id)->update(['status'=>'inactive']);
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
        $spice = Spice::find($id);
        if($spice){
            return view('admin.spice.edit',compact('spice'));
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
        $spice = Spice::find($id);
        if($spice){
            $this->validate($request,[
                'name_ar'=>'string|required',
                'name_en'=>'string|required',
                'status'=>'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            $status = $spice->fill($data)->save();
            if($status){
                toastr()->info('تم التعديل بنجاح');
                return redirect()->route('spice.index');
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
        $spice = Spice::find($id);
        if($spice){
        $status=$spice->delete();
        if($status){
            toastr()->error('تم الحذف بنجاح');
            return redirect()->route('spice.index');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}
