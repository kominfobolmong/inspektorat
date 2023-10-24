<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\KomoditasController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PenyakitController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProfpegController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SosmedController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware('visitor')->group(function() {
    Route::get('/', [PageController::class, 'index']);
    Route::get('/profil-dinas', [PageController::class, 'profil_dinas'])->name('profil_dinas');
    Route::prefix('klinik')->group(function () {
        Route::get('/komoditas', [PageController::class, 'komoditas'])->name('komoditas');
        Route::get('/komoditas/{komoditas:slug}', [PageController::class, 'komoditas_detail'])->name('komoditas-detail');
        Route::get('/artikel-perkebunan', [PageController::class, 'artikel'])->name('artikel');
        Route::get('/artikel-perkebunan/{news:slug}', [PageController::class, 'artikel_detail'])->name('artikel-detail');
        Route::get('/konsultasi-online', [PageController::class, 'konsultasi'])->name('konsultasi');
    });
    Route::get('/dokumentasi-kegiatan', [PageController::class, 'dokumentasi_kegiatan'])->name('dokumentasi-kegiatan');
    Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
});

Route::prefix('bolmongmaju/disbun')->group(function () {
    Auth::routes([
        'register' => false,
        'reset'    => false,  // for resetting passwords
        'confirm'  => false, // for additional password confirmations
        'verify'   => false, // for email verification
    ]);
});

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
        Route::resource('news', NewsController::class);
        Route::resource('permission', PermissionController::class);
        Route::resource('role', RoleController::class);
        Route::resource('user', UserController::class);
        Route::resource('profile', ProfileController::class);
        Route::resource('contact', ContactController::class);
        Route::resource('link', LinkController::class);
        Route::resource('sosmed', SosmedController::class);
        Route::resource('tag', TagController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('download', DownloadController::class);
        Route::resource('profpeg', ProfpegController::class);
        Route::resource('service', ServiceController::class);
        Route::resource('photo', PhotoController::class);
        Route::resource('video', VideoController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('faq', FaqController::class);
        Route::resource('penyakit', PenyakitController::class);
        Route::resource('komoditas', KomoditasController::class);
    });
});


// Route::prefix('informasi')->group(function () {
//     Route::get('/berita', [PageController::class, 'berita'])->name('berita');
//     Route::get('/berita/{news:slug}', [PageController::class, 'berita_detail'])->name('berita-detail');
//     Route::get('/berita/categories/{slug}', [PageController::class, 'kategori'])->name('cari-kategori');
//     Route::get('/berita/tag/{tag:slug}', [PageController::class, 'tag'])->name('cari-tag');
// });

// Route::get('/berita-cari', [App\Http\Controllers\Pagecontroller::class, 'hascarberita']);

// Route::get('/download', [App\Http\Controllers\PageController::class, 'download']);
// Route::get('/getdownload/{downloads:id}', [App\Http\Controllers\PageController::class, 'getDownload'])->name('getdownload');

