<?php

use Illuminate\Database\Seeder;
use App\Suppliers;
use Faker\Factory as faker;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker::create('id_ID');
        $i = 100;
        while($i!=0){
            $data['name'] = $faker->name;
            $data['phone'] = $faker->phoneNumber;
            $data['address'] = $faker->address;
            $data['phone_other'] = $faker->phoneNumber;
            Suppliers::create($data);
            $i--;
        }
    }
}
