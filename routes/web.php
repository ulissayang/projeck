<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', Controllers\Guest\HomeController::class)->name('home');

// Route::get('/dashboard', function () {
//     return view('pages-auth.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Controllers\Back\DashboardController::class)->middleware('verified')->name('dashboard');

    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/kegiatan', Controllers\Back\KegiatanController::class)->except(['show', 'edit', 'destroy', 'create']);
    Route::delete('/kegiatan/{kegiatan:slug}', [Controllers\Back\KegiatanController::class, 'destroy'])->name('kegiatan.destroy');
    Route::get('/kegiatan/{kegiatan:slug}', [Controllers\Back\KegiatanController::class, 'show'])->name('kegiatan.show');
    Route::get('/kegiatan/{kegiatan:slug}/edit', [Controllers\Back\KegiatanController::class, 'edit'])->name('kegiatan.edit');
    Route::post('/kegiatan/bulk-delete',  [Controllers\Back\KegiatanController::class, 'bulkDelete'])->name('kegiatan.bulk_delete');

    Route::resource('/agenda', Controllers\Back\AgendaController::class)->except(['show', 'edit', 'destroy', 'create']);
    Route::delete('/agenda/{agenda:slug}', [Controllers\Back\AgendaController::class, 'destroy'])->name('agenda.destroy');
    Route::get('/agenda/{agenda:slug}', [Controllers\Back\AgendaController::class, 'show'])->name('agenda.show');
    Route::get('/agenda/{agenda:slug}/edit', [Controllers\Back\AgendaController::class, 'edit'])->name('agenda.edit');
    Route::post('/agenda/bulk-delete',  [Controllers\Back\AgendaController::class, 'bulkDelete'])->name('agenda.bulk_delete');

    Route::resource('/pengumuman', Controllers\Back\PengumumanController::class)->except(['show', 'edit']);
    Route::get('/pengumuman/{pengumuman:slug}', [Controllers\Back\PengumumanController::class, 'show'])->name('pengumuman.show');
    Route::get('/pengumuman/{pengumuman:slug}/edit', [Controllers\Back\PengumumanController::class, 'edit'])->name('pengumuman.edit');

    Route::resource('/guru', Controllers\Back\GuruController::class)->except(['show', 'edit']);
    Route::get('/guru/{guru:slug}', [Controllers\Back\GuruController::class, 'show'])->name('guru.show');
    Route::get('/guru/{guru:slug}/edit', [Controllers\Back\GuruController::class, 'edit'])->name('guru.edit');

    Route::resource('/visi-misi', Controllers\Back\VisiMisiController::class)->except(['edit', 'show']);
    Route::get('/visi-misi/{visi_misi:id}/edit', [Controllers\Back\VisiMisiController::class, 'edit'])->name('visi-misi.edit');

    Route::resource('/fasilitas', Controllers\Back\FasilitasController::class)->except(['show', 'edit']);
    Route::get('/fasilitas/{fasilitas:slug}', [Controllers\Back\FasilitasController::class, 'show'])->name('fasilitas.show');
    Route::get('/fasilitas/{fasilitas:slug}/edit', [Controllers\Back\FasilitasController::class, 'edit'])->name('fasilitas.edit');

    Route::resource('/prestasi', Controllers\Back\PrestasiController::class)->except(['show', 'edit']);
    Route::get('/prestasi/{prestasi:slug}', [Controllers\Back\PrestasiController::class, 'show'])->name('prestasi.show');
    Route::get('/prestasi/{prestasi:slug}/edit', [Controllers\Back\PrestasiController::class, 'edit'])->name('prestasi.edit');

    Route::resource('/galery-foto', Controllers\Back\GaleryFotoController::class)->except(['show', 'edit']);
    Route::get('/galery-foto/{galery_foto:slug}', [Controllers\Back\GaleryFotoController::class, 'show'])->name('galery-foto.show');
    Route::get('/galery-foto/{galery_foto:slug}/edit', [Controllers\Back\GaleryFotoController::class, 'edit'])->name('galery-foto.edit');

    Route::resource('/galery-video', Controllers\Back\GaleryVideoController::class)->except(['show', 'edit']);
    Route::get('/galery-video/{galery_video:slug}', [Controllers\Back\GaleryVideoController::class, 'show'])->name('galery-video.show');
    Route::get('/galery-video/{galery_video:slug}/edit', [Controllers\Back\GaleryVideoController::class, 'edit'])->name('galery-video.edit');

    Route::resource('/kontak', Controllers\Back\KontakController::class);
});

require __DIR__ . '/auth.php';
// require __DIR__ . '/guest.php';
