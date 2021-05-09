<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Branch;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Branch::truncate();
        $faker = \Faker\Factory::create();
        for($i=0;$i<10;$i++){
          Branch::create([
            "branch_name"=>$faker->name,
            "branch_location"=>$faker->address
          ]);
        }
    }
}
