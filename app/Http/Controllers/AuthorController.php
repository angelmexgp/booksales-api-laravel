<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return response()->json($authors);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|string',
            'bio' => 'required|string',
        ]);

        $author = Author::create($validated);

        return response()->json([
            'message' => 'Author berhasil ditambahkan',
            'data' => $author
        ], 201);
    }
}