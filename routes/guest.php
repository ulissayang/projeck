<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\VisiMisiController as GuestVisiMisiController;
use App\Http\Controllers\Guest\GuruController as GuestGuruController;
use App\Http\Controllers\Guest\FasilitasController as GuestFasilitasController;
use App\Http\Controllers\Guest\KegiatanController as GuestKegiatanController;
use App\Http\Controllers\Guest\AgendaController as GuestAgendaController;
use App\Http\Controllers\Guest\PengumumanController as GuestPengumumanController;
use App\Http\Controllers\Guest\GaleryController as GuestGaleryController;
use App\Http\Controllers\Guest\PrestasiController as GuestPrestasiController;
use App\Http\Controllers\Guest\KontakController as GuestKontakController;

Route::get('/visi-misi-sekolah', [GuestVisiMisiController::class, 'index'])->name('visi-misi-sekolah');
Route::get('/data-guru', [GuestGuruController::class, 'index'])->name('guru');

Route::get('/fasilitas-sekolah', [GuestFasilitasController::class, 'index'])->name('fasilitas-sekolah');
Route::get('/fasilitas-sekolah/{slug}', [GuestFasilitasController::class, 'show'])->name('fasilitas-sekolah-show');

Route::get('/kegiatan-sekolah', [GuestKegiatanController::class, 'index'])->name('kegiatan-sekolah');
Route::get('/kegiatan-sekolah/{slug}', [GuestKegiatanController::class, 'show'])->name('kegiatan-sekolah-show');

Route::get('/agenda-sekolah', [GuestAgendaController::class, 'index'])->name('agenda-sekolah');

Route::get('/pengumuman-sekolah', [GuestPengumumanController::class, 'index'])->name('pengumuman-sekolah');

Route::get('/prestasi-ak', [GuestPrestasiController::class, 'index'])->name('prestasi-ak');
Route::get('/prestasi-ak/{slug}', [GuestPrestasiController::class, 'show'])->name('prestasi-ak-show');

Route::get('/galery-foto-sekolah', [GuestGaleryController::class, 'foto'])->name('galery-foto-sekolah');

Route::get('/galery-foto-sekolah/{slug}', [GuestGaleryController::class, 'show'])->name('galery-foto-show');
Route::get('/galery-video-sekolah', [GuestGaleryController::class, 'video'])->name('galery-video-sekolah');

Route::get('/kontak-sekolah', [GuestKontakController::class, 'index'])->name('kontak-sekolah');

// Route::get('/home', function () {
//   return view('layouts.guest.home');
// })->name('home');

// Route::get('/kegiatan', Controllers\Guest\Kegiatan::class, 'kegiatan')->name('kegiatan');
// Route::get('/visi-misi', Controllers\Guest\VisiMisi::class, 'visiMisi')->name('visi-misi');
// Route::get('/guru', Controllers\Guest\Guru::class, 'guru')->name('guru');
// Route::get('/fasilitas', Controllers\Guest\Fasilitas::class, 'fasilitas')->name('fasilitas');
// Route::get('/agenda', Controllers\Guest\Agenda::class, 'agenda')->name('agenda');
// Route::get('/pengumuman', Controllers\Guest\Pengumuman::class, 'pengumuman')->name('pengumuman');
// Route::get('/galery', Controllers\Guest\Galery::class, 'galery')->name('galery');
// Route::get('/kontak', Controllers\Guest\Kontak::class, 'kontak')->name('kontak');
