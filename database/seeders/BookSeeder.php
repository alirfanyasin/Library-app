<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Book::create([
        //     'title' => 'Ruang Waktu',
        //     'author' => 'Tere Liye',
        //     'published' => 'Februari 2019',
        //     'synopsis' => 'Hello World lorem ipsum',
        //     'status' => 'Public',
        //     'file_book' => 'test.pdf',
        //     'cover_book' => 'cover.jpg',
        // ]);

        \App\Models\Book::factory(8)->create();
    }
}
