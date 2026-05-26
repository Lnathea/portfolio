<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');
Route::get('/awards', [PortfolioController::class, 'awards'])->name('awards');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
