<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use App\Services\UploadService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class CompanyController extends Controller
{

    public function index(Request $request)
    {

        $data = Slider::where("type","companies")->latest()->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('admin.companies.edit', [$data]) . '" class="edit btn  btn-icon btn-light-primary me-2 mb-2 py-3"><i class="fa fa-pen"></i></a> <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-icon btn-light-danger me-2 mb-2 py-3"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])->make(true);
        }
        return view('admin.companies.index');

    }

    public function create()
    {
        $company  =new Slider();
        return view("admin.companies.create", compact("company"));

    }

    public function store(Request $request,UploadService $UploadService)
    {
        $validator = Validator::make($request->all(), [
            'title' => "required",
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
        $data['type']= "companies";
        Slider::create($data);

        return response()->json(['success' => true, 'message' => "تم إضافة شريك جديد"]);


    }
    public function edit($id){


        $company=Slider::findorfail($id);
        return view("admin.companies.edit", compact("company"));

    }
    public function update(Request $request,$id,UploadService $UploadService)
    {

        $validator = Validator::make($request->all(), [
            'title' => "required",

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

        $company=Slider::findorfail($id);

        $company->update($data);

        return response()->json(['success' => true, 'message' => "تم التحديث في البيانات"]);



    }

    public function  destroy($id){
        $company=Slider::findorfail($id);
        $company->delete();
        return response()->json(['success' => true, 'message' => "تم الحذف بنجاح"]);


    }
}
