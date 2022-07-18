<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ofertats extends Model
{
    use HasFactory;

    protected $table = 'ofertats';

    protected $primaryKey = "id";

    protected $fillable = [
        'nome', 'datadende', 'dataata', 'lugar', 'tipo', 'numhoras', 'numprazas'
    ];
    protected $hidden = ['id'];

    public $timestamps = true;
}
