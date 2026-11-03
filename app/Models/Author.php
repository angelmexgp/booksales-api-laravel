<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public static function getData()
    {
        return [
            ['id' => 1, 'name' => 'J.K. Rowling'],
            ['id' => 2, 'name' => 'Andrea Hirata'],
            ['id' => 3, 'name' => 'Tere Liye'],
            ['id' => 4, 'name' => 'Dee Lestari'],
            ['id' => 5, 'name' => 'Pramoedya Ananta Toer'],
        ];
    }
}