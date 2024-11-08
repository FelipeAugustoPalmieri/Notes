<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// rota com funcao anonima
Route::get('/rota', function() {
    return '<h1>Olá Laravel</h1>';
});

Route::get('/user', function() {
    return '<h1>Aqui esta o user</h1>';
});

Route::get('/injection', function(Request $request) {
});

Route::match(['get', 'post'], '/match', function(Request $request) {
    return 'Aceita um GET e POST';
});