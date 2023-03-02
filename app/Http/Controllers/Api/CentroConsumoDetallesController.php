<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\centros_consumo_detalles;
use Illuminate\Http\Request;

class CentroConsumoDetallesController extends Controller
{
    public function index()
    {
        $CentrosConsumoDetalles = centros_consumo_detalles::all();
        return $CentrosConsumoDetalles;
    }
    
    public function show($id)
    {
        $CentroConsumoDetalles = centros_consumo_detalles::find($id);
        return $CentroConsumoDetalles;
    }
}
