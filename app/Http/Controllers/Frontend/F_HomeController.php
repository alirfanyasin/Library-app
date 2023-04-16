<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;

class F_HomeController extends Controller
{
    public function index()
    {
        $data_books = Book::where('status', 'Public')->latest()->take(4)->get();
        $testimonials = Testimonial::all();

        return view('frontend.pages.home', [
            'title' => 'Home',
            'data_books' => $data_books,
            'testimonials' => $testimonials
        ]);
    }
}
