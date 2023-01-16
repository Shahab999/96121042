<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;
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
Route::get('deletetool/{id}', [ToolController::class, 'destroy'])->name('deletetool');
