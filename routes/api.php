<?php

use App\Http\Controllers\API\FieldController;
use App\Http\Controllers\API\QuestionController;
use App\Http\Controllers\API\RegisterController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::controller(RegisterController::class)->group(function(){
    Route::post('register','register');
    Route::post('login','login');
});

Route::middleware('auth:sanctum')->group(function(){
    Route::post('fields/create',[FieldController::class,'store']);
    Route::get('fields/{id}',[FieldController::class,'show']);
    Route::put('fields/{id}',[FieldController::class,'update']);
    Route::delete('fields/{id}',[FieldController::class,'destroy']);
    Route::get('fields/index',[FieldController::class,'index']);


    Route::get('questions',[QuestionController::class,'index']);
});