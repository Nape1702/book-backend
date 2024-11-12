<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Validation\ValidationException;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();  // Get all books
        return response()->json($books);  // Return books as a JSON response
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer',
            'genre' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Create the new book
        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'published_year' => $request->published_year,
            'genre' => $request->genre,
            'description' => $request->description,
        ]);

        return response()->json($book, 201);  // Return the created book
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the book by ID
        $book = Book::find($id);

        // If book not found, return 404 response
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        return response()->json($book, 200);  // Return the book as JSON
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer',
            'genre' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Find the book by ID
        $book = Book::find($id);

        // If book not found, return 404 response
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        // Update the book
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'published_year' => $request->published_year,
            'genre' => $request->genre,
            'description' => $request->description,
        ]);

        return response()->json($book, 200);  // Return the updated book
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the book by ID
        $book = Book::find($id);

        // If book not found, return 404 response
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        // Delete the book
        $book->delete();

        return response()->json(['message' => 'Book deleted successfully'], 200);  // Return success message
    }
}
