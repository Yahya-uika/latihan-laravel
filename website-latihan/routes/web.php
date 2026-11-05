<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $galleryDirectory = public_path('image/gallery');
    $imageExtensions = ['avif', 'gif', 'jpeg', 'jpg', 'png', 'webp'];
    $captionOverrides = [];
    $galleryFiles = File::isDirectory($galleryDirectory) ? File::files($galleryDirectory) : [];

    $galleryFiles = array_filter($galleryFiles, function (SplFileInfo $file) use ($imageExtensions): bool {
        return in_array(strtolower($file->getExtension()), $imageExtensions, true);
    });

    usort($galleryFiles, function (SplFileInfo $first, SplFileInfo $second): int {
        return strnatcasecmp($first->getFilename(), $second->getFilename());
    });

    $galleryImages = array_map(function (SplFileInfo $file, int $index) use ($captionOverrides): array {
        $filename = $file->getFilename();

        return [
            'src' => asset('image/gallery/'.rawurlencode($filename)),
            'caption' => $captionOverrides[$filename] ?? sprintf('Kenangan Al-Muntadhorun %02d', $index + 1),
        ];
    }, $galleryFiles, array_keys($galleryFiles));

    return view('home', compact('galleryImages'));
})->name('home');
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
