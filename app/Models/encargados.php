<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encargados extends Model
{
    use HasFactory;
    public function Usuario()
        {
            return $this->belongsTo(User::class);
        }
    public function Sede()
        {
            return $this->belongsTo(sedes::class);
        }
    public function Historial_venta()
        {
            return $this->hasMany(historial_ventas::class);
        }
}
