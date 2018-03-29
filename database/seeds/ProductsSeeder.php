<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Styler',
                'price' => '12.00',
            ],
            [
                'id' => 2,
                'name' => 'Haargel',
                'price' => '3.00',
            ],
            [
                'id' => 3,
                'name' => 'Knipbeurt',
                'price' => '22.00',
            ],
        ]);
    }
}
