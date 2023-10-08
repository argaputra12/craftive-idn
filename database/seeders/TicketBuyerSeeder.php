<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TicketBuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
          'name' => 'user',
          'email' => 'user@user.com',
          'password' => bcrypt('password'),
          'role' => 'ticket-buyer',
        ]);
    }
}