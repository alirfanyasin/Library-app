<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect_to_google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handle_google_callback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('google_id', $user->id)->first();

            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('my/dashboard');
            } else {
                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'name' => $user->name,
                    'google_id' => $user->id,
                    'avatar' => $user->avatar,
                    'password' => Hash::make('password')
                ]);

                Auth::login($newUser);
                return redirect()->intended('my/dashboard');
            }
        } catch (Exception $th) {
            dd($th->getMessage());
        }
    }
}
