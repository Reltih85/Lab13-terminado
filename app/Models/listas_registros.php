<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listas_registros extends Model
{
    use HasFactory;
    public function Lista()
    {
        return $this->belongsTo(listas_escolares::class);
    }
    public function Registro()
    {
        return $this->belongsTo(registros::class);
    }
}
