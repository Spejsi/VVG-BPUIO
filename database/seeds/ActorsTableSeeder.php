<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Actor::create([
            'first_name' => 'Keanu',
            'last_name' => 'Reeves'
        ]);
    }
}
