<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call( (new TweetsTableSeeder()) ->run() );

        $this->call( (new UsersTableSeeder()) ->run() );

        $this->call( (new TeamUsersTableSeeder()) ->run() );

        $this->call( (new TeamTableSeeder()) ->run() );
    }
}
