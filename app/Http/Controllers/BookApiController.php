<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookApiController extends Controller
{
    public function getBooks() {

    }

    public function createBook(Request $request) {
        $book = Book::create([
            'name' => $request->name,
            'review' => $request->review
        ]);

        return response()->json([
            "message" => "record created"
        ], 201);
    }
}
