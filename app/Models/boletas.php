<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boletas extends Model
{
    use HasFactory;
    public function Lista_boleta()
    {
        return $this->hasMany(listas_boletas::class);
    }
    public function Registro_boleta()
    {
        return $this->hasMany(registros_boletas::class);
    }
}
