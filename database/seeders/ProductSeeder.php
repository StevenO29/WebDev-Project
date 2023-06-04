<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = Product::all();

        // Loop through each product and create a seeder dynamically
        foreach ($products as $product) {
            $data = [
                'P_Name' => $product->P_Name,
                'P_Category' => $product->P_Category,
                'P_Brand' => $product->P_Brand,
                'P_Stock' => $product->P_Stock,
                'P_Desc' => $product->P_Desc,
                'P_Price' => $product->P_Price,
                'product_image' => $product->product_image,
            ];

            // Create the seeder using the retrieved data
            Product::create($data);
        }
    }
}
