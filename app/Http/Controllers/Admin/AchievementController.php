<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\Service;
use App\Models\TypeService;
use App\Services\UploadService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class AchievementController extends Controller
{
    public function index(Request $request)
    {

        $data = Achievement::latest()->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('admin.achievements.edit', [$data]) . '" class="edit btn  btn-icon btn-light-primary me-2 mb-2 py-3"><i class="fa fa-pen"></i></a> <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-icon btn-light-danger me-2 mb-2 py-3"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['type','action'])->make(true);
        }
        return view('admin.achievements.index');

    }

    public function create()
    {

        $achievement =new Achievement();
        return view("admin.achievements.create", compact("achievement"));

    }

    public function store(Request $request,UploadService $UploadService)
    {
        $validator = Validator::make($request->all(), [
            'name' => "required",
            'description' => "required",
            'date'=>"required|date",
            'excerpt'=>"required",
            'image' => 'required|mimes:png,jpeg|max:1000'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        $data=$request->except("_token","image");

        if($request->image){

            $data['image']=$UploadService->upload($request->image,'images');
        }

        Achievement::create($data);

        return response()->json(['success' => true, 'message' => "تم إضافة إنجاز"]);


    }
    public function edit(Achievement $achievement)
    {




        return view("admin.achievements.edit", compact("achievement"));

    }
    public function update(Request $request,Achievement $achievement,UploadService $UploadService)
    {

        $validator = Validator::make($request->all(), [
            'name' => "required",
            'type_id' => "exists:type_achievements,id",
            'description' => "required",
            'slug'=>"nullable",
            'excerpt'=>"required",
            'image' => 'required|mimes:png,jpeg|max:1000'
        ]);
        $data=$request->except("_token","image");
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        if($request->image){

            $data['image']=$UploadService->upload($request->image,'images');
        }


        $achievement->update($data);

        return response()->json(['success' => true, 'message' => "تم التحديث في البيانات"]);



    }

    public function  destroy(Achievement $achievement){
        $achievement->delete();
        return response()->json(['success' => true, 'message' => "تم الحذف بنجاح"]);


    }
}
