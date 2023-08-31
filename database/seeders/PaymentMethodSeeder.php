<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payment_methods = [
            [
                'name' => 'BCA',
                'description' => 'Hanun Aulia Yasmin',
                'payment_number' => '1234567890',
            ],
            [
                'name' => 'DANA',
                'description' => 'Hanun Aulia Yasmin',
                'payment_number' => '082132557018',
            ],
            [
                'name' => 'Mandiri',
                'description' => 'Hanun Aulia Yasmin',
                'payment_number' => '1234567890',
            ],
        ];

        foreach ($payment_methods as $payment_method) {
            PaymentMethod::create($payment_method);
        }
    }
}