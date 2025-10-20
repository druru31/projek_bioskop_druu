<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', fn() => view('home'));
Route::get('/film', function(){
    $q = request('q');
    return view('film', compact('q'));
});
Route::get('/jadwal', fn() => view('jadwal'));
Route::get('/kursi', fn() => view('kursi'));
Route::get('/pembayaran', fn() => view('pembayaran'));
Route::get('/login', fn() => view('login'));
Route::get('/register', fn() => view('register'));
