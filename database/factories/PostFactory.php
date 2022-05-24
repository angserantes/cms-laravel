<?php

// namespace Database\Factories;

// use Illuminate\Database\Eloquent\Factories\Factory;

// class PostFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array
//      */
//     public function definition()
//     {
//         return [
//             //
//         ];
//     }


// }


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'slug' => $this->faker->slug(),
        'body' => $faker->text
    ];
});

