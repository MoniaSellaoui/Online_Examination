<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});
Route::get('/',[LoginController::class,'login']);
Route::post('/adminacces',[LoginController::class,'adminacces']);
Route::get('/adminsignout',[LoginController::class,'signout']);

//Admin Routes
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
Route::get('/admin/users',[AdminController::class,'users']);
Route::get('/admin/ranking',[AdminController::class,'ranking']);
Route::get('/admin/feedback',[AdminController::class,'feedback']);
Route::get('/admin/viewfeedback',[AdminController::class,'viewfeedback']);
Route::get('/admin/quizdetails',[AdminController::class,'quizdetails']);
Route::get('/admin/questionsdetails',[AdminController::class,'questionsdetails']);
Route::post('/admin/savequestion',[AdminController::class,'savequestion']);
Route::get('/admin/removequiz',[AdminController::class,'removequiz']);
Route::post('/admin/savequiz',[AdminController::class,'savequiz']);
Route::get('/admin/respond/{topic}',[AdminController::class,'respondquestion']);
Route::get('/admin/assessements',[AdminController::class,'assessements']);
Route::post('/admin/saveanswer',[AdminController::class,'saveanswer']);
Route::get('/admin/respond1',[AdminController::class,'respondquestion1']);
Route::get('/admin/results',[AdminController::class,'result']);


//Admin Routes
Route::get('/user/home',[UserController::class,'home']);
Route::get('/user/history',[UserController::class,'history']);
Route::get('/user/ranking',[UserController::class,'ranking']);
Route::get('/user/exam',[UserController::class,'exam']);