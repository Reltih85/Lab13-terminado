<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    public function Users()
        {
            return $this->belongsTo(User::class);
        }
    public function Producto()
        {
            return $this->belongsTo(productos::class);
        }
}
