<?php

use Illuminate\Database\Seeder;

class TbSinproAdminPermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Permissoes::class, 1)->create([
            'id_usuario' => 1,
            'id_pagina' => 1,
            'fl_consulta' => 1,
            'fl_cadastro' => 1,
            'fl_alteracao' => 1,
            'fl_exclusao' => 1
        ]);
    }
}
