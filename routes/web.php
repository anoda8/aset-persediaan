<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/form-transaksi', \App\FormTransaksi::class)->name('form-transaksi');
Route::get('/form-input-barang', \App\FormInputBarang::class)->name('form-input-barang');
