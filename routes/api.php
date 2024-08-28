<?php

use App\Http\Controllers\UsuarioCrontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/usuario', [UsuarioCrontroller::class, 'store']);

Route::get('/usuario/{id}/find', [UsuarioCrontroller::class, 'findById'] );

Route::get('/usuario', [UsuarioCrontroller::class, 'index']);

Route::get('/usuario/search', [UsuarioCrontroller::class, 'searchByName']);

Route::get('/usuario/search/email', [UsuarioCrontroller::class, 'searchByEmail']);

Route::delete('/usuario/{id}/delete', [UsuarioCrontroller::class, 'delete']);

Route::put('/usuario', [UsuarioCrontroller::class, 'update']);