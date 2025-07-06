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
        try {
            $books = Book::all();
            $authors = Author::all()->pluck('full_name', 'id');
            return view('welcome', compact('books', 'authors'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            $currentYear = date('Y');
            $years = range($currentYear, $currentYear - 80);
            $years = array_combine($years, $years);
            $authors = Author::all()->pluck('full_name', 'id');

            return view('book.form', compact('authors', 'years'));
        } catch (\Throwable $th) {
            throw $th;
        }
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
            throw $th;
        }
    }

    public function destroy(Book $book)
    {
        try {
            $book->delete();
            session()->flash('success', 'Libro eliminado.');
            return redirect()->route('welcome');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
