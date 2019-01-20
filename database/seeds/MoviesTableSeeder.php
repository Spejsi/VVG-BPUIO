<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Movie::create([
            'name' => 'Matrix',
            'year' => 2001,
            'duration' => 123,
            'prize' => 10.54
        ]);
    }
}
