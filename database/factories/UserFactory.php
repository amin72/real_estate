<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $phones = [
            '09381234560',
            '09381234561',
            '09381234562',
            '09381234563',
            '09381234564',
            '09381234565',
            '09381234566',
            '09381234500',
            '09381234568',
            '09381234569',
            '09381234507',
            '09381234527',
            '09381234537',
            '09381234547',
            '09381234557',
            '09381234567',
            '09381234577',
            '09381234587',
            '09381234597',
            '09381234437',
            '09381234337',
            '09381234237',
            '09381234137',
        ];

        return [
            'name' => $this->faker->name(),
            'phone' => $phones[rand() % 22],
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                // 'email_verified_at' => null,
            ];
        });
    }
}
