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
        'orden_fisica',
        'id_files_orden',
        'id_files_resultados'
        

    ];

    public function id_files_orden()
    {
        return $this->belongsTo('App\Models\FilesOrden', 'id_files_orden');
    }

    public function id_files_resultados()
    {
        return $this->belongsTo('App\Models\FilesResultado', 'id_files_resultados');
    }
}

