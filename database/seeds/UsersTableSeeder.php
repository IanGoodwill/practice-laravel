<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // We can seed specific data directly! This is useful for testing
        //


    // lets try "faker" to prepopulate with imaginary data very quickly

    $faker = Factory::create();
    
        // lets make 25 Tweets in just a few lines
        foreach( range(1, 10) as $index ) {
            DB::table( 'users' )->insert( array(
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password
            ));
    }


    }
}


