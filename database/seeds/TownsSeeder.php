<?php

use Illuminate\Database\Seeder;

class TownsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('towns')->insert([
            [
                'id' => 1,
                'name' => 'Emmeloord',
            ],
            [
                'id' => 2,
                'name' => 'Swifterbant',
            ],
            [
                'id' => 3,
                'name' => 'Dronten',
            ],
        ]);
    }
}
