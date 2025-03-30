<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        // untuk ambil semua data dari database
        return view('index', compact('books'));
        // ini untuk display halaman utama
    }

    public function create()
    {
        return view('create');
        // ini untuk kasih display tempat untuk input buku
    }

    public function store(Request $request)
    {
        $request->validate([
        // untuk masukin data yg diinput ke sistem validasi
            'title' => 'required',
            // biar title required diinput
            'author' => 'required'
            // biar author required diinput
        ]);
        // Ini sistem validasinya biar semuanya keisi kecuali deskripsi

        Book::create($request->all());
        // untuk masukin datanya ke data baru
        return redirect()->route('index')->with('success', 'Buku berhasil ditambahkan');
        // ini untuk biar pas dah kelar input title, author, dan deskripsi dan dah lewat sistem validasinya user bakal keredirect ke halaman utama dimana bisa liat semua buku yang sudah ditambahkan dan jika berhasil akan display message bahwa sudah berhasil menambahkan buku ke sistemnya
    }


    public function show(Book $book)
    {
        return view('show', compact('book'));
        // untuk display semua data tentang buku buku yang udah ditambahkan ke sistem
    }

    public function edit(Book $book)
    {
        return view('edit', compact('book'));
        // ini untuk kasih display usernya ke halaman untuk edit buku
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            // untuk cek data yang sudah diinput ke validasi
            'title' => 'required',
            // biar title required dimasukin
            'author' => 'required',
            // biar author required dimasukin
        ]);
        // ini untuk validasi lagi pas mau update data bukunya

        $book->update($request->all());
        // untuk ubah data yang udah ada ke data yg user mau
        return redirect()->route('index')->with('success', "Buku berhasil diupdate");
        // ini untuk redirect user ke halaman utama lagi pas dah kelar update datanya
    }

    public function destroy(Book $book)
    {
        $book->delete();
        // delete buku
        return redirect()->route('index')->with('success', "Buku berhasil dihapus");
        // ini untuk redirect user ke halaman utama habis delete buku yang user mau
    }
}
