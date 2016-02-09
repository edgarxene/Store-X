<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;//Usar el modelo category

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Super Heroes',
                'slug' => 'super-heroes',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',  
                'color' => '#440022'
            ],

            [
                'name' => 'Geek',
                'slug' => 'geek',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',  
                'color' => '#445500'
            ]
        );

        Category::insert($data);
    }
}