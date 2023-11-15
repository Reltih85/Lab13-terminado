<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sedes extends Model
{
    use HasFactory;
    public function Tienda()
        {
            return $this->belongsTo(tienda::class);
        }
    public function Encargado()
        {
            return $this->hasMany(encargados::class);
        }
    public function Producto()
        {
            return $this->hasMany(productos::class);
        }
}
