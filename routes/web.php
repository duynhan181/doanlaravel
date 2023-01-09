<?php

use App\Http\Controllers\Backend\ChangePasswordController;
use App\Http\Controllers\Backend\Field\FieldController;
use App\Http\Controllers\Backend\Player\PlayerController;
use App\Http\Controllers\Backend\Question\QuestionController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Layout\LayoutQuestionController;
use App\Models\PackageQuestion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view(' Admin/login');
});

Auth::routes();


Route::prefix('Admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');


    // User
    Route::resource('users',UserController::class);
    Route::post('users/{user}/change-password',[ChangePasswordController::class,'change_password'])->name('users.change.password');

    //Player
    Route::resource('players',PlayerController::class);

    //Field
    Route::resource('fields',FieldController::class);
    Route::get('/fields/active/{field_id}',[FieldController::class,'active'])->name('active-field');
    Route::get('/fields/unactive/{field_id}',[FieldController::class,'unactive'])->name('unactive-field');

    //Questions
    Route::resource('questions',QuestionController::class);
    Route::get('/questions/active/{question_id}',[QuestionController::class,'active'])->name('active-question');
    Route::get('/questions/unactive/{question_id}',[QuestionController::class,'unactive'])->name('unactive-question');

    //PackageQuestion

    Route::resource('packageQuestions',PackageQuestion::class);

});

Route::get('/Admin/logout', [App\Http\Controllers\Auth\LoginController::class,'logout']);
Route::get('/Admin/login', [App\Http\Controllers\Auth\LoginController::class,'login'])->name('login');
Route::post('/Admin/login', [App\Http\Controllers\Auth\LoginController::class,'authenticate']);

Route::get('/Admin/register', [App\Http\Controllers\Auth\RegisterController::class,'register'])->name('register');
Route::post('/Admin/register', [App\Http\Controllers\Auth\RegisterController::class,'storeUser'])->name('register');



// Route::get('/Layout/index',function(){
//     return view('/Layout/index');
// }); 

Route::get('/Layout/index',[LayoutQuestionController::class,'index'])->name('Layout.index');