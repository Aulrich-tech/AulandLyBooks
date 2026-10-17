<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $allowed = ['genre', 'author'];   // whitelist
        $query = Book::query();

        foreach ($allowed as $field) {
            if ($request->filled($field)) {
                $query->where($field, $request->input($field));
            }
        }

        return $query->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre'  => 'required|string|max:255',
            'pages'  => 'required|integer|min:1',
        ]);

        return response()->json(Book::create($data), 201);
    }

    public function show(Book $book)
    {
        return $book;
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'title'  => 'sometimes|required|string|max:255',
            'author' => 'sometimes|required|string|max:255',
            'genre'  => 'sometimes|required|string|max:255',
            'pages'  => 'sometimes|required|integer|min:1',
        ]);

        $book->update($data);
        return $book;
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->noContent();
    }
}