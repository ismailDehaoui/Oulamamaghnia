<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


 Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class,'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    
    // Dashboard
    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);
    
    // Category
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function(){
        Route::get('/categorie','index');
        Route::get('/categorie/create','create');
        Route::post('/categorie','store');
        Route::get('/categorie/{cat}/edit','edit');
        Route::put('/categorie/{cat}', 'update');
    });
    // School
    Route::controller(App\Http\Controllers\Admin\SchoolController::class)->group(function(){
        Route::get('/school','index');
        Route::get('/school/create','create');
        Route::post('/school','store');
        Route::get('/school/{school}/edit','edit');
        Route::put('/school/{school}', 'update');
    });
    // Student
    Route::controller(App\Http\Controllers\Admin\StudentController::class)->group(function(){
        Route::get('/student','index');
        Route::get('/student/create','create');
        Route::post('/student','store');
        // Route::get('/student/{cat}/edit','edit');
        // Route::put('/student/{cat}', 'update');
        Route::get('/student/{student}/edit','edit')    ;
        Route::get('/student/{student}/profil','profil');
        Route::get('/invoice/{student}','viewInvoice');
        Route::get('/invoice/{student}/generate','generateInvoice');
        //Route::put('/student/{student}','update');
    });
    
});