<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

use Auth;

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
     * Does the login
     *
     * @param Request $request The HTTP Request
     * @return \Illuminate\View\View
     */
    public function doLogin(Request $request) {
      $login = Auth::attempt(['email' => $request->get('username'), 'password' => $request->get('password')]);
      if($login) {
        return redirect()->route('home');
      }
      else {
        return redirect()->route('index');
      }
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
        $login = Auth::login($user);
        if($login) {
          return redirect()->route('home');
        }
        else {
          return redirect()->route('index');
        }
    }

    /**
     * Shows the user profile
     *
     * @return \Illuminate\View\View
     */
    public function show() {
        return view('index');
    }
}
