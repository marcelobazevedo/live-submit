<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use App\Models\Produtos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


//        Category::factory(10)->create();
//
//        $categories = collect(Category::pluck('id'));
//        Product::factory(50)
//            ->create()
//            ->each(function (Product $product) use ($categories) {
//                $product->categories()->sync($categories->random(2));
//            });

//        $country = Country::create(['name' => 'United Kingdom']);
//        $country->cities()->create(['name' => 'London']);
//        $country->cities()->create(['name' => 'Manchester']);
//        $country->cities()->create(['name' => 'Liverpool']);
//
//        $country = Country::create(['name' => 'United States']);
//        $country->cities()->create(['name' => 'Washington']);
//        $country->cities()->create(['name' => 'New York City']);
//        $country->cities()->create(['name' => 'Denver']);

        Produtos::create(['name' => 'iPhone', 'price' => 999.99]);
        Produtos::create(['name' => 'iPad', 'price' => 699.99]);
        Produtos::create(['name' => 'iMac', 'price' => 1999.99]);
    }
}
