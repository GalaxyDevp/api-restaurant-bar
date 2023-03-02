<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\centros_consumo_horarios;
use Illuminate\Http\Request;

class CentroConsumoHorariosController extends Controller
{
    public function index()
    {
        $CentrosConsumoHorarios = centros_consumo_horarios::all();
        return $CentrosConsumoHorarios;        
    }
    public function show($id)
    {
        $CentroConsumoHorarios = centros_consumo_horarios::find($id);
        return $CentroConsumoHorarios;
    }

}
