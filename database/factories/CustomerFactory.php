<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Waybill\Customer\Infrastructure\Persistence\Eloquent\CustomerModel;

/**
 * @extends Factory<CustomerModel>
 */
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
