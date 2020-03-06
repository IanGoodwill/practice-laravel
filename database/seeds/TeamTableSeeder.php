<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
    $faker = Factory::create();
    
    // lets make 25 Tweets in just a few lines
    foreach( range(1, 5) as $index ) {
        DB::table( 'teams' )->insert( array(
            'name' => $faker->word,
            'description' => $faker->sentence,
           
        ));
}


}
}


    

