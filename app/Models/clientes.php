<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;
    public function Usuario()
        {
            return $this->belongsTo(User::class);
        }
    public function Tienda()
        {
            return $this->belongsTo(tienda::class);
        }
    public function Registro()
        {
            return $this->hasMany(registros::class);
        }
}
