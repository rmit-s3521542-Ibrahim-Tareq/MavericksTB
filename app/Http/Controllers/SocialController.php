<?php

namespace App\Http\Controllers;

use App\SocialAccountService;
use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite as Socialize;

use App\Http\Requests;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function loginWithFacebook(){
        return Socialize::with('facebook')->redirect();
    }

    public function handleProviderCallback(SocialAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

        auth()->login($user);

        return redirect()->to('/account');
    }
}
