<?php

use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'id' => 1,
                'first_letters' => 'R.A.M.',
                'lastname' => 'James',
                'address' => 'Espelerlaan 24',
                'zip' => '8302 CH',
                'town_id' => 1,
            ],
            [
                'id' => 2,
                'first_letters' => 'S.R.S.',
                'lastname' => 'Micael',
                'address' => 'Lange streek 2',
                'zip' => '8253 AB',
                'town_id' => 3,
            ],
            [
                'id' => 3,
                'first_letters' => 'W.F.G.',
                'lastname' => 'Daniels',
                'address' => 'Gletsjerstraat 8',
                'zip' => '8266 AR',
                'town_id' => 2,
            ],
            [
                'id' => 4,
                'first_letters' => 'S.A.J.',
                'lastname' => 'Verkuijl',
                'address' => 'Granietstraat 12',
                'zip' => '8255 AH',
                'town_id' => 2,
            ],
        ]);
    }
}
