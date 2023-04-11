<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'id_product' => 1,
                'name' => 'Burger',
                'image' => 'https://dummyimage.com/200x200/4D588E/fff&text=burger',
                'price' => 8000,
                'description' => 'Burger',
                'stok' => 5,
            ],
            [
                'id_product' => 2,
                'name' => 'Seblak',
                'image' => 'https://dummyimage.com/200x200/E83A2D/fff&text=Seblak',
                'price' => 5000,
                'description' => 'seblak',
                'stok' => 10,
            ],
            [
                'id_product' => 3,
                'name' => 'Cilok',
                'image' => 'https://dummyimage.com/200x200/000/00ff04&text=Cilok',
                'price' => 6000,
                'description' => 'Cilok Ceu omah',
                'stok' => 20,
            ],
            [
                'id_product' => 4,
                'name' => 'Bakso Aci',
                'image' => 'https://dummyimage.com/200x200/F03B06/000&text=Boci',
                'price' => 7000,
                'description' => 'Bakso Aci',
                'stok' => 5,
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
        //Added End
    
    
    }
}
