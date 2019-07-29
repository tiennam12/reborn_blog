<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;

class SocialController extends Controller
{
    public function redirect($provider) {
    	return Socialite::driver($provider)->redirect();
    }

    public function callback($provider) {
    	$userSocial = Socialite::driver($provider)->stateless()->user();
        $user = User::where(['email' => $userSocial->getEmail()])->first();

        if ($user) {
            Auth::login($user);

            return redirect('/');
        } else {
            $user = User::create([
                'fullname' => $userSocial->getName(),
                'email' => $userSocial->getEmail(),
                'image' => $userSocial->getAvatar(),
                'provider_id' => $userSocial->getId(),
                'provider' => $provider,
                'token' => $userSocial->token,
            ]);
        }

        Auth::login($user);

        return redirect()->route('home');
    }
}
