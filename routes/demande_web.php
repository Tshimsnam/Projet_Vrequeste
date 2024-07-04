<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\DemandeController;
use Illuminate\Support\Facades\Route;

Route::get('/site/{nom}', [SiteController::class, 'getCoordinates']);
Route::resource('/demandes', DemandeController::class);
Route::post('/sites', [SiteController::class, 'store'])->name('sites');
Route::get('/site', [SiteController::class,'index'])->name('site');
Route::get('/envoyermailmanager',[DemandeController::class,'envoyerMailManager'])->name('envoyermailmanager');
Route::get('/envoyermailauchefcharroi/{id}',[DemandeController::class,'envoyerMailAuChefCharroi'])->name('envoyermailauchefcharroi');
