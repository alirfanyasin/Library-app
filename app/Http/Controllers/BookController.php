<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Book;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = DB::table('books')
        ->orderBy('id', 'desc')
        ->get();
        return view('backend.pages.books', [
            'title' => 'Books',
            'data_books' => $books
        ]);
    }

    public function read_data()
    {
        $books = DB::table('books')
            ->orderBy('id', 'desc')
            ->get();


        return view('backend.pages.data.data_books')->with([
            'data_books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.book.add_book', [
            'title' => 'Create New Book',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => ['required', 'max:255', 'unique:books'],
            'author' => ['required', 'max:255'],
            'synopsis' => ['required'],
            'status' => ['required'],
            'file_book' => 'required|file|mimes:pdf',
            'cover_book' => 'required|file|image|mimes:jpg,png,jpeg',
            'category' => ['required'],
            'published' => ['required']
        ]);

        $file_book = $request->file('file_book');
        $namaFileBook = $file_book->hashName();

        $cover_book = $request->file('cover_book');
        $namaCoverBook = $cover_book->hashName();

        $validate['slug'] = Str::slug($request->title, '-');
        $validate['published'] = $request->published;
        $validate['user_id'] = auth()->user()->id;
        $validate['file_book'] = $request->file('file_book')->storeAs('file-book', $namaFileBook, 'public');
        $validate['cover_book'] = $request->file('cover_book')->storeAs('cover-book', $namaCoverBook, 'public');

        Book::create($validate);
        return redirect('my/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $slug)
    {
        return view('backend.pages.book.detail_book', [
            'title' => 'Detail Book',
            'data_books' => $slug,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function search(Request $request) {
        $keyword = $request->key;
        $books = Book::where('title', 'LIKE', '%' . $keyword . '%')->get();

        return view('backend.pages.books', [
            'title' => $keyword,
            'data_books' => $books
        ]);
        
    }
}
