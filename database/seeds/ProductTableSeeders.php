<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;//Usar el modelo category

class ProductTableSeeder extends Seeder
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
                'name'          => 'Playera 1',
                'slug'          => 'playera-1',
                'description'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',  
                'extract'       => 'Lorem Ipsum es simplemente el texto de',
                'price'         => 275.00,
                'image'         => 'http://static.mercadoshops.com/playeras-de-superheroes_iZ51XvZxXpZ1XfZ75420780-418096547-1.jpgXsZ75420780xIM.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime, 
                'updated_at'     => new DateTime, 
                'category_id'   => 1
            ],

            [
                'name'          => 'Playera 2',
                'slug'          => 'playera-2',
                'description'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',  
                'extract'       => 'Lorem Ipsum es simplemente el texto de relleno de',
                'price'         => 475.00,
                'image'         => 'http://static.mercadoshops.com/playeras-de-superheroes_iZ51XvZxXpZ4XfZ75420780-418096547-4.jpgXsZ75420780xIM.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime, 
                'updated_at'     => new DateTime, 
                'category_id'   => 1
            ]

        );

        Product::insert($data);
    }
}