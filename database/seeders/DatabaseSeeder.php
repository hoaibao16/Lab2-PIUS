<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // create 100 categories
        Category::factory(100)->create()->each(function($category)
        {

            // Create 5 products for each category
            $products = Product::factory(5)->make();
            $category->product()->saveMany($products);

        });

        // factory(Category::class, 10)->create()->each(function ($category) {

        //     // Create 10 posts for each category
        //     $products = factory(Product::class, 10)->make();
        //     $category->product()->saveMany($products);

        // });
    }
}
