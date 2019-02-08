<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissoes extends Model
{
    protected $table = 'tb_sinpro_admin_permissoes';

    protected $fillable = [
        'id_pagina',
        'fl_consulta',
        'fl_cadastro',
        'fl_alteracao',
        'fl_exclusao',
        'dt_criacao',
        'dt_alteracao'
    ];

    const CREATED_AT = 'dt_criacao';
    const UPDATED_AT = 'dt_alteracao';
}
