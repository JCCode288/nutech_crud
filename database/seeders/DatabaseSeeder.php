<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
            $this->seedUser();
            $this->seedCategory();
            $this->seedProduct();
    }

    private function seedUser()
    {
        for($i =0; $i<19;$i++){
            User::factory()->create([
                'name'=> fake()->name(),
                'email'=> fake()->unique()->email(),
                'password'=> Hash::make(Str::random(16)),
            ]);
        }

        User::factory()->create([
            'name'=> "Jendy Caprico",
            'email'=> "jendycaprico@gmail.com",
            "password"=> bcrypt("pass123##"),
        ]);
    }

    private function seedCategory()
    {
       $file = __DIR__.'\seed_file\categories.json';
       $categories = json_decode(file_get_contents($file));

       for($i=0; $i<count($categories); $i++){
           $category = $categories[$i];
           Category::factory()->create([
            'name'=> $category->name,
           ]);
       }
    }

    private function seedProduct()
    {
        $file = __DIR__."\seed_file\products.json";
        $products=json_decode(file_get_contents($file));

        for($i = 0; $i < count($products); $i++){
            $product = $products[$i];

            Product::factory()->create([
                'name' => $product->name,
                'stock' => $product->stock,
                'product_price' => $product->product_price,
                'uploader_id'=>fake()->unique()->numberBetween(1,20),
                'category_id'=>$product->category_id
            ]);
        }
    }
}
