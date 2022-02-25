<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $products =  [
            [
                'product_name' => 'T-Shirt',
                'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'product_price' => 50000,
                'quantity' => 10,
                'created_at' => Carbon::now(),
            ],
            [
                'product_name' => 'Jeans',
                'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'product_price' => 150000,
                'quantity' => 15,
                'created_at' => Carbon::now(),
            ],
            [
                'product_name' => 'Dress',
                'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'product_price' => 200000,
                'quantity' => 6,
                'created_at' => Carbon::now(),
            ],
            [
                'product_name' => 'Sweater',
                'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'product_price' => 500000,
                'quantity' => 35,
                'created_at' => Carbon::now(),
            ],
            [
                'product_name' => 'Jacket',
                'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'product_price' => 600000,
                'quantity' => 14,
                'created_at' => Carbon::now(),
            ],
            [
                'product_name' => 'Shoes',
                'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'product_price' => 10000,
                'quantity' => 15,
                'created_at' => Carbon::now(),
            ],
            [
                'product_name' => 'Socks',
                'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'product_price' => 150000,
                'quantity' => 7,
                'created_at' => Carbon::now(),
            ],
            [
                'product_name' => 'Belt',
                'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'product_price' => 60000,
                'quantity' => 9,
                'created_at' => Carbon::now(),
            ],
          ];

          Product::insert($products);
    }
}
