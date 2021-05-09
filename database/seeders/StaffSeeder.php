<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Staff::truncate();
        $faker = \Faker\Factory::create();
        $password = Hash::make('mon');
        for($i=0;$i<10;$i++){
          Staff::create([
            "user_name"=>$faker->userName,
            "password"=>$password,
            "first_name"=>$faker->name,
            "last_name"=>$faker->name,
            "gender"=>$faker->randomElement(['male', 'female']),
            "birth_day"=>$faker->date,
            "email"=>$faker->safeEmail,
            "phone_number"=>$faker->numerify('########'),
            "branch_id"=>rand(1,10)
          ]);
        }
    }
}
