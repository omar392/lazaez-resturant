<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:products-read')->only(['index']);
        $this->middleware('permission:products-create')->only(['create', 'store']);
        $this->middleware('permission:products-update')->only(['edit', 'update']);
        $this->middleware('permission:products-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('admin.product.index', compact('products'));
    }

    public function productStatus(Request $request)
    {

        // dd($request->all());
        if ($request->mode == 'true') {
            DB::table('products')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('products')->where('id', $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg' => 'تم تغيير الحالة بنجاح', 'status' => true]);
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
        $this->validate($request, [
            'name_ar' => 'string|required',
            'name_en' => 'string|required',
            'description_ar' => 'string|nullable',
            'description_en' => 'string|nullable',
            'price' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
            'cat_id' => 'required|exists:categories,id',
            'child_cat_id' => 'nullable|exists:categories,id',
            'status' => 'nullable|in:active,inactive',
        ]);
        $data = $request->all();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/product'), $filename);
            $data['image'] = $filename;
        }
        $data['offer_price'] = (($request->price) - ($request->discount));
        $status = Product::create($data);
        if ($status) {
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('product.index');
        } else {
            return back()->with('error', 'هناك خطأ ما !!');
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
        $product = Product::find($id);
        if ($product) {
            return view('admin.product.index', compact(['product']));
        } else {
            return back()->with('error', 'هذه البيانات غير موجودة');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        if ($product) {
            return view('admin.product.edit', compact(['product']));
        } else {
            return back()->with('error', 'هذه البيانات غير موجودة');
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
        $product = Product::find($id);
        if ($product) {
            $this->validate($request, [
                'name_ar' => 'string|required',
                'name_en' => 'string|required',
                'description_ar' => 'string|nullable',
                'description_en' => 'string|nullable',
                'price' => 'nullable|numeric',
                'discount' => 'nullable|numeric',
                'cat_id' => 'required|exists:categories,id',
                'child_cat_id' => 'nullable|exists:categories,id',
                'status' => 'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            if ($request->file('image')) {
                $file = $request->file('image');
                @unlink(public_path('upload/product/'.$data->image));
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/product'), $filename);
                $data['image'] = $filename;
            }
            $data['offer_price'] = (($request->price) - ($request->discount));
            $status = $product->fill($data)->save();
            if ($status) {
                toastr()->info('تم التعديل بنجاح');
                return redirect()->route('product.index');
            } else {
                return back()->with('error', 'هناك خطأ ما !!');
            }
        } else {
            return back()->with('error', 'هذه البيانات غير موجودة');
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
        $product = Product::find($id);
        if ($product) {
            $status = $product->delete();
            if ($status) {
                toastr()->error('تم الحذف بنجاح');
                return redirect()->route('product.index');
            } else {
                return redirect()->with('error', 'هناك خطأ ما !!');
            }
        } else {
            return back()->with('error', 'هذه البيانات غير موجودة');
        }
    }
}
