<?php

use Illuminate\Database\Seeder;

use App\UserVendor as Vendor;
use Faker\Factory as faker;

class userVendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $moderatorRole = \HttpOz\Roles\Models\Role::whereSlug('user.apis')->first();
        $faker = Faker::create('id_ID');
        $i = 100;
        while($i!=0){
            $data['name'] = $faker->name;
            $data['phone'] = $faker->phoneNumber;
            $data['address'] = $faker->address;
            $data['phone_other'] = $faker->phoneNumber;
            $data['email'] = $faker->email;
            $data['password'] = bcrypt('password');
            Vendor::create($data);
            $i--;

            $user = Vendor::where('email', $data['email'])->first();
            $user->attachRole($moderatorRole);
        }
    }
}