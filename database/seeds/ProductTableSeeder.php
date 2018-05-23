<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

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
            'name' => 'televisor',
            'slug' => 'televisor1',
            'description' => 'televisor pantalla plana HD',
            'extract' => 'televisor full HD',
             'price' => 700.00,
              'image' => 'https://static.iris.net.co/semana/upload/images/2015/3/13/420890_16110_1.jpg',
              'visible' => 1,
              'created_at' => new DateTime,
              'updated_at' => new DateTime,
              'category_id' => 1
        ],

        [
        'name'      => 'moto',
        'slug'      => 'moto1',
        'description'   => 'moto alto cilindraje  venta o cambio',
        'price'     => 999.99,
        'image'     => 'https://http2.mlstatic.com/moto-escala-112-D_NQ_NP_935125-MLA25377519151_022017-F.jpg',
        'visible'     => 1,
        'created_at'  => new DateTime,
        'updated_at'  => new DateTime,
        'category_id'   => 1
      ],

      [
        'name'      => 'camara',
        'slug'      => 'camara1',
        'description'   => 'camara canon cambio o vendo',
        'extract'     => 'camara canon',
        'price'     => 150.00,
        'image'     => 'http://sgfm.elcorteingles.es/SGFM/dctm/MEDIA01/201311/12/00110114284663____3__640x640.jpg',
        'visible'     => 2,
        'created_at'  => new DateTime,
        'updated_at'  => new DateTime,
        'category_id'   => 1
      ],
      
      [
        'name'      => 'playstation',
        'slug'      => 'playstation1',
        'description'   => 'vendo o cambio playstation 4 como nuevo con juego',
        'extract'     => 'playstation 4',
        'price'     => 475.00,
        'image'     => 'https://d243u7pon29hni.cloudfront.net/images/products/ps4-slim-1tb-gtav_l_-01_m.png',
        'visible'     => 1,
        'created_at'  => new DateTime,
        'updated_at'  => new DateTime,
        'category_id'   => 2
      ],   

        );
          Product::insert($data);
    }
}

?>