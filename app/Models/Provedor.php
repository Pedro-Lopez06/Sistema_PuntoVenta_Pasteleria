<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
    protected $fillable = [
        'nombre', 'correo', 'numero', 'direccion', 'telefono'
    ];
}
