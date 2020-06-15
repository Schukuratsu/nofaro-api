<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'data', 'descricao', 'pet_id'
    ];
}
