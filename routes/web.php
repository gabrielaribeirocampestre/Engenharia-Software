<?php

use Illuminate\Support\Facades\Route;

// Rota para página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rota para página de artigos
Route::get('/artigos', function () {
    return view('artigos');
});

// Rota para página de chat
Route::get('/chat', function () {
    return view('chat');
});

// Outras rotas conforme necessário
