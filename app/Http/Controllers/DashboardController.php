<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        // $user_id = Auth::user()->id;
        // $status_book = Book::where(['user_id' => $user_id])->get('status');

        // dd($status_book);

        return view('backend.pages.dashboard', [
            'title' => 'Dashboard',
            'data_books' => Book::where('status', 'Public')->get(),
            'data_private_books' => Book::where('status', 'Private')->count(),
            'data_my_book' => Book::where('user_id', auth()->user()->id)->get(),
            'data_uploader' => User::all()->count(),
            'data_last_upload' => Book::where('status', 'Public')->latest('id')->first()
        ]);
    }
}
