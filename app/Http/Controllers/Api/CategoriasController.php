<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        $Categorias = categorias::all();
        return $Categorias;
    }

    public function show($id)
    {
        $Categorias = categorias::find($id);
        return $Categorias;
    }
    
}
