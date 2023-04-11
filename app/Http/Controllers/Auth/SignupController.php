<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Auth\Signup;
use App\Models\User;

class SignupController extends Controller
{

    // =============================================
    //              S I G N - U P
    // =============================================
    public function index()
    {
        return view('backend.pages.auth.sign_up', [
            'title' => 'Sign Up'
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:100',
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255']
        ]);

        $validate['password'] = bcrypt($validate['password']);
        $validate['role'] = 'user';
        $validate['avatar'] = 'avatar/avatar.png';
        User::create($validate);

        return redirect('/sign-in')->with('success', 'Berhasil membuat akun');
    }

    // =============================================
    //              S I G N - I N
    // =============================================
}
