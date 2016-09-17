<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{

    /**
     * Returns the index page of the application
     *
     *
     * @return \Illuminate\View\View
     */
    public function index() {
        return view('index');
    }

    /**
     * Return the about page
     *
     *
     * @return \Illuminate\View\View
     */
    public function about() {
        return view('about');
    }

}
