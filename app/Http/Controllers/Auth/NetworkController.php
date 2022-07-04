<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class NetworkController extends Controller {

    public function redirect(string $network) {
        return Socialite::driver($network)->redirect();
    }

    public function callback(string $network) {
        dd($network);
    }

}
