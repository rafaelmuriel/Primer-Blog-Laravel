<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $post = new \App\Models\Post(
            [
                'title' => 'Primer Posteo Agregado del seeder',
                'content' => 'Este es el primer posteo del seeder'
            ]);
            $post->save();

        $post = new \App\Models\Post(
            [
                'title' => 'Segundo Posteo Agregado del seeder otro',
                'content' => 'Este es el segundo posteo del seeder otro'
            ]);
            $post->save();

        $post = new \App\Models\Post(
            [
                'title' => 'Tercer Posteo Agregado del seeder otro',
                'content' => 'Este es el tercer posteo del seeder otro'
            ]);
            $post->save();

        $post = new \App\Models\Post(
            [
                'title' => 'Cuarto Posteo Agregado del seeder otro',
                'content' => 'Este es el cuarto posteo del seeder otro'
            ]);
            $post->save();

        $post = new \App\Models\Post(
            [
                'title' => 'Quinto Posteo Agregado del seeder otro',
                'content' => 'Este es el quinto posteo del seeder otro'
            ]);
            $post->save();
    }
}
