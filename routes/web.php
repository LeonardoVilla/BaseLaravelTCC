<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/pages', function () {
    return view('pages.cadastroProduto');
})->name('cadProduto');

Route::get('/consultar', function () {
    return view('pages.consultarProduto');
})->name('consultar');
