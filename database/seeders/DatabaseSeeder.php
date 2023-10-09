<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ticket;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this -> call([
            CategorySeeder::class,
            // EventCategorySeeder::class,
            TicketSeeder::class,
            PaymentMethodSeeder::class,
            AdminSeeder::class,
            TicketBuyerSeeder::class,
        ]);
    }
}