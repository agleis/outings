<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{

    /**
     * Returns the login page
     *
     *
     * @return \Illuminate\View\View
     */
    public function login() {
        return view('login');
    }

    /**
     * Returns the register page
     *
     *
     * @return \Illuminate\View\View
     */
    public function register() {
        return view('register');
    }

    public function postRegister(Request $request) {
        $user = User::create(['name' => $request->get('username'), 'email' => $request->get('email'), 'password' => $request->get('password')]);
        return var_dump($user);
    }
}
