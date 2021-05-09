<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::truncate();
        $faker = \Faker\Factory::create();
        for($i=0;$i<10;$i++){
          Product::create([
            "name"=>$faker->name,
            "author"=>$faker->name,
            'producer'=>$faker->name,
            "banner_image"=>"defualt.jpg",
            "genre"=>$faker->name,
            "length"=>rand(60,120),
            "rented_time"=>rand(1,100),
            "trailer"=>"link here",
            "branch_id"=>rand(1,10),
            "type_id"=>rand(1,3)
          ]);
        }
    }
}
