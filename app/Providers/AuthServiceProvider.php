<?php

namespace App\Providers;

use App\Permissoes;
use App\Policies\PaginaPolicy;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Post::class => PaginaPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

//        Gate::before(function($user){
//            if($user->role == User::ROLE_ADMIN){
//                return true;
//            }
//        });

//        Gate::define('is-admin', function($user){
//            return $user->role == User::ROLE_ADMIN;
//        });

//        Gate::define('update-post', function($user, $post){
//            return $post->user_id == $user->id;
//        });

        Gate::define('update', 'App\Policies\PaginaPolicy@update');

//        Gate::define('update', function($user, $pagina) {
//            $permissao = Permissoes::where('id_usuario', '=', $user->id)->where('id_pagina', '=', $pagina)->first();
//            dd(($permissao->fl_consulta) ? true : false);
//            if ($permissao->fl_consulta) {
//                return true;
//            }
//            return false;
//        });
    }
}
