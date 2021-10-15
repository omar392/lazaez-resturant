<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:offers-read')->only(['index']);
        $this->middleware('permission:offers-create')->only(['create', 'store']);
        $this->middleware('permission:offers-update')->only(['edit', 'update']);
        $this->middleware('permission:offers-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offer = Offer::get();
        return view('admin.offer.index',compact('offer'));
    }

    public function offerStatus(Request $request)
    {

        // dd($request->all());
        if ($request->mode == 'true') {
            DB::table('offers')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('offers')->where('id', $request->id)->update(['status' => 'inactive']);
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
        $this->validate($request,[
            'name_ar'=>'string|required',
            'name_en'=>'string|required',
            'description_ar'=>'string|required',
            'description_en'=>'string|required',
            'image'=>'required',
            'status'=>'required|in:active,inactive',
            'main_price' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
        ]);
        $data = $request->all();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/offer'), $filename);
            $data['image'] = $filename;
        }
        $data['end_price'] = (($request->main_price) - ($request->discount));
        $status = Offer::create($data);
        if ($status) {
            return redirect()->route('offer.index')->with('success', 'تم الإنشاء بنجاح');
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
        $offer = Offer::find($id);
        if ($offer) {
            return view('admin.offer.index', compact(['offer']));
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
        $offer = Offer::find($id);
        if ($offer) {
            return view('admin.offer.edit', compact(['offer']));
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
        $offer = Offer::find($id);
        if ($offer) {
            $this->validate($request, [
                'name_ar'=>'string|required',
                'name_en'=>'string|required',
                'description_ar'=>'string|required',
                'description_en'=>'string|required',
                'image'=>'required',
                'status'=>'required|in:active,inactive',
                'main_price' => 'nullable|numeric',
                'discount' => 'nullable|numeric',
            ]);
            $data = $request->all();
            if ($request->file('image')) {
                $file = $request->file('image');
                @unlink(public_path('upload/offer/' . $data->image));
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/offer'), $filename);
                $data['image'] = $filename;
            }
        $data['end_price'] = (($request->main_price) - ($request->discount));
        $status = $offer->fill($data)->save();
        if ($status) {
            return redirect()->route('offer.index')->with('success', 'تم التعديل بنجاح');
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
        $offer = Offer::find($id);
        if ($offer) {
            $status = $offer->delete();
            if ($status) {
                return redirect()->route('offer.index')->with('success', 'تم الحذف بنجاح');
            } else {
                return redirect()->with('error', 'هناك خطأ ما !!');
            }
        } else {
            return back()->with('error', 'هذه البيانات غير موجودة');
        }
    }
}
