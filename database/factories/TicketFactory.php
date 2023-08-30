<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $events = Event::factory()->count(5)->create();

        return [
            'event_id' => $events->random()->id,
            'stock' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(10000, 100000),
        ];
    }
}