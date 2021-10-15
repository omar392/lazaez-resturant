<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cutting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuttingController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:cuttings-read')->only(['index']);
        $this->middleware('permission:cuttings-create')->only(['create', 'store']);
        $this->middleware('permission:cuttings-update')->only(['edit', 'update']);
        $this->middleware('permission:cuttings-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cutting = Cutting::get();
        return view('admin.cutting.index',compact('cutting'));
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
        $status = Cutting::create($data);
        if($status){
            return redirect()->route('cutting.index')->with('success','تم الإنشاء بنجاح');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
    }

    public function cuttingStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('cuttings')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('cuttings')->where('id',$request->id)->update(['status'=>'inactive']);
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
        $cutting = Cutting::find($id);
        if($cutting){
            return view('admin.cutting.edit',compact('cutting'));
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
        $cutting = Cutting::find($id);
        if($cutting){
            $this->validate($request,[
                'name_ar'=>'string|required',
                'name_en'=>'string|required',
                'status'=>'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            $status = $cutting->fill($data)->save();
            if($status){
                return redirect()->route('cutting.index')->with('success','تم التعديل بنجاح');
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
        $cutting = Cutting::find($id);
        if($cutting){
        $status=$cutting->delete();
        if($status){
            return redirect()->route('cutting.index')->with('success','تم الحذف بنجاح');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}
