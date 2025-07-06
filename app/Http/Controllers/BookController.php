<?php

namespace App\Http\Controllers;

use App\Http\Requests\Store\BookRequest;
use App\Http\Requests\Update\UpdateBookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Cover;
use Illuminate\Support\Facades\File;

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

    public function edit(Book $book)
    {
        try {
            $currentYear = date('Y');
            $years = range($currentYear, $currentYear - 80);
            $years = array_combine($years, $years);
            $authors = Author::all()->pluck('full_name', 'id');

            return view('book.form', [
                'authors' => $authors,
                'years' => $years,
                'isCreate' => false,
                'book' => $book
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        try {
            $book->update($request->validated());

            if ($request->file('cover')) {
                $oldImagePath = public_path('covers/' . $book->cover->image_path);
                File::delete($oldImagePath);

                $image = $request->file('cover');
                $imageName = time() . "_" . $image->getClientOriginalName();
                $image->move(public_path('covers'), $imageName);

                $book->cover->update([
                    'image_path' => $imageName
                ]);
            }

            return redirect()->route('welcome');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(Book $book)
    {
        try {
            $imagePath = public_path('covers/' . $book->cover->image_path);
            File::delete($imagePath);
            $book->delete();
            session()->flash('success', 'Libro eliminado.');
            return redirect()->route('welcome');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
