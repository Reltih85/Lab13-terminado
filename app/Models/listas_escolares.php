<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listas_escolares extends Model
{
    use HasFactory;
    public function Lista_boleta()
    {
        return $this->hasMany(listas_boletas::class);
    }
    public function Lista_registro()
    {
        return $this->hasMany(listas_registros::class);
    }
}
