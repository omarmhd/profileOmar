<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Models\TypeService;
use App\Services\UploadService ;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{

    public function index(Request $request)
    {

        $data = Service::latest()->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn("type",function ($data){
                    return $data->type->name;
                })

                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('admin.services.edit', [$data]) . '" class="edit btn btn-icon btn-light-primary me-2 mb-2 py-3"><i class="fa fa-pen"></i></a><a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-icon btn-light-danger me-2 mb-2 py-3"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['type','action'])->make(true);
        }
        return view('admin.services.index');

    }

    public function create()
    {

        $types = TypeService::all();
        $service =new Service();
        $method="post";
        return view("admin.services.create", compact("types","service"));

    }

    public function store(Request $request,UploadService $UploadService)
    {
        $validator = Validator::make($request->all(), [
            'name' => "required",
            'type_id' => "exists:type_services,id",
            'description' => "required",
            'slug'=>"nullable",
            'excerpt'=>"required",
            'image' => 'required|mimes:png,jpeg|max:1000'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        $data=$request->except("_token","image","slug");

        if($request->image){

            $data['image']=$UploadService->upload($request->image,'images');
        }
        $data['slug']= Str::slug($request->slug||$request->name, '-');
        Service::create($data);

        return response()->json(['success' => true, 'message' => "تم إضافة الخدمة"]);


    }
    public function edit(Service $service)
    {


        $types=TypeService::all();
        $method="update";

        return view("admin.services.edit", compact("service","types","method"));

    }
    public function update(Request $request,Service $service,UploadService $UploadService)
    {

        $validator = Validator::make($request->all(), [
            'name' => "required",
            'type_id' => "exists:type_services,id",
            'description' => "required",
            'slug'=>"nullable",
            'excerpt'=>"required",
            'image' => 'required|mimes:png,jpeg|max:1000'
        ]);
        $data=$request->except("_token","image","slug");
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        if($request->image){

            $data['image']=$UploadService->upload($request->image,'images');
        }

        $data['slug']= Str::slug($request->slug||$request->name, '-');
        $service->update($data);

        return response()->json(['success' => true, 'message' => "تم التحديث في البيانات"]);



    }

    public function  destroy(Service $service){
        $service->delete();
        return response()->json(['success' => true, 'message' => "تم الحذف بنجاح"]);


    }
}
