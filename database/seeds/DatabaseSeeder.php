<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TownsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(BoughtSeeder::class);
    }
}
