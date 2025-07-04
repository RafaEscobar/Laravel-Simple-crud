<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        try {
            $authors = Author::all();
            return view('author.index', compact('authors'));
        } catch (\Throwable $th) {
            // Lanzar un mensaje de error interno
        }
    }

    public function create()
    {
        return view('author.form');
    }

    public function store(Request $request)
    {
        try {
            Author::create($request->all());
            session()->flash('success', 'Autor registrado');
            return redirect()->route('authors.index');
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }

    public function edit(Author $author)
    {
        try {
            return view('author.form', ['author' => $author, 'isCreate' => false]);
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }


    public function update(Request $request, Author $author)
    {
        try {
            $author->update($request->all());
            return redirect()->route('authors.index');
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }
}
