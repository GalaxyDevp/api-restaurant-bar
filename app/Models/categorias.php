<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    use HasFactory;
    public function centros_consumo(){
        return $this->hasMany(centros_consumo::class, 'id');
    }
}
