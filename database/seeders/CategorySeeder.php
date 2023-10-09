<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Category::create([
      'name' => 'Beauty',
      'image_url' => 'storage/images/categories/beauty.jpg'
    ]);
    Category::create([
      'name' => 'Flower and Planting',
      'image_url' => 'storage/images/categories/planting.jpg'
    ]);
    Category::create([
      'name' => 'Food and Beverage',
      'image_url' => 'storage/images/categories/food.jpg'
    ]);
    Category::create([
      'name' => 'Accessories',
      'image_url' => 'storage/images/categories/accessories.jpg'
    ]);
    Category::create([
      'name' => 'Culture',
      'image_url' => 'storage/images/categories/culture.jpg'
    ]);

    // create event
    $events = Event::factory(10)->create();

    // add event category
    foreach($events as $event) {
      $event->eventCategory()->create([
        'category_id' => Category::all()->random()->id,
        'event_id' => $event->id
      ]);
    }
  }
}