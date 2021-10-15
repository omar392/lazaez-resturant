<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvertController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:adverts-read')->only(['index']);
        $this->middleware('permission:adverts-create')->only(['create', 'store']);
        $this->middleware('permission:adverts-update')->only(['edit', 'update']);
        $this->middleware('permission:adverts-delete')->only(['destroy']);
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advert = Advert::get();
        return view('admin.advert.index',compact('advert'));
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
            'image'=>'required',
            'status'=>'nullable|in:active,inactive',
        ]);
        $data = $request->all();
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/advert'),$filename);
            $data['image']=$filename;
        }
        $status = Advert::create($data);
        if($status){
            return redirect()->route('advert.index')->with('success','تم الإنشاء بنجاح');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
    }

    public function advertStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('adverts')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('adverts')->where('id',$request->id)->update(['status'=>'inactive']);
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
        $advert = Advert::find($id);
        if($advert){
            return view('admin.advert.edit',compact('advert'));
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
        $advert = Advert::find($id);
        if($advert){
            $this->validate($request,[
                'image'=>'required',
                'status'=>'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            if ($request->file('image')){
                $file = $request->file('image');
                @unlink(public_path('upload/advert/'.$data->image));
                $filename =date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/advert'),$filename);
                $data['image']=$filename;
            }
            $status = $advert->fill($data)->save();
            if($status){
                return redirect()->route('advert.index')->with('success','تم التعديل بنجاح');
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
        $advert = Advert::find($id);
        if($advert){
        $status=$advert->delete();
        if($status){
            return redirect()->route('advert.index')->with('success','تم الحذف بنجاح');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}
