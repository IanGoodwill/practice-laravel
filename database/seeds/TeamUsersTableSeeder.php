<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class TeamUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
            DB::table( 'team_user' )->insert(array(
                'user_id' => 1,
                'team_id' => 1
    
            ));
            // second tweet
            DB::table( 'team_user' )->insert(array(
                'user_id' => 2,
                'team_id' => 2
    
            ));
            // third tweet
            DB::table( 'team_user' )->insert(array(
                'user_id' => 3,
                'team_id' => 3
    
            ));
    
        // lets try "faker" to prepopulate with imaginary data very quickly
        
    $faker = Factory::create();
    
   
    foreach( range(1, 5) as $index ) {
    DB::table( 'team_user' )->insert( array(
        'user_id' => $faker->numberBetween( $min = 3, $max = 10),
        'team_id' => $faker->numberBetween( $min = 1, $max = 5),
     ));
    }


    }
}
