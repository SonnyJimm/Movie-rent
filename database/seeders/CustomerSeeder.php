<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Customer::truncate();
        $faker = \Faker\Factory::create();
        $password = Hash::make('mon');
        for($i=0;$i<10;$i++){
          Customer::create([
            "user_name"=>$faker->userName,
            "password"=>$password,
            "first_name"=>$faker->name,
            "last_name"=>$faker->name,
            "gender"=>$faker->randomElement(['male', 'female']),
            "birth_date"=>$faker->date,
            "address"=>$faker->address,
            "email"=>$faker->safeEmail,
            "phone_number"=>$faker->numerify('########'),
            "register"=>$faker->numerify('##########')
          ]);
        }
      }
}
