<?php

use Illuminate\Support\Facades\Route;

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
});

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

Route::get('/diskusi', function () {
    return view('diskusi');
});

Route::get('/forum_diskusi', function () {
    return view('forum_diskusi');
});

// AUTH SECTION
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// ADMIN PAGE
Route::get('/dashboard_admin', function () {
    return view('admin.dashboard_admin');
});

Route::get('/index_admin', function () {
    return view('admin.blog.index');
 });

Route::get('/create_blog', function () {
   return view('admin.blog.create');
});

Route::get('/edit_blog', function () {
    return view('admin.blog.edit');
 });
