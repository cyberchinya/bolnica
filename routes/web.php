<?php

use App\Http\Controllers\AdminBolnController;
/*use App\Http\Controllers\DoctorController;*/

use App\Http\Controllers\GosreestrController;
use App\Http\Controllers\KorupciaController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NormController;
use App\Http\Controllers\OurDoctorController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StructuraController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\VakancyController;
use App\Http\Controllers\VoprosController;
use Illuminate\Support\Facades\Route;

// баннеры
Route::get('/', function () {
    $topBanner = \App\Models\Banners::where('position', 'top')
        ->where('visible', true)
        ->latest()
        ->first();
    $leftBanners = \App\Models\Banners::where('position', 'left')
        ->where('visible', true)
        ->orderBy('sort')
        ->get();

    return view('layouts.base', compact('topBanner', 'leftBanners'));
})->name('home');
// конец у баннеров

Route::get('/thanks', [ThanksController::class, 'index'])->name('thanks');
Route::post('/thanks', [ThanksController::class, 'store'])->name('thanks.store');
Route::get('/vakancy', [VakancyController::class, 'index'])->name('vakancy');
Route::get('/manager', [ManagerController::class, 'index'])->name('manager');
Route::get('/structura', [StructuraController::class, 'index'])->name('structura');
Route::get('/adminboln', [AdminBolnController::class, 'index'])->name('adminiboln');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/vopros', [VoprosController::class, 'index'])->name('vopros');
Route::get('/personal', [PersonalController::class, 'index'])->name('personal');
Route::get('/norm',[NormController::class, 'index'])->name('norm');
Route::get('/gosreestr', [GosreestrController::class, 'index'])->name('gosreestr');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/ourdoctor', [OurDoctorController::class, 'index'])->name('ourdoctor');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');
