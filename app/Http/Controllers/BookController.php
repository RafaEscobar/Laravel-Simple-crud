<?php

namespace App\Http\Controllers;

use App\Http\Requests\Store\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Cover;

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
            $book = Book::create($request->validated());

            $image = $request->file('cover');
            $imageName = time() . "_" . $image->getClientOriginalName();
            $image->move(public_path('covers'), $imageName);

            Cover::create([
                'image_path' => $imageName,
                'book_id' => $book->id
            ]);

            session()->flash('success', 'Libro registrado');
            return redirect()->route('welcome');
        } catch (\Throwable $th) {
            dd($th);
            throw $th->getMessage();
        }
    }
}
