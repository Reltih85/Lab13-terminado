<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tienda extends Model
{
    use HasFactory;
    public function Sede()
        {
            return $this->hasMany(sedes::class);
        }
    public function Administrador()
        {
            return $this->hasMany(administradores::class);
        }
    public function Cliente()
        {
            return $this->hasMany(clientes::class);
        }
}
