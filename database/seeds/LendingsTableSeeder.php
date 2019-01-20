<?php

use Illuminate\Database\Seeder;

class LendingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Lending::create([
            'lending_date' => '2018-09-10',
            'return_date' => '2018-10-15',
            'client_id' => 1,
            'movie_id' => 1
        ]);
    }
}
