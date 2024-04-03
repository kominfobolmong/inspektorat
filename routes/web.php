<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\GolonganController;
use App\Http\Controllers\Admin\JabatanController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SosmedController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware('visitor')->group(function () {
    Route::get('/', [PageController::class, 'index']);
    Route::get('/beranda', [PageController::class, 'beranda'])->name('beranda');
    Route::get('/news', [PageController::class, 'news'])->name('news');
    Route::get('/news/{news:slug}', [PageController::class, 'news_detail'])->name('news-detail');

    Route::prefix('profil')->group(function () {
        Route::get('/arti-lambang', [PageController::class, 'arti_lambang'])->name('arti_lambang');
        Route::get('/visi-misi', [PageController::class, 'visi_misi'])->name('visi_misi');
        Route::get('/tugas-dan-fungsi', [PageController::class, 'tugas_fungsi'])->name('tugas_fungsi');
        Route::get('/struktur-organisasi', [PageController::class, 'struktur_organisasi'])->name('struktur_organisasi');
        Route::get('/profil-pimpinan', [PageController::class, 'profil_pimpinan'])->name('profil_pimpinan');
        Route::get('/pegawai', [PageController::class, 'pegawai'])->name('pegawai');
    });

    Route::prefix('galeri')->group(function () {
        Route::get('/foto', [PageController::class, 'galeri_foto'])->name('galeri_foto');
        Route::get('/video', [PageController::class, 'galeri_video'])->name('galeri_video');
    });

    Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
});

Route::prefix('bolmongmaju/inspektorat')->group(function () {
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
        Route::resource('photo', PhotoController::class);
        Route::resource('video', VideoController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('faq', FaqController::class);
        Route::resource('jabatan', JabatanController::class);
        Route::resource('golongan', GolonganController::class);
        Route::resource('pegawai', PegawaiController::class);
    });
});
