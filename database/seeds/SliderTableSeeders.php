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
                'image'         => 'http://media.dcentertainment.com/sites/default/files/images-touts/DC-Slider_20130516_arkhamorigins_v9_uwyo87wyau_.jpg',
                'caption'       => "Slider 1 de prueba",
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],

            [
                'order'         => '2',
                'image'         => 'http://media.dcentertainment.com/sites/default/files/images-touts/dc-slider_BW_OZY-CC_alt_mr4y1nnajz__ewqik9ht8a_.jpg',
                'caption'       => "Slider 2 de prueba",
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ]
        );

        Slider::insert($data);
    }
}