<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Demo form (POST)
Route::post('/demo', function () {
    // TODO: handle demo request (send email, store in DB)
    return back()->with('success', 'Recebemos sua solicitação! Nossa equipe entrará em contato em até 2h.');
})->name('demo.store');
