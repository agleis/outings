<?php

namespace App\Http\Controllers;

use App;

use App\User;
use App\Trip;

use Illuminate\Http\Request;

use App\Http\Requests;

class MessageController extends Controller
{

    /**
     * Posts a message to the trip with ID $id
     *
     * @param Request $request The HTTP Request
     * @param int $id The ID of the trip on which the message is posted.
     * @return \Illuminate\View\View
     */
    public function post(Request $request, $id) {
        $comment = new App\Comment;
        $comment->text = $request->get('comment');
        $comment->save();
        $comment->user()->associate(User::find(1));
        $comment->trip()->associate(Trip::find($id));
        $comment->save();
        return redirect()->route('trip', ['id' => $id]);
    }

}
