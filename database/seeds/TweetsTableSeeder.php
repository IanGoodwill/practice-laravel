<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class TweetsTableSeeder extends Seeder
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
        DB::table( 'tweets' )->insert(array(
            'user_id' => 1,
            'message' => 'My first Tweet!'

        ));
        // second tweet
        DB::table( 'tweets' )->insert(array(
            'user_id' => 2,
            'message' => 'Hello, World!'

        ));
        // third tweet
        DB::table( 'tweets' )->insert(array(
            'user_id' => 3,
            'message' => '\'Sup, yo!?'

        ));

    // lets try "faker" to prepopulate with imaginary data very quickly

    $faker = Factory::create();
    
        // lets make 25 Tweets in just a few lines
    foreach( range(1, 25) as $index ) {
        DB::table( 'tweets' )->insert( array(
            'user_id' => $faker->numberBetween( $min = 1, $max = 10),
            'message' => $faker->catchphrase
        ));
    }

    $faker = Factory::create();
    
    
foreach( range(1, 10) as $index ) {
    DB::table( 'users' )->insert( array(
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => $faker->password
    ));
}

    }
}
