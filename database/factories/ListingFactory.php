<?php

namespace Database\Factories;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Listing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::all()->random(),
            'title' => $this->faker->word(),
            'address' => $this->faker->text($maxNbChars=250),
            'city' => 'اهواز',
            'zipcode' => '1122334455',
            'description' => $this->faker->paragraph(30),
            'price' => $this->faker->numberBetween(1000000, 100000000),
            'bedrooms' => $this->faker->numberBetween(1, 15),
            'has_store' => true,
            'has_garage' => true,
            'sqft' => $this->faker->numberBetween(100, 1500),
            'is_published' => true,
            'image' => 'http://localhost:8888/homes/home-1.jpg',
            'image_1' => 'http://localhost:8888/homes/home-2.jpg',
            'image_2' => 'http://localhost:8888/homes/home-3.jpg',
            'image_3' => 'http://localhost:8888/homes/home-4.jpg',
            'image_4' => 'http://localhost:8888/homes/home-5.jpg',
            'image_5' => 'http://localhost:8888/homes/home-6.jpg',
            'image_6' => 'http://localhost:8888/homes/home-inside-1.jpg',
        ];
    }
}
