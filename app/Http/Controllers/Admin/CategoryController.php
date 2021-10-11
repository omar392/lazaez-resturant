<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','DESC')->get();
        $parent_cats = Category::where('is_parent',1)->orderBy('name_ar','ASC')->get();
        return view('admin.category.index',compact(['categories','parent_cats']));
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

    public function categoryStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('categories')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('categories')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'تم تغيير الحالة بنجاح','status'=>true]);
        
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'name_ar'=>'string|required',
            'name_en'=>'string|required',
            'summary_ar'=>'string|nullable',
            'summary_en'=>'string|nullable',
            'is_parent'=>'sometimes|in:1',
            'parent_id'=>'nullable|exists:categories,id',
            'status'=>'required|in:active,inactive',
        ]);
        $data = $request->all();
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/category'),$filename);
            $data['image']=$filename;
        }
        $data['is_parent']=$request->input('is_parent',0);

        $status = Category::create($data);
        if($status){
            return redirect()->route('category.index')->with('success','تم الإنشاء بنجاح');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
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
        $category = Category::find($id);
        $parent_cats = Category::where('is_parent',1)->orderBy('name_ar','ASC')->get();
        if($category){
            return view('admin.category.edit',compact(['category','parent_cats']));
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
        $category = Category::find($id);
        if($category){
            $this->validate($request,[
                'name_ar'=>'string|required',
                'name_en'=>'string|required',
                'summary_ar'=>'string|nullable',
                'summary_en'=>'string|nullable',
                'is_parent'=>'sometimes|in:1',
                'parent_id'=>'nullable|exists:categories,id',
                'status'=>'required|in:active,inactive',
            ]);
            $data=$request->all();
            if($request->is_parent==1){
                $data['parent_id']=null;
            }
            if ($request->file('image')){
                $file = $request->file('image');
                @unlink(public_path('upload/category/'.$data->image));
                $filename =date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/category'),$filename);
                $data['image']=$filename;
            }
            $data['is_parent']=$request->input('is_parent',0);
            $status = $category->fill($data)->save();
            if($status){
                return redirect()->route('category.index')->with('success','تم التعديل بنجاح');
            }else{
                return back()->with('error','هناك خطأ ما !!');
            }
        }
        else{
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
        $category = Category::find($id);
        $child_cat_id = Category::where('parent_id',$id)->pluck('id');
        if($category){
           $status=$category->delete();
           if($status){
               if(count($child_cat_id)>0){
                   Category::shiftChild($child_cat_id);
               }
            return redirect()->route('category.index')->with('success','تم الحذف بنجاح');
           }else{
            return redirect()->with('error','هناك خطأ ما !!');}
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
    public function getChildByParentID(Request $request,$id){
        // dd($id);
        $category = Category::find($request->id);
       if($category){
        $child_id = Category::getChildByParentID($request->id);
        if(count($child_id)<=0){
            return response()->json(['status'=>false,'data'=>null,'msg'=>'']);
        }
        return response()->json(['status'=>true,'data'=>$child_id,'msg'=>'']);
       }
       else{
        return response()->json(['status'=>false,'data'=>null,'msg'=>'القسم غير موجود !!']);
       }

    }
}
