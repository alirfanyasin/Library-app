<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Book;
use PDO;

class ProfileController extends Controller
{
    public function index()
    {
        return view('backend.pages.profile', [
            'title' => 'Profile',
            'data_books' => Book::all() // Request data all book in database
        ]);
    }


    // ================================================================
    //                      D A T A    B O O K
    // ================================================================

    public function read_book()
    {
        return view('backend.pages.data.data_profile_book')->with([
            'data_books' => Book::all()
        ]);
    }
    public function read_setting()
    {
        return view('backend.pages.data.data_profile_setting');
    }

    public function detail_book(Book $slug)
    {
        return view('backend.pages.profile.my-book', [
            'title' => 'Detail My Book',
            'detail_my_book' => $slug
        ]);
    }

    public function edit_book(Book $slug)
    {
        return view('backend.pages.profile.edit-book', [
            'title' => 'Edit My Book',
            'data_book' => $slug
        ]);
    }

    public function delete_book($id){
        $data = Book::find($id);
        Storage::delete($data->file_book);
        Storage::delete($data->cover_book);
        Book::destroy($id);
        return redirect('my/profile');
    }
}
