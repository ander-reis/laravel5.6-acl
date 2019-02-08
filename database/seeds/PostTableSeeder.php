<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = \App\User::all();

        $post = factory(\App\Post::class, 20)->make();

        $post->each(function(\App\Post $model) use($user_id){
            $id = $user_id->random()->id;
            $model->user()->associate($id)->save();
        });
    }
}
