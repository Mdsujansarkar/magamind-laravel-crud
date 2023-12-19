<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $offers= Offer::factory()->count(50)->create();
       foreach ($offers as $offer) {
            $category = Category::inRandomOrder()->limit(5)->get();
            $offer->categoryies()->sync($category->pluck('id'));
       }
       foreach ($offers as $offer) {
        $location = Location::inRandomOrder()->limit(5)->get();
        $offer->categoryies()->sync($location->pluck('id'));
   }
    }
}
