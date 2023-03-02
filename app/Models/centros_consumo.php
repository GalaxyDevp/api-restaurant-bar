<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class centros_consumo extends Model
{
    use HasFactory;
    public function categorias(){
        return $this->belongsTo(categorias::class, 'categoria_id');
    }
}
