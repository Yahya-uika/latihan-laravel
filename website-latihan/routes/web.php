<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::view('/', 'home')->name('home');
Route::view('/tentang', 'tentang')->name('about');
Route::view('/program', 'program')->name('programs');
Route::view('/berita', 'berita')->name('news');
Route::view('/kontak', 'kontak')->name('contact');

Route::post('/kontak', function (Request $request) {
	$request->validate([
		'name' => ['required', 'string', 'max:120'],
		'email' => ['required', 'email', 'max:255'],
		'subject' => ['required', 'string', 'max:160'],
		'message' => ['required', 'string', 'min:10', 'max:3000'],
	]);

	return redirect()->route('contact')->with(
		'success',
		'Formulir berhasil divalidasi. Pengiriman email belum diaktifkan.'
	);
})->name('contact.send');
