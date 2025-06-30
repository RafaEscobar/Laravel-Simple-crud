<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $authors = Author::all()->pluck('name', 'id');
        return view('welcome', compact('books', 'authors'));
    }
}
