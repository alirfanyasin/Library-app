<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirect_to_facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handle_facebook_callback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $findUser = User::where('facebook_id', $user->id)->first();

            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('my/dashboard');
            } else {
                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'name' => $user->name,
                    'facebook_id' => $user->id,
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
