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
            'category_id' => \App\Models\Category::all()->random(),
            'type_id' => \App\Models\Type::all()->random(),
            'title' => $this->faker->word(),
            'address' => $this->faker->text($maxNbChars=200),
            'zipcode' => '1122334455',
            'description' => $this->faker->paragraph(30),
            'price' => $this->faker->numberBetween(1000000, 100000000),
            'bedrooms' => $this->faker->numberBetween(1, 15),
            'has_store' => true,
            'has_garage' => true,
            'area' => $this->faker->numberBetween(100, 1500),
            'published' => true,
            'phone' => '09' . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9),
            'agent_name' => 'رضا رضایی',
            'image' => 'img/homes/home-1.jpg',
            'image_1' => 'img/homes/home-2.jpg',
            'image_2' => 'img/homes/home-3.jpg',
            'image_3' => 'img/homes/home-4.jpg',
            'image_4' => 'img/homes/home-5.jpg',
            'image_5' => 'img/homes/home-6.jpg',
            'image_6' => 'img/homes/home-inside-1.jpg',
        ];
    }
}
