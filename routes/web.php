<?php

use App\Models\berita;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\ProfilSMA;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilSekolah;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BeritaPost;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [Beranda::class, 'index'])->name("beranda");

Route::get('/profilSekolah.index', [ProfilSekolah::class,'index'])->name("profilsekolah");

// Route::get('/profilSekolah.index', function () {
//     return view ('/profilSekolah.index', [
//         "title" => "profil"
//     ]);
// });


// Route::get('/berita.index', [BeritaPost::class,'index'])->name("berita");

Route::get('/berita.index', function(){
    return view('/berita.index',[
        'title' => 'berita',
        "active" => 'berita',
        'berita' => berita::all(),
    ]);
})->name("berita");

Route::get('/detail/{id}',[BeritaPost::class, 'show']) ->name("post");




// Route::get('/organisasi.index', function () {
//     return view ('/organisasi.index', [
//         "title" => "organisasi"
//     ]);
// });



Route::get('/kontak.index', function () {
    return view ('/kontak.index', [
        "title" => "kontak",
        "active" => 'kontak'
    ]);
})->name("kontak");

// Route::get('/login.index', function () {
//     return view ('/login.index', [
//         "title" => "kontak"
//     ]);
// });

Route::get('/login.index',[UserController::class,'index'])->name('login'); 
Route::post('/postlogin.index',[UserController::class,'postlogin'])->name('postlogin');
Route::get('/admin', [DashboardController::class,'index'])->middleware('auth');
Route::post('/logout',[UserController::class, 'logout']); 

Route::get('/admin', [DashboardController::class,'index'])->middleware('auth');
Route::resource('/admin/profil', ProfilSMA::class)->middleware('auth');
Route::post('/admin/profil/{id}', [ProfilSMA::class,'update'])->middleware('auth');

Route::resource('/admin/berita', BeritaController::class)->middleware('auth');
Route::post('/admin/berita/{id}', [BeritaController::class,'update'])->name('update')->middleware('auth');


Route::resource('/admin/categories', CategoryController::class)->except('show')->middleware('auth');