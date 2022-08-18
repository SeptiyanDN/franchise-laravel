<?php

namespace Database\Factories;

use App\Models\PemilikBisnis;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PemilikBisnis>
 */
class PemilikBisnisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PemilikBisnis::class;
    public function definition()
    {
        return [
            //generate faker data user_id only number 1
            'user_id' => 1,
            'nomor_pemilik_bisnis' => $this->faker->randomNumber(),
            'nama_lengkap' => $this->faker->name,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date(),
            'alamat' => $this->faker->address,
            'nomor_telepon' => $this->faker->phoneNumber,
            'status_verifikasi' => $this->faker->randomElement(['Belum diverifikasi', 'Sudah diverifikasi']),
            
        ];
    }
}
