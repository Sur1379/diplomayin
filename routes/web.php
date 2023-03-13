<?php
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\AccordionController;
use App\Http\Controllers\Members;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get("qnnutyunner", function (){
    return view("qnnutyunner");
});

Route::get("hetadardz-kap", function (){
    return view("hetadardz-kap");
});

Route::get("usanoxner", [Members::class, 'members']);
Route::get("profile/{id}", [Members::class, 'profile']);
Route::get("qnnutyunner", [ExamsController::class, 'qnnutyunner']);
Route::get("design", [SiteController::class, 'design']);
Route::get("inchpes-dimel", [SiteController::class, 'inchpesDimel']);
Route::get("history", [SiteController::class, 'history']);
Route::get("dimord", [SiteController::class, 'dimord']);
Route::get("architecture", [SiteController::class, 'architecture']);
Route::get("shinararutyun", [SiteController::class, 'shinararutyun']);
Route::get("qaxaqayin", [SiteController::class, 'qaxaqayin']);
Route::get("/", [SiteController::class, 'facultet']);
