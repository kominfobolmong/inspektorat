<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\NewsController;
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


Route::get('/', [PageController::class, 'index']);

Route::prefix('profil')->group(function () {
    Route::get('/profil-pimpinan', [PageController::class, 'pimpinan'])->name('pimpinan');
    Route::get('/visimisi', [PageController::class, 'visimisi'])->name('visimisi');
    Route::get('/struktur-organisasi', [PageController::class, 'struktur_organisasi'])->name('struktur');
});

Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');

Route::prefix('informasi')->group(function () {
    Route::get('/berita', [PageController::class, 'berita'])->name('berita');
    Route::get('/berita/{news:slug}', [PageController::class, 'berita_detail'])->name('berita-detail');
    Route::get('/berita/categories/{slug}', [PageController::class, 'kategori'])->name('cari-kategori');
    Route::get('/berita/tag/{tag:slug}', [PageController::class, 'tag'])->name('cari-tag');
    Route::get('/kegiatan', [PageController::class, 'kegiatan'])->name('kegiatan');
    Route::get('/informasi-berkala', [PageController::class, 'informasi_berkala'])->name('informasi-berkala');
    Route::get('/informasi-serta-merta', [PageController::class, 'informasi_serta_merta'])->name('informasi-serta-merta');
    Route::get('/informasi-setiap-saat', [PageController::class, 'informasi_setiap_saat'])->name('informasi-setiap-saat');
    Route::get('/informasi-dikecualikan', [PageController::class, 'informasi_dikecualikan'])->name('informasi-dikecualikan');
});

Route::prefix('limi')->group(function () {
    Route::get('/', [PageController::class, 'limi'])->name('limi');
    Route::get('/{news:slug}', [PageController::class, 'limi_detail'])->name('limi-detail');
    Route::get('/klinik-agribisnis-perkebunan', [PageController::class, 'klinik_ap'])->name('klinik_ap');
    Route::get('/budidaya', [PageController::class, 'budidaya'])->name('budidaya');
    Route::get('/sarana-prasarana', [PageController::class, 'sarana_prasarana'])->name('sarana_prasarana');
});

// Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');


// Route::get('/berita-cari', [App\Http\Controllers\Pagecontroller::class, 'hascarberita']);

// Route::get('/download', [App\Http\Controllers\PageController::class, 'download']);
// Route::get('/getdownload/{downloads:id}', [App\Http\Controllers\PageController::class, 'getDownload'])->name('getdownload');

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

        Route::resource('klinik_ap', NewsController::class);
        Route::resource('budidaya', NewsController::class);
        Route::resource('sarana_prasarana', NewsController::class);
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
    });
});
