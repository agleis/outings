<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{

    /**
     * Shows the initial home page.
     *
     * @return \Illuminate\View\View
     */
    public function home() {
        return view('home');
    }

}
