<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Slider;//Usar el modelo slider

class SliderTableSeeder extends Seeder
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
                'order'         => '1',
                'image'         => 'images/slider-items/Banner1.jpg',
                'caption'       => "Slider 1 de prueba",
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],

            [
                'order'         => '2',
                'image'         => 'images/slider-items/Banner2.jpg',
                'caption'       => "Slider 2 de prueba",
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ]
        );

        Slider::insert($data);
    }
}