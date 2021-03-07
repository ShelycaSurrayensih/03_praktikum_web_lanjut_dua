<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\post::insert([
            [
                'title'=>'Lorem ipsum dolor #1',
                'content'=>'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra',
                'featured_image'=>'/img/tm-img-310x180-1.jpg'
            ],
            [
                'title'=>'Lorem ipsum dolor #2',
                'content'=>'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra',
                'featured_image'=>'/img/tm-img-310x180-2.jpg'
            ],
            [
                'title'=>'Lorem ipsum dolor #3',
                'content'=>'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra',
                'featured_image'=>'/img/tm-img-310x180-3.jpg'
            ],
            [
                'title'=>'Lorem ipsum dolor #4',
                'content'=>'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra',
                'featured_image'=>'/img/tm-img-310x180-4.jpg'
            ]
        ]);

        }
}
