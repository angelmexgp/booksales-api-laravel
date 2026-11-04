<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Menampilkan semua genre
    public function index()
    {
        return response()->json(Genre::all());
    }

    // Menambahkan genre
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre = Genre::create($validated);

        return response()->json([
            'message' => 'Genre berhasil ditambahkan',
            'data' => $genre
        ], 201);
    }

    // Menampilkan genre berdasarkan ID
    public function show($id)
    {
        $genre = Genre::findOrFail($id);

        return response()->json($genre);
    }

    // Memperbarui genre
    public function update(Request $request, $id)
    {
        $genre = Genre::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
        ]);

        $genre->update($validated);

        return response()->json([
            'message' => 'Genre berhasil diperbarui',
            'data' => $genre
        ]);
    }

    // Menghapus genre
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();

        return response()->json([
            'message' => 'Genre berhasil dihapus'
        ]);
    }
}
