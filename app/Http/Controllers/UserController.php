<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{

    /**
     * Returns the index page of the application
     *
     *
     * @return \Illuminate\View\View
     */
    public function login() {
        return view('login');
    }

    /**
     * Return the about page
     *
     *
     * @return \Illuminate\View\View
     */
    public function register() {
        return view('register');
    }

}
