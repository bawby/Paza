<?php

namespace Database\Factories;

use App\Enums\County;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Company::class;

    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'slug' => fake()->unique()->slug(),
            'kra_pin' => strtoupper(fake()->bothify('A#########')),
            'email' => fake()->unique()->companyEmail(),
            'phone' => fake()->unique()->phoneNumber(),
            'website' => fake()->unique()->url(),
            'postal_address' => fake()->address(),
            'postal_code' => fake()->postcode(),
            'county' => County::cases()[array_rand(County::cases())]->value,
            'town' => fake()->city(),
            'address' => fake()->buildingNumber(),
            'street' => fake()->streetName(),
            //'description' => fake()->paragraph(),
        ];
    }
}
