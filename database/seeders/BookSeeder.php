<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'description' => 'Petualangan Harry Potter di dunia sihir.',
                'price' => 150000,
                'stock' => 10,
                'cover_photo' => 'harry-potter.jpg',
                'genre_id' => 1,
                'author_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laskar Pelangi',
                'description' => 'Kisah perjuangan anak-anak Belitung dalam mendapatkan pendidikan.',
                'price' => 85000,
                'stock' => 15,
                'cover_photo' => 'laskar-pelangi.jpg',
                'genre_id' => 2,
                'author_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Bumi',
                'description' => 'Petualangan Raib dan teman-temannya di dunia paralel.',
                'price' => 90000,
                'stock' => 12,
                'cover_photo' => 'bumi.jpg',
                'genre_id' => 1,
                'author_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Perahu Kertas',
                'description' => 'Kisah perjalanan cinta dan impian dua orang anak muda.',
                'price' => 95000,
                'stock' => 8,
                'cover_photo' => 'perahu-kertas.jpg',
                'genre_id' => 2,
                'author_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Bumi Manusia',
                'description' => 'Kisah kehidupan dan perjuangan Minke pada masa kolonial.',
                'price' => 110000,
                'stock' => 7,
                'cover_photo' => 'bumi-manusia.jpg',
                'genre_id' => 3,
                'author_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}