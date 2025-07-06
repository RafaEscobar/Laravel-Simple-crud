<?php

namespace App\Http\Controllers;

use App\Http\Requests\Store\BookRequest;
use App\Models\Author;
use App\Models\Book;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $authors = Author::all()->pluck('full_name', 'id');
        return view('welcome', compact('books', 'authors'));
    }

    public function create()
    {
        $currentYear = date('Y');
        $years = range($currentYear, $currentYear - 80);
        $years = array_combine($years, $years);
        $authors = Author::all()->pluck('full_name', 'id');

        return view('book.form', compact('authors', 'years'));
    }

    public function store(BookRequest $request)
    {
        try {
            dd($request->validated());
            Book::create($request->validated());
            session()->flash('success', 'Libro registrado');
            return redirect()->route('welcome');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
