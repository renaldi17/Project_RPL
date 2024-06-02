<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;

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
    return view('index');
})->name('home');

Route::get('/janjitemu', function () {
    return view('janjitemu');
});

Route::get('/myappointment', function () {
    return view('myappointment');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/bukudigital', function () {
    return view('bukudigital');
});


// AUTH SECTION
Route::get('/login', function () {
    return view('login');
})->name('viewLogin');

Route::get('/register', function () {
    return view('register');
})->name('viewRegister');;

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ADMIN PAGE
Route::get('/dashboard_admin', function () {
    return view('admin.dashboard_admin');
});

Route::get('/index_admin', function () {
    return view('admin.blog.index');
 })->name('adminPanel');

Route::get('/create_blog', function () {
   return view('admin.blog.create');
});

Route::get('/edit_blog', function () {
    return view('admin.blog.edit');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/diskusi', [ChatController::class, 'list_diskusi'])->name('diskusi');
    Route::post('/make_room', [ChatController::class, 'make_room'])->name('make_room');
    Route::get('/forum_diskusi/{diskusi_id}', [ ChatController::class, 'forum'] );
    
    Route::post('/broadcast', 'App\Http\Controllers\PusherController@broadcast');
    Route::post('/receive', 'App\Http\Controllers\PusherController@receive');
});

