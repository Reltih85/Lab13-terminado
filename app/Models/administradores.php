<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administradores extends Model
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
}
