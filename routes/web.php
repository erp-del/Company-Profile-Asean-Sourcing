<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Asean Sourcing — multi-site gateway
|--------------------------------------------------------------------------
*/
Route::get('/', fn () => view('asean.gateway'))->name('asean.home');

Route::get('/assist', fn () => view('asean.assist.index'))->name('asean.assist');
Route::get('/assist/quality-programs', fn () => view('asean.assist.quality'))->name('asean.assist.quality');
Route::get('/assist/factory-network', fn () => view('asean.assist.factory'))->name('asean.assist.factory');

Route::redirect('/retail', '/excellencial', 302)->name('asean.retail');

Route::get('/projects', fn () => view('asean.projects.index'))->name('asean.projects');
Route::get('/projects/procurement-delivery', fn () => view('asean.projects.procurement'))->name('asean.projects.procurement');
Route::get('/projects/hospitality-ffe', fn () => view('asean.projects.hospitality'))->name('asean.projects.hospitality');

Route::get('/excellencial', fn () => view('home'))->name('excellencial.home');

/*
|--------------------------------------------------------------------------
| Excellencial (Retail / QC) — articles & service detail pages
|--------------------------------------------------------------------------
*/
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/services/raw-material-assessment', function () {
    return view('services.raw-material-assessment');
});

Route::get('/services/in-process-quality-control', function () {
    return view('services.in-process-quality-control');
});

Route::get('/services/final-product-verification', function () {
    return view('services.final-product-verification');
});

Route::get('/services/compliance-certification', function () {
    return view('services.compliance-certification');
});

Route::get('/services/shipping-integrity-checks', function () {
    return view('services.shipping-integrity-checks');
});

Route::get('/services/analytics-insights', function () {
    return view('services.analytics-insights');
});
