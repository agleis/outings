<?php

namespace App\Http\Controllers;

use App\User;
use App\Group;

use Illuminate\Http\Request;

use App\Http\Requests;

class GroupController extends Controller
{
  /**
   * Shows the group creation page.
   *
   *
   * @return \Illuminate\View\View
   */
  public function create() {
      $users = User::lists('name', 'id');
      return view('forms.group', ['users' => $users]);
  }

  /**
   * Creates a new group, and returns success or failure.
   *
   * @param Request $request The HTTP Request
   * @return \Illuminate\View\View
   */
  public function post(Request $request) {
      $new_group = new Group;
      $new_group->name = $request->get('name');
      $new_group->description = $request->get('description');
      if($request->get('admin') == "yes") {
        $new_group->admin = $request->get('admin-select');
      }
      $new_group->founder = 1;
      $path = $request->file('file')->move('img');
      $new_group->picture = $path;
      $new_group->save();
      $new_group->users()->sync($request->get('users'));
      $result = $new_group->save();
      return redirect()->route('home')->with('result', $result)->with('type', 'group');
  }

  /**
   * Shows the group with Id $id
   *
   * @param int $id The ID of the group to show
   * @return \Illuminate\View\View
   */
  public function show($id) {
      return view('index');
  }
}
