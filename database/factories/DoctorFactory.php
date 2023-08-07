<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\City;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cities = City::all()->pluck('id');

        $specialties = [
            'Cardiologia',
            'Dermatologia',
            'Endocrinologia',
            'Gastroenterologia',
            'Neurologia',
        ];

        return [
            'name' => $this->faker->name(),
            'specialty' =>$this->faker->randomElement($specialties),
            'city_id' => $this->faker->randomElement($cities)
        ];
    }
}
