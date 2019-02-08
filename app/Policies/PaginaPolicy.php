<?php

namespace App\Policies;

use App\Permissoes;
use App\Post;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaginaPolicy
{
    use HandlesAuthorization;

//    /**
//     * Create a new policy instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        //
//    }

    public function update($user, $pagina)
    {
        $permissao = Permissoes::where('id_usuario', '=', $user->id)->where('id_pagina', '=', $pagina)->first();
        //dd($permissao);
        return ($permissao->fl_consulta) ? true : false;
    }
}
