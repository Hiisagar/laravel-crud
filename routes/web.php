<?php

<<<<<<< HEAD
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'show_user'])->name('home'); // fetch all data
Route::get('/single-user/{id}', [UserController::class,'single_user_data'])->name('single.user'); // fetch single data
Route::post('/edit-user',[UserController::class,'add_data'])->name('edit.user'); // insert data
Route::post('/update-user/{id}',[UserController::class,'update_data'])->name('user.update'); // update data
Route::get('/delete-user/{id}',[UserController::class,'delete_data'])->name('dlt.user'); // delete data

Route::view('add-user','/add-user')->name('form'); // for form
Route::get('/update-user-information/{id}',[UserController::class,'user_info_fetch'])->name('user.info.update');

=======
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> a41c3e927a342b9e18c9a38baf3f01295260782d
