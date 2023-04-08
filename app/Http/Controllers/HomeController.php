<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Contact;
use App\Models\Expert;
use App\Models\Service;
use App\Models\Slider;
use App\Models\TypeService;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function setLayoutData()
    {
//        DB::table("sys_statics")->where("key","tweiter")->update(["value"=>$request->twiter]);
//        DB::table("sys_statics")->where("key","snap")->update(["value"=>$request->snap]);
//        DB::table("sys_statics")->where("key","youtube")->update(["value"=>$request->youtube]);
//        DB::table("sys_statics")->where("key","whatsapp")->update(["value"=>$request->whatsapp]);
        $layoutData = [
            'title' => 'My Website',
            'description' => 'Welcome to my website!',
        ];
        View::share('layoutData', $layoutData);
    }
    public function index()
    {

        $partners=Slider::where("type","partners")->get();
        $reviews=Slider::where("type","reviews")->get();
        $about_us=DB::table("sys_statics")->where("key","about_us")->value("value");
        $hero_img =DB::table("sys_statics")->where("key","hero_img")->value("value");
        $companies=Slider::where("type","companies")->get();

        return view('index',compact("partners","reviews","about_us","companies",'hero_img'));

    }

    public  function services(){
        $types=TypeService::all();
        return view("services",compact('types'));
    }
    public function service($id){
        $service=Service::findorfail($id);

        return view("service",compact('service'));
    }
    public function experts(){

        $experts=Expert::paginate(1);

        return view("experts",compact('experts'));

    }

    public function expert($id){

        $expert=Expert::find($id);

        return view("expert",compact('expert'));

    }

    public function achievement($id){
        $achievement=Achievement::find($id);
        return view("achievement",compact('achievement'));



    }
    public function achievements(){
        $achievements=Achievement::paginate(1);;
        return view("achievements",compact('achievements'));



    }


    public function contact(){
        return view("contact-us");
    }

    public function contactStore(Request $request){
        $data=$request->validate([
            'name' => "required",
            'phone'=>"required|numeric",
            'email' => "required|email",
            'address' => "required",
            'message'=>"required",

        ]);
        Contact::create($data);

        return back()->with("success",'تم ارسال رسالتك بنجاح ,سيتم الرد في أقرب وقت');


    }
}
