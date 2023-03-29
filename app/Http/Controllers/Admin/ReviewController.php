<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Slider;
use App\Services\UploadService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ReviewController extends Controller
{


    public function index(Request $request)
    {

        $data = Slider::where("type","reviews")->latest()->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('admin.reviews.edit', [$data]) . '" class="edit btn btn-primary btn-sm">تعديل</a> <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-sm btn-danger">حذف</a>';
                    return $actionBtn;
                })->rawColumns(['action'])->make(true);
        }
        return view('admin.reviews.index');

    }

    public function create()
    {


        $review  =new Slider();

        return view("admin.reviews.create", compact("review"));

    }

    public function store(Request $request,UploadService $UploadService)
    {
        $validator = Validator::make($request->all(), [
            'title' => "required",
            'subtitle' => "nullable",
            'content' => "required",
            'order'=>"required|numeric",

            'image' => 'required|mimes:png,jpeg|max:1000'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        $data=$request->except("_token","image","slug");

        if($request->image){

            $data['image']=$UploadService->upload($request->image,'images');
        }
        $data['type']= "reviews";
        Slider::create($data);

        return response()->json(['success' => true, 'message' => "تم إضافة تقيم جديد"]);


    }
    public function edit($id){


        $review=Slider::findorfail($id);
        return view("admin.reviews.edit", compact("review"));

    }
    public function update(Request $request,$id,UploadService $UploadService)
    {

        $validator = Validator::make($request->all(), [
            'title' => "required",
            'subtitle' => "nullable",
            'content' => "required",
            'order'=>"required|numeric",

            'image' => 'sometimes|mimes:png,jpeg|max:1000'
        ]);
        $data=$request->except("_token","image");
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        if($request->image){

            $data['image']=$UploadService->upload($request->image,'images');
        }

        $review=Slider::findorfail($id);

        $review->update($data);

        return response()->json(['success' => true, 'message' => "تم التحديث في البيانات"]);



    }

    public function  destroy($id){
        $review=Slider::findorfail($id);
        $review->delete();
        return response()->json(['success' => true, 'message' => "تم الحذف بنجاح"]);


    }
}
