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
        $this->call(ActorsTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(LendingsTableSeeder::class);
    }
}
