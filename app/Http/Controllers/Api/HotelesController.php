<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\hoteles;
use Illuminate\Http\Request;

class HotelesController extends Controller
{
    public function index()
    {
        $Hoteles = hoteles::all();
        return $Hoteles;
    }
    public function show($id)
    {
        $Hotel = hoteles::find($id);
        return $Hotel;
    }
}
