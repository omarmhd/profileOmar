<?php

use App\Models\Survey;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/







route::group(['prefix'=>'admin','as'=>'admin.' ],function (){

    Route::get("/" ,function (){

                $contacts=\App\Models\Contact::count();
                $reviews=\App\Models\Slider::where("type","reviews")->count();

                return view("admin.dashboard",compact("contacts",'reviews'));
    })->name('dashboard');

    Route::get("/editUser",[\App\Http\Controllers\Admin\StaticController::class,"editUser"])->name("editUser");
    Route::put("/updateUser",[\App\Http\Controllers\Admin\StaticController::class,"updateUser"])->name("updateUser");
    Route::resource("/services",\App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('/typeService',\App\Http\Controllers\Admin\TypeServiceController::class);
    Route::resource("/experts",\App\Http\Controllers\Admin\ExpertController::class);
    Route::resource("/achievements",\App\Http\Controllers\Admin\AchievementController::class);
    Route::resource("/contact",\App\Http\Controllers\Admin\ContactController::class);
    /*reviews*/
    Route::get("/reviews",[\App\Http\Controllers\Admin\ReviewController::class,'index'])->name('reviews.index');
    Route::get("/reviews/create",[\App\Http\Controllers\Admin\ReviewController::class,'create'])->name('reviews.create');
    Route::post("/reviews",[\App\Http\Controllers\Admin\ReviewController::class,'store'])->name('reviews.store');
    Route::get("/reviews/{id}/edit",[\App\Http\Controllers\Admin\ReviewController::class,'edit'])->name('reviews.edit');
    Route::put("/reviews/{id}",[\App\Http\Controllers\Admin\ReviewController::class,'update'])->name('reviews.update');
    Route::delete("/reviews/{id}",[\App\Http\Controllers\Admin\ReviewController::class,'destroy'])->name('reviews.destroy');
    /*partners*/
    Route::get("/partners",[\App\Http\Controllers\Admin\PartnerController::class,'index'])->name('partners.index');
    Route::get("/partners/create",[\App\Http\Controllers\Admin\PartnerController::class,'create'])->name('partners.create');
    Route::post("/partners",[\App\Http\Controllers\Admin\PartnerController::class,'store'])->name('partners.store');
    Route::get("/partners/{id}/edit",[\App\Http\Controllers\Admin\PartnerController::class,'edit'])->name('partners.edit');
    Route::put("/partners/{id}",[\App\Http\Controllers\Admin\PartnerController::class,'update'])->name('partners.update');
    Route::delete("/partners/{id}",[\App\Http\Controllers\Admin\PartnerController::class,'destroy'])->name('partners.destroy');
    /*companies*/

    Route::get("/companies",[\App\Http\Controllers\Admin\CompanyController::class,'index'])->name('companies.index');
    Route::get("/companies/create",[\App\Http\Controllers\Admin\CompanyController::class,'create'])->name('companies.create');
    Route::post("/companies",[\App\Http\Controllers\Admin\CompanyController::class,'store'])->name('companies.store');
    Route::get("/companies/{id}/edit",[\App\Http\Controllers\Admin\CompanyController::class,'edit'])->name('companies.edit');
    Route::put("/companies/{id}",[\App\Http\Controllers\Admin\CompanyController::class,'update'])->name('companies.update');
    Route::delete("/companies/{id}",[\App\Http\Controllers\Admin\CompanyController::class,'destroy'])->name('companies.destroy');

    /*STATICS*/
    Route::get("/statics",[\App\Http\Controllers\Admin\StaticController::class,'edit'])->name('statics.edit');
    Route::put("/statics/update",[\App\Http\Controllers\Admin\StaticController::class,'update'])->name('statics.update');


});


route::group(['as'=>'front.'],function(){

    Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name("index");

   Route::get('services',[\App\Http\Controllers\HomeController::class,'services'])->name("services");
   Route::get('service/{id}',[\App\Http\Controllers\HomeController::class,'service'])->name("service");

   Route::get('experts',[\App\Http\Controllers\HomeController::class,'experts'])->name("experts");
   Route::get('expert/{id}',[\App\Http\Controllers\HomeController::class,'expert'])->name("expert");

   Route::get("/contact",[\App\Http\Controllers\HomeController::class,'contact'])->name("contact");
   Route::post("/contact",[\App\Http\Controllers\HomeController::class,'contactStore'])->name("contact.store");

   Route::get("achievements",[\App\Http\Controllers\HomeController::class,'achievements'])->name("achievements");
   Route::get("achievement/{id}",[\App\Http\Controllers\HomeController::class,'achievement'])->name("achievement");


});



Auth::routes();

