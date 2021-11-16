<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Admin\InstituteController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\ParentController;
use App\Http\Controllers\Admin\StudentController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Main Dashboard
//Route::get('/',[DashboardController::class,'index'])->name('dashboard');

//Supper Admin Institutes
Route::get('/institute',[DashboardController::class,'index'])->name('institute');
Route::get('/create_institute',[DashboardController::class,'create'])->name('create_institute');

//Supper Admin Institutes
Route::resource('institutes',InstituteController::class);

//Admin Teachers
Route::resource('teachers',TeacherController::class);


//Admin Classes
Route::resource('classes',ClassController::class);


//Admin Subjects
Route::resource('subjects',SubjectController::class);

//Admin Sections
Route::resource('sections',SectionController::class);

//Admin Parents
Route::resource('parents',ParentController::class);

//Admin Students
Route::resource('students',StudentController::class);