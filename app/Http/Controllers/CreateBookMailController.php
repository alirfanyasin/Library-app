<?php

namespace App\Http\Controllers;

use App\Mail\CreateBookMail;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CreateBookMailController extends Controller
{
    public function index(){

        $book = Book::all();
        Mail::to('dilna@gmail.com')->send(new CreateBookMail($book));
    }
}
