<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class F_HomeController extends Controller
{
    public function index()
    {
        $data = Book::where('status', 'Public')->latest()->take(4)->get();
        return view('frontend.pages.home', [
            'title' => 'Home',
            'data_books' => $data
        ]);
    }
}
