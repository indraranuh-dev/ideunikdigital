<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

use Modules\Front\Http\Controllers\FrontController;

Route::group([
    'as' => 'front.',
    'prefix' => '/',
], function () {

    // SITEMAP
    Route::get('/sitemap.xml', [FrontController::class, 'sitemap'])->name('sitemap');

    //
    Route::get('/', [FrontController::class, 'index'])->name('index');
    Route::get('/tentang-kami', [FrontController::class, 'about'])->name('about');
    Route::get('/hubungi-kami', [FrontController::class, 'contact'])->name('contact');
    Route::get('/proyek', [FrontController::class, 'project'])->name('project');

    Route::group([
        'as' => 'service.',
        'prefix' => '/layanan',
    ], function () {
        Route::get('/', [FrontController::class, 'service'])->name('index');
        Route::get('/{slug}', [FrontController::class, 'showService'])->name('show');
    });

    Route::group([
        'as' => 'post.',
        'prefix' => '/',
    ], function () {
        Route::get('/blog', [FrontController::class, 'posts'])->name('index');
        Route::get('/blog/{slug_title}', [FrontController::class, 'showPost'])->name('show');
    });
});