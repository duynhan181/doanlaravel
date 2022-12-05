<?php

use App\Http\Controllers\Backend\ChangePasswordController;
use App\Http\Controllers\Backend\Field\FieldController;
use App\Http\Controllers\Backend\Player\PlayerController;
use App\Http\Controllers\Backend\Question\QuestionController;
use App\Http\Controllers\Backend\UserController;
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
    return view('Admin/login');
});

Auth::routes();

Route::get('/Admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout']);
Route::get('/Admin/login', [App\Http\Controllers\Auth\LoginController::class,'login'])->name('login');
Route::post('/Admin/login', [App\Http\Controllers\Auth\LoginController::class,'authenticate']);

Route::get('/Admin/register', [App\Http\Controllers\Auth\RegisterController::class,'register'])->name('register');
Route::post('/Admin/register', [App\Http\Controllers\Auth\RegisterController::class,'storeUser'])->name('register');

// User
Route::resource('users',UserController::class);
Route::post('users/{user}/change-password',[ChangePasswordController::class,'change_password'])->name('users.change.password');

//Player
Route::resource('players',PlayerController::class);

//Field
Route::resource('fields',FieldController::class);

//Questions
Route::resource('questions',QuestionController::class);

//PackageQuestion

Route::resource('packageQuestions',PackageQuestion::class);
