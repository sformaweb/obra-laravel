<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $primaryKey = "id";

    protected $fillable = [
        'nome', 'localidade', 'poboacion', 'actividade', 'telefono', 'fax', 'data_incorporacion',
        'persoa_contacto', 'orientador', 'ofertas_contratacion', 'ofertas_formacion', 'notas'
    ];
    protected $hidden = ['id'];

    public $timestamps = true;
}
