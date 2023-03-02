<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\propiedades;
use Illuminate\Http\Request;

class PropiedadesController extends Controller
{
    public function index()
    {
        $Propiedades = propiedades::all();
        return $Propiedades;
    }
    public function show($id)
    {
        $Propiedades = propiedades::find($id);
        return $Propiedades;
    }
}
