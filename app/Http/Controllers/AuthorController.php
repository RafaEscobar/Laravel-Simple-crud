<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Illuminate\Container\Attributes\Auth;
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

    public function store(Request $request)
    {
        try {
            Author::create($request->all());
            session()->flash('success', 'Autor registrado');
            return redirect()->route('authors.index');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function edit($id)
    {
        $authors = Author::all();
        $currentAuthor = Author::where('id', $id)->get();
        return view('author.index', compact('authors', 'currentAuthor'));
    }

    public function update(Request $request, $id)
    {

    }
}
