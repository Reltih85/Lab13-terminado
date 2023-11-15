<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historial_ventas extends Model
{
    use HasFactory;
    public function Encargado()
        {
            return $this->belongsTo(encargados::class);
        }
    public function Producto()
        {
            return $this->belongsTo(productos::class);
        }
}
