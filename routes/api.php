<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get("/students",[StudentController::class,'show']);
Route::get("/students/{id}",[StudentController::class,"studentDetails"]);
Route::get("/getmail/{id}",[StudentController::class,"getMail"]);
Route::post("/store",[StudentController::class,"storeData"]);
Route::put("/update/{id}",[StudentController::class,"updateData"]);
Route::delete("/delete/{id}",[StudentController::class,"deleteData"]);
