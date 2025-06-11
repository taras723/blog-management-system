<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create('en_US');
        
        $title = $faker->words(8, true);
        $body = $faker->paragraphs(10, true);

        $readingSpeed = 200;
        $words = str_word_count($body);
        $readingTime = ceil($words / $readingSpeed);

        return [
            'title' => $title,
            'excerpt' => $faker->sentence(40),
            'body' => '<p>'.$body.'</p>',
            'image_path' => $faker->randomElement(['/images/posts/1.jpg', '/images/posts/2.jpg', '/images/posts/3.jpg', '/images/posts/4.jpg', '/images/posts/5.jpg', '/images/posts/6.jpg', '/images/posts/7.jpg', '/images/posts/8.jpg', '/images/posts/10.jpg', '/images/posts/11.jpg', '/images/posts/12.jpg']),
            'slug' => Str::slug($title),
            'is_published' => true,
            'user_id' => 1,
            'category_id' => $faker->numberBetween(1, 15),
            'read_time' => $readingTime,
            'change_user_id' => 1,
        ];
    }
}
