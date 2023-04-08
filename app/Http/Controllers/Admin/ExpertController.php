<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expert;

use App\Services\UploadService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ExpertController extends Controller
{
    public function index(Request $request)
    {

        $data = \App\Models\Expert::latest()->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('admin.experts.edit', [$data]) . '" class="edit btn  btn-icon btn-light-primary me-2 mb-2 py-3"><i class="fa fa-pen"></i></a> <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-icon btn-light-danger me-2 mb-2 py-3"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])->make(true);
        }
        return view('admin.experts.index');

    }

    public function create()
    {

        $expert =new Expert();

        return view("admin.experts.create", compact("expert"));

    }

    public function store(Request $request,UploadService $UploadExpert)
    {
        $validator = Validator::make($request->all(), [
            'name' => "required",
            'job' => "required",
            'description' => "required",
            'excerpt'=>"required",
            'image' => 'required|mimes:png,jpeg|max:1000'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        $data=$request->except("_token","image","slug");

        if($request->image){

            $data['image']=$UploadExpert->upload($request->image,'images');
        }
        Expert::create($data);

        return response()->json(['success' => true, 'message' => "تم إضافة الخبير"]);


    }
    public function edit(Expert $expert)
    {

        return view("admin.experts.edit", compact("expert"));

    }
    public function update(Request $request,Expert $Expert,UploadService $UploadExpert)
    {

        $validator = Validator::make($request->all(), [
            'name' => "required",
            'job' => "required",
            'description' => "required",
            'excerpt'=>"required",
            'image' => 'sometimes|mimes:png,jpeg|max:1000'
        ]);
        $data=$request->except("_token","image");
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        if($request->image){

            $data['image']=$UploadExpert->upload($request->image,'images');
        }

        $data['slug']= Str::slug($request->slug||$request->name, '-');
        $Expert->update($data);

        return response()->json(['success' => true, 'message' => "تم التحديث في البيانات"]);



    }

    public function  destroy(Expert $Expert){
        $Expert->delete();
        return response()->json(['success' => true, 'message' => "تم الحذف بنجاح"]);


    }
}
