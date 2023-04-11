<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;


class F_BookController extends Controller
{
    public function index()
    {
        return view('frontend.pages.books', [
            'title' => 'Books',
        ]);
    }

    public function read_data()
    {
        $books = DB::table('books')
            ->orderBy('id', 'desc')
            ->get();
        return view('frontend.pages.data.data_books')->with([
            'data_books' => $books
        ]);
    }

    public function detail(Book $slug)
    {
        return view('frontend.pages.detail_book', [
            'title' => 'Detail Buku',
            'data_book' => $slug
        ]);
    }
}
