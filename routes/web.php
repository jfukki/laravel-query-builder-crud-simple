<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/',[StudentController::class, 'index']);
Route::post('/',[StudentController::class, 'create'])->name('create');

Route::get('/view',[StudentController::class, 'view'])->name('view');

Route::get('/edit/{id}',[StudentController::class, 'edit'])->name('edit');
Route::post('/update/{id}',[StudentController::class, 'update'])->name('update');
 
Route::get('/detail/{id}',[StudentController::class, 'detail'])->name('detail');


Route::get('/delete/{id}',[StudentController::class, 'delete'])->name('delete');
    

