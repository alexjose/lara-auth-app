<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\SocialAccountService;
use Socialite;

class SocialAuthController extends Controller
{

    public function redirect($provider)
    {
        if (!config("services.$provider"))
            abort('404');
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider, SocialAccountService $service)
    {
        $user = $service->createOrGetUser($provider, Socialite::driver($provider)->user());

        auth()->login($user);

        return redirect()->to('/home');
    }
}
