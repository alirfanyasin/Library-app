<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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


    public function update_book(Request $request, $id) {

        $data_file_in_database = Book::where('id', $id)->get();
        dd($data_file_in_database);


        $validate = $request->validate([
            'title' => ['required', 'max:255', 'unique:books'],
            'author' => ['required', 'max:255'],
            'synopsis' => ['required'],
            'status' => ['required'],
            'file_book' => 'required|file|max:70000|mimes:pdf',
            'cover_book' => 'required|file|image|max:1024|mimes:jpg,png,jpeg',
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
        
        
        
        // if($file_book == $data_file_in_database) {
        //     return true;
        // }else {
        //     return false;
        // }

        Book::where('id', $id)->update($validate);
        return redirect('my/profile');
    }

    public function delete_book($id){
        $data = Book::find($id);
        Storage::delete($data->file_book);
        Storage::delete($data->cover_book);
        Book::destroy($id);
        return redirect('my/profile');
    }

    // ================================================================
    //                      S E T T I N G
    // ================================================================


    public function read_setting()
    {
        return view('backend.pages.data.data_profile_setting');
    }
}



