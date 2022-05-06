<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Admin\InstituteController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\FatherController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\Admin\FeeTypeController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Online_testing\CandidatesController;
use App\Http\Controllers\Admin\AttendenceController;
use App\Http\Controllers\Pseb\InterneesController;

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

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('permissions', PermissionsController::class);
});

//Main Dashboard
//Route::get('/',[DashboardController::class,'index'])->name('dashboard');

//Supper Admin Institutes
Route::get('/institute',[DashboardController::class,'index'])->name('institute');
Route::get('/create_institute',[DashboardController::class,'create'])->name('create_institute');

//Supper Admin Institutes
Route::resource('institutes',InstituteController::class);
Auth::routes();

//Admin Teachers
Route::resource('teachers',TeacherController::class);


//Admin Classes
Route::resource('classes',ClassController::class);


//Admin Subjects
Route::resource('subjects',SubjectController::class);

//Admin Sections
Route::resource('sections',SectionController::class);

//Admin Parents
Route::resource('fathers',FatherController::class);

//Admin Students
Route::resource('students',StudentController::class);

//Admin Account
Route::resource('fee_type',FeeTypeController::class);
Route::resource('invoice',InvoiceController::class);
Route::get('class_ajax/{id}',[InvoiceController::class,'class_ajax'])->name('class_ajax');
Route::get('session_ajax/{id}',[InvoiceController::class,'session_ajax'])->name('session_ajax');

Route::post('invoice_ajax/{id}',[InvoiceController::class,'invoice_ajax'])->name('invoice_ajax');


//Online Testing
Route::resource('candidates',CandidatesController::class);

//PSEB 
Route::resource('internees',InterneesController::class);

//Attendence 
Route::resource('attendence',AttendenceController::class);
Route::post('record',[AttendenceController::class, 'record'])->name('record');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/class_ajax1',[AttendenceController::class, 'class_ajax1']);

