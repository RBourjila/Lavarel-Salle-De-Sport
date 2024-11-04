<?php

use App\Http\Controllers\Accueil;
use App\Http\Controllers\Cours;
use App\Http\Controllers\Tarifs;
use App\Http\Controllers\Contact;
use App\Http\Controllers\MentionsLegales;
use Illuminate\Support\Facades\Route;

Route::get('/', [Accueil::class, 'index'])->name('accueil.index');

Route::get('/cours', [Cours::class, 'index'])->name('cours.index');


Route::get('/tarifs', [Tarifs::class, 'index'])->name('tarifs.index');


Route::get('/contact', [Contact::class, 'index'])->name('contact.index');


Route::get('/Mentionslegales', [MentionsLegales::class, 'index'])->name('mentions-legales.index');


