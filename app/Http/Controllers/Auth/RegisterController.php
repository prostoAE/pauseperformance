<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller {

    public function __construct() {
        $this->middleware('guest');
    }

    public function showRegistrationForm() {
        return view('auth.register');
    }

    public function register(RegisterRequest $request) {
        User::register(
            $request['name'],
            $request['email'],
            $request['password']
        );

        return redirect()->route('settings.profile')->with('success', 'Check your email and click on the link to verify.');
    }

}
