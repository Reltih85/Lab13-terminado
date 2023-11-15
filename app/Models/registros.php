<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registros extends Model
{
    use HasFactory;
    public function Cliente()
    {
        return $this->belongsTo(clientes::class);
    }
    public function Producto()
    {
        return $this->belongsTo(productos::class);
    }
    public function Registro_boleta()
    {
        return $this->hasMany(registros_boletas::class);
    }
    public function Lista_registro()
    {
        return $this->hasMany(listas_registros::class);
    }
}
