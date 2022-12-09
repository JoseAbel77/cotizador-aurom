<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Empresa extends Model
{
    use HasFactory;
    protected $table ='empresa';
    protected $fillable=[
        'nombre_empresa', 'correo', 'telefono_empresa', 'direccion', 'num_trabajadores', 'giro' 
    ];
}
