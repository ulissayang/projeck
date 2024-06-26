<?php

use Illuminate\Support\Facades\Route;

// Route::get('/home', function () {
//   return view('layouts.guest.home');
// })->name('home');

Route::get('/visi-misi', function () {
  return view('layouts.guest.visi-misi');
})->name('visi-misi');

Route::get('/data-guru', function () {
  return view('layouts.guest.data-guru');
})->name('data-guru');

Route::get('/fasilitas', function () {
  return view('layouts.guest.fasilitas');
})->name('fasilitas');

Route::get('/kegiatan', function () {
  return view('layouts.guest.kegiatan');
})->name('kegiatan');

Route::get('/agenda', function () {
  return view('layouts.guest.agenda');
})->name('agenda');

Route::get('/pengumuman', function () {
  return view('layouts.guest.pengumuman');
})->name('pengumuman');

Route::get('/galery', function () {
  return view('layouts.guest.galery');
})->name('galery');

Route::get('/kontak', function () {
  return view('layouts.guest.kontak');
})->name('kontak');
