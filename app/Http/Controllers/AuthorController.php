<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Menampilkan semua author
    public function index()
    {
        return response()->json(Author::all());
    }

    // Menambahkan author
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

    // Menampilkan author berdasarkan ID
    public function show($id)
    {
        $author = Author::findOrFail($id);

        return response()->json($author);
    }

    // Memperbarui author
    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'photo' => 'sometimes|required|string',
            'bio' => 'sometimes|required|string',
        ]);

        $author->update($validated);

        return response()->json([
            'message' => 'Author berhasil diperbarui',
            'data' => $author
        ]);
    }

    // Menghapus author
    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();

        return response()->json([
            'message' => 'Author berhasil dihapus'
        ]);
    }
}
