<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\CustomAuthController;
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
Route::get('tools', [ToolController::class, 'index'])->name('Tools.index');
Route::get('inserttool', [ToolController::class, 'create'])->name('inserttool');
Route::post('storetool', [ToolController::class, 'store'])->name('storetool');
Route::get('updatetool/{id}', [ToolController::class, 'update'])->name('updatetool');
Route::put('edittool', [ToolController::class, 'edit'])->name('edittool');
Route::get('showtool/{id}', [ToolController::class, 'show'])->name('showtool');
Route::get('deletetool/{id}', [ToolController::class, 'destroy'])->name('deletetool');

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::get('/admin', function(){
    echo "Hello Admin";
  })->middleware('admin');
  
  Route::get('/customer', function(){
    echo "Hello Customer";
  })->middleware('customer');