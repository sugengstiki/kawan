<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teman>
 */
class TemanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'angkatan' => str_pad(strval(rand(0, 24)), 2, '0', STR_PAD_LEFT), // hasilnya: '00' sampai '24'
            'lulus' => $this->faker->boolean(30), // 30% kemungkinan lulus
        ];
    }
}
