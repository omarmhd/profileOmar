<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StaticController extends Controller
{
 public function edit(){
     $settings = DB::table("sys_statics")->pluck('value', 'key');
     return view("admin.statics.edit",compact("settings"));
 }
 public function update(Request $request,UploadService $uploadService){
     if($request->logo){

         $logo=$uploadService->upload($request->logo,'images');

         DB::table("sys_statics")->where("key","logo")->update(["value"=>$logo]);

     }
     if($request->cv){


         $cv=$uploadService->upload($request->cv,'images');

         DB::table("sys_statics")->where("key","cv")->update(["value"=>$cv]);

     }
     if($request->image1){

         $image1=$uploadService->upload($request->image1,'images');
         DB::table("sys_statics")->where("key","image1")->update(["value"=>$image1]);

     }
     if($request->image2){

         $image2=$uploadService->upload($request->image2,'images');
         DB::table("sys_statics")->where("key","image2")->update(["value"=>$image2]);
     }
     if($request->image3){

         $image3=$uploadService->upload($request->image3,'images');
         DB::table("sys_statics")->where("key","image3")->update(["value"=>$image3]);
     }
     if($request->image4){

         $image4=$uploadService->upload($request->image4,'images');
         DB::table("sys_statics")->where("key","image4")->update(["value"=>$image4]);
     }
     if($request->image5){

         $image5=$uploadService->upload($request->image5,'images');
         DB::table("sys_statics")->where("key","image5")->update(["value"=>$image5]);
     }

    /**/
     DB::table("sys_statics")->where("key","facebook")->update(["value"=>$request->facebook]);
     DB::table("sys_statics")->where("key","tweiter")->update(["value"=>$request->twiter]);
     DB::table("sys_statics")->where("key","snap")->update(["value"=>$request->snap]);
     DB::table("sys_statics")->where("key","youtube")->update(["value"=>$request->youtube]);
     DB::table("sys_statics")->where("key","whatsapp")->update(["value"=>$request->whatsapp]);
    /**/
     DB::table("sys_statics")->where("key","about_us")->update(["value"=>$request->about_us]);
    /**/
     DB::table("sys_statics")->where("key","title")->update(["value"=>$request->title]);
     return response()->json(['success' => true, 'message' => "تم التحديث إعدادات الموقع"]);

 }

 public function editUser(){

     $user=User::find(1);
     return view('admin.statics.editUser',compact('user'));

 }
 public function updateUser(Request $request){
     $validator = Validator::make($request->all(), [
         'name' => "required",
         'email'=>'required|email',
         'password'=>"required"

     ]);


     if ($validator->fails()) {
         return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
     }


    User::find(1)->Update([
         'name' => $request->name,
         'email' => $request->email,
         'password' => Hash::make($request->password),
     ]);
     return response()->json(['success' => true, 'message' => "تم التحديث إعدادات الموقع"]);




 }
}
