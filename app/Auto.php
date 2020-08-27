<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Auto extends Model
{
    protected $fillable= [

        'marca',
        'condicion',
        'anno',
        'departamento',
        'tipo_combustible',
        'motor',
        'kilometraje',
        'transmision',
        'color',
        'caracteristicas_adicionales',
        'presio',
        'foto',
        'user_id',

    ];



    public function user()
    {
        return $this->belongsTo('App\User');
    }



}
