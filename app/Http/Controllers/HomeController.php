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

    /**
     * Filters the search results based on the given request.
     *
     * @param Request $request The HTTP Request
     * @return \Illuminate\View\View
     */
    public function filter(Request $request) {
        return view('home');
    }

}
