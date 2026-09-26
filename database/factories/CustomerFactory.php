<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Waybill\Customer\Infrastructure\Persistence\Eloquent\CustomerModel;

#[UseModel(CustomerModel::class)]
class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'description' => fake()->optional()->sentence(),
        ];
    }
}
