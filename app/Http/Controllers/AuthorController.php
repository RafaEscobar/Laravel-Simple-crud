<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
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

    public function store(Request $request)
    {
        try {
            Author::create($request->all());
            dd("Autor registrado exitosamente");
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
