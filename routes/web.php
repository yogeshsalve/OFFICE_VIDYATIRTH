<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\registeruser;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');

Auth::routes();

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/student', [LoginController::class,'showStudentLoginForm']);
Route::get('/login/teacher', [LoginController::class,'showTeacherLoginForm']);
// Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
// Route::get('/register/student', [RegisterController::class,'showStudentRegisterForm']);
// Route::get('/register/teacher', [RegisterController::class,'showTeacherRegisterForm']);

Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/login/student', [LoginController::class,'studentLogin']);
Route::post('/login/teacher', [LoginController::class,'teacherLogin']);
// Route::post('/register/admin', [RegisterController::class,'createAdmin']);
// Route::post('/register/student', [RegisterController::class,'createStudent']);
// Route::post('/register/teacher', [RegisterController::class,'createTeacher']);



Route::group(['middleware' => 'auth:student'], function () {
    Route::view('/student', 'student');
});

Route::group(['middleware' => 'auth:teacher'], function () {
    Route::view('/teacher', 'teacher');
    Route::get('/teacher', [TeacherController::class,'DisplayTaskData']);
});

Route::group(['middleware' => 'auth:admin'], function () {
    
    Route::view('/admin', 'admin');    
    Route::view('/registerteacher', 'registerteacher');
    Route::view('/teachertasks', 'allotedtasktoteacher');
    Route::post('/registerteacher', [registeruser::class,'RegisterTeacher']);
    Route::get('/teachertasks', [AdminController::class,'DisplayTeachersList']);
    Route::post('/teachertasks', [AdminController::class,'AddTeacherTask']);

    // Route::get('/teachertasks', [AdminController::class,'index']);

    
       

});

Route::get('/logout', [LoginController::class,'logout']);

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
