<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use DB;
use Laravel\Socialite\Facades\Socialite;

class NetworkController extends Controller {

    public function redirect(string $network) {
        return Socialite::driver($network)->redirect();
    }

    public function callback(string $network) {
        $data = Socialite::driver($network)->user();

        try {
            $user = User::where('email', $data->getEmail())->first();
            if (!is_null($user) && $user->exists()) {
                $user->avatar = $data->getAvatar();
                $user->save();
                Auth::login($user);
                return redirect()->intended();
            }

            if ($data->getEmail() && !is_null($user) && $user->exists()) {
                throw new \DomainException('User with this email is already registered.');
            }

            $user = DB::transaction(function () use ($network, $data) {
                return User::registerByNetwork($network, $data);
            });

            Auth::login($user);
            return redirect()->intended();

        } catch (\DomainException $e) {
            return redirect()->route('login')->with('error', $e->getMessage());
        }
    }

}
