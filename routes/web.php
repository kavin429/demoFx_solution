<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Static Landing Pages
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/platform', fn() => view('platform'))->name('platform');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/mutualfunds', fn() => view('mutualfunds'))->name('mutualfunds');


Route::view('/legal', 'legal')->name('legal');
Route::view('/risk-warning', 'risk-warning')->name('risk-warning');
Route::view('/risk-disclosure', 'risk-disclosure')->name('risk-disclosure');

Route::get('/trading/{slug}', [ProductController::class, 'show'])->name('products.show');

/*
|--------------------------------------------------------------------------
| App Download Routes
|--------------------------------------------------------------------------
*/

// ANDROID (direct .apk download)
Route::get('/download/android', function () {
    $url = 'https://www.hybridsolutions.com/downloads/VertexFXTraderLite_1.7.apk';
    $fileName = 'VertexFXTraderLite_1.7.apk';

    $response = Http::get($url);
    return response($response->body(), 200)
        ->header('Content-Type', 'application/vnd.android.package-archive')
        ->header('Content-Disposition', 'attachment; filename="' . $fileName . '"');
});

// WINDOWS (direct .exe download)
Route::get('/download/windows', function () {
    $url = 'https://www.hybridsolutions.com/downloads/vertexfx.exe';
    $fileName = 'vertexfx.exe';

    $response = Http::get($url);
    return response($response->body(), 200)
        ->header('Content-Type', 'application/octet-stream')
        ->header('Content-Disposition', 'attachment; filename="' . $fileName . '"');
});

// IOS (redirect to App Store)
Route::get('/download/ios', function () {
    return redirect()->away('https://apps.apple.com/lk/app/vertexfx-trader/id1469388395');
});
