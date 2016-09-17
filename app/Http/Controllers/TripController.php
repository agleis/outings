<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TripController extends Controller
{

  private $types = [
    'Backpacking', 'Hiking', 'Canoeing', 'Cycling', 'Hanging Out',
    'Road Trip', 'Vacation', 'Business', 'Organization'
  ];

    /**
     * Shows the trip creation page.
     *
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('forms.trip', ['types' => $this->types]);
    }

}
