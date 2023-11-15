<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registros_boletas extends Model
{
    use HasFactory;
    public function Registro()
    {
        return $this->belongsTo(registros::class);
    }
    public function Boleta()
    {
        return $this->belongsTo(boletas::class);
    }
}
