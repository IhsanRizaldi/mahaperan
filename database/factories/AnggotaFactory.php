<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anggota>
 */
class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'angkatan_id' => mt_rand(1,3),
            'nama_anggota' => fake()->name(),
            'jabatan_anggota' => fake()->sentence(2),
            'nama_kampus' => fake()->sentence(2),
            'gambar' => '/gambar/logo.png'
        ];
    }
}
