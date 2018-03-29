<?php

use Illuminate\Database\Seeder;

class BoughtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bought')->insert([
            [
                'id' => 1,
                'customer_id' => 1,
                'product_id' => 1,
                'amount' => 3,
            ],
            [
                'id' => 2,
                'customer_id' => 2,
                'product_id' => 2,
                'amount' => 3,
            ],
            [
                'id' => 3,
                'customer_id' => 1,
                'product_id' => 3,
                'amount' => 1,
            ],
            [
                'id' => 4,
                'customer_id' => 3,
                'product_id' => 2,
                'amount' => 6,
            ],
        ]);
    }
}
