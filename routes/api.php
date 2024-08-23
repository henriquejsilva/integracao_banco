<?php

use App\Http\Controllers\UsuarioCrontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/usuario', [UsuarioCrontroller::class, 'store']);