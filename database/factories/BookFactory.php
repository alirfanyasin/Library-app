<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'slug' => Str::slug(fake()->name(), '-'),
            'author' => fake()->name(),
            'published' => now(),
            'synopsis' => fake()->sentence(),
            'status' => 'Public',
            'file_book' => 'file.pdf',
            'cover_book' => 'https://marketplace.canva.com/EAFHJRzYEVc/1/0/1003w/canva-biru-putih-sederhana-perahu-kertas-sampul-buku-novel-o-AFZ0HeZJM.jpg',
        ];
    }
}
