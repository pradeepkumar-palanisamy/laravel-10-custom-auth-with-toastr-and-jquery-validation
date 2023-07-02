<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication_Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//get Routes for authentication

Route::get('registration',[Authentication_Controller::class, 'registration'])->middleware('UserLoggedIN');
Route::get('login',[Authentication_Controller::class, 'login'])->middleware('UserLoggedIN');
Route::get('dashboard',[Authentication_Controller::class, 'dashboard'])->middleware('UserNotLoggedIn');
Route::get('logout',[Authentication_Controller::class, 'logout']);

//Post Routes for authentication

Route::post('post_reg',[Authentication_Controller::class, 'post_reg'])->name('post_reg');
Route::post('post_login',[Authentication_Controller::class, 'post_login'])->name('post_login');
