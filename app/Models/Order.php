<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orden_servicio';
    protected $primaryKey = 'id_orden';
    protected $fillable = [
        'tipo_documento',
        'cedula',
        'nombres',
        'apellidos',
        'fecha',
        'tipo_examen',
        'examen_enfasis',
        'observaciones',
        
    ];

    public function responsable()
    {
        return $this->belongsTo('App\Models\Empleado', 'responsable');
    }
}

