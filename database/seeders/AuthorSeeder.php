<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'name' => 'J.K. Rowling',
                'photo' => 'jk-rowling.jpg',
                'bio' => 'Penulis seri Harry Potter.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Andrea Hirata',
                'photo' => 'andrea-hirata.jpg',
                'bio' => 'Penulis novel Laskar Pelangi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tere Liye',
                'photo' => 'tere-liye.jpg',
                'bio' => 'Penulis berbagai novel populer Indonesia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dee Lestari',
                'photo' => 'dee-lestari.jpg',
                'bio' => 'Penulis novel dan karya sastra Indonesia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pramoedya Ananta Toer',
                'photo' => 'pramoedya.jpg',
                'bio' => 'Sastrawan dan penulis Indonesia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}