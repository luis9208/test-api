<?php

use Illuminate\Database\Seeder;
use App\products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(products::class, 50)->create();
    }
}
