<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    public function Categoria()
        {
            return $this->belongsTo(categorias::class);
        }
    public function Sede()
        {
            return $this->belongsTo(sedes::class);
        }
    public function Historial_venta()
        {
            return $this->hasMany(historial_ventas::class);
        }
    public function Promocion()
        {
            return $this->hasMany(promociones::class);
        }
    public function Registro()
        {
            return $this->hasMany(registros::class);
        }
    public function Users()
        {
            return $this->belongsTo(User::class);
        }
}
