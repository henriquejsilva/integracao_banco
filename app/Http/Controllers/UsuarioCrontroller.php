<?php

namespace App\Http\Controllers;

use App\Service\UsuarioService;
use Illuminate\Http\Request;

class UsuarioCrontroller extends Controller
{
    protected $usuarioService;

    public function __construct(UsuarioService $novousuarioService)
    {
        $this->usuarioService = $novousuarioService;
    }

    public function store(Request $request){
        $user = $this->usuarioService->create($request->all());

        return $user;
    }
}
