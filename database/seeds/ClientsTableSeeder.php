<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Client::create([
            'first_name' => 'Mario',
            'last_name' => 'Pavše',
            'address' => 'Šet. F.Lučića 29, VG',
            'phone_number' => '35345345',
            'vat_id' => '34635756576'
        ]);
    }
}
