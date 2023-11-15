<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listas_boletas extends Model
{
    use HasFactory;
    public function Lista_Escolar()
    {
        return $this->belongsTo(listas_escolares::class);
    }
    public function Boleta()
    {
        return $this->belongsTo(boletas::class);
    }
}
