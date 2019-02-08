<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(\App\User::class, 1)->create([
            'email' => 'admin@user.com',
            'role' => \App\User::ROLE_ADMIN
        ]);

        factory(\App\User::class, 1)-> create([
            'email' => 'user@user.com'
        ]);

        $this->call(PostTableSeeder::class);
        $this->call(TbSinproAdminPermissaoSeeder::class);
//        factory(\App\Post::class, 20)->create();

    }
}
