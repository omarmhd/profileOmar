<?php

namespace  App\Http\Controllers\Admin;;

use App\Http\Controllers\Controller;

use App\Models\TypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class TypeServiceController extends Controller
{
    public function index(Request  $request)
    {
        $data = TypeService::latest()->get();

        if ($request->ajax()) {

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('admin.typeService.edit', [$data]) . '" class="edit btn btn-primary btn-sm ">تعديل</a> <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-sm btn-danger">حذف</a>';
                    return $actionBtn;
                })->rawColumns(['action'])->make(true);
        }

        return view('admin.typeService.index');
    }

    public  function create(){

        return view("admin.typeService.create");
    }

    public function  store(Request  $request){

        $validator = Validator::make($request->all(), [
            'name' => "required",

        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $TypeService=TypeService::create(['name'=>$request->name]);
        if ($TypeService){
        return response()->json(['success' => true, 'message' => "تم الحفظ بنجاح"]);
        }else{
            return response()->json(['success' => false, 'message' => "خطأ في البيانات"]);
        }
    }

    public function edit(TypeService $typeService){


        return view("admin.typeService.edit",compact("typeService"));
    }

    public  function update(TypeService $typeService,Request  $request){
        $validator = Validator::make($request->all(), [
            'name' => "required",

        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
       $typeService=$typeService->update(['name'=>$request->name]);
       if ($typeService){
           return response()->json(['success' => true, 'message' => "تم الحفظ بنجاح"]);
       }
        return response()->json(['success' => false, 'message' => "خطأ في البيانات"]);
    }
    public  function destroy(TypeService $typeService){

        $typeService=$typeService->delete();

        if($typeService){
            return response()->json(['success' => true, 'message' => "تم   الحذف  بنجاح"]);
        }
        return response()->json(['success' => true, 'message' => "خطأ في عملية الحذف"]);

    }
}
