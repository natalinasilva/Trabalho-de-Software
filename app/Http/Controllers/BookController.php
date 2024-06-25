<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->titulo = $request->input('titulo');
        $book->subtitulo = $request->input('subtitulo');
        $book->autor = $request->input('autor');
        $book->edicao = $request->input('edicao');
        $book->editora = $request->input('editora');
        $book->ano_de_publicacao = $request->input('ano_de_publicacao');
        $book->save();

        return redirect()->route('books.index');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->titulo = $request->input('titulo');
        $book->subtitulo = $request->input('subtitulo');
        $book->autor = $request->input('autor');
        $book->edicao = $request->input('edicao');
        $book->editora = $request->input('editora');
        $book->ano_de_publicacao = $request->input('ano_de_publicacao');
        $book->save();

        return redirect()->route('books.index');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index');
    }
}
