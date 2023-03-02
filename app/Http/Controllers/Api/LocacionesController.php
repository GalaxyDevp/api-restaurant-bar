<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\locaciones;
use Illuminate\Http\Request;

class LocacionesController extends Controller
{
    public function index()
    {
        $Locaciones = locaciones::all();
        return $Locaciones;
    }
    public function show($id)
    {
        $Locaciones = locaciones::find($id);
        return $Locaciones;
    }
}
