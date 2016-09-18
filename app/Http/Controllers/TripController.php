<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Trip;
use App\User;
use App\Group;

use Session;

use Illuminate\Http\Request;

use App\Http\Requests;

class TripController extends Controller
{

    /**
     * Shows the trip creation page.
     *
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        $types = Tag::lists('name', 'id');
        $groups = Group::lists('name', 'id');
        $users = User::lists('name', 'id');
        return view('forms.trip', ['types' => $types, 'groups' => $groups, 'users' => $users]);
    }

    /**
     * Posts a new trip, and returns success or failure.
     *
     * @param Request $request The HTTP Request
     * @return \Illuminate\View\View
     */
    public function post(Request $request) {
        $new_trip = new Trip;
        $new_trip->name = $request->get('name');
        $new_trip->description = $request->get('description');
        if($request->get('visibility') == "private") {
          $group = $request->get('group');
          if($group == "new") {
            $new_group = new Group;
            $new_group->name = $request->get('group-name');
            $new_group->founder = 1;
            $new_group->admin = 1;
            $new_group->save();
            $new_group->users()->sync($request->get('users'));
            $new_group->save();
            $new_trip->group()->associate($new_group);
          }
          else {
            $new_trip->group()->associate(Group::find($group));
          }
        }
        $address = $request->get('address');
        $city = $request->get('city');
        $state = $request->get('state');
        $zip = $request->get('zip');
        $new_address = "$address $city, $state $zip";
        $new_trip->location = $new_address;
        $new_trip->save();
        $result = system("C:\Python27\python.exe Python\\GeoInfo.py $new_trip->id");
        return $result;
        $new_trip->start = $request->get('trip-start');
        $new_trip->end = $request->get('trip-end');
        $new_trip->save();
        if($request->has('tags')) $new_trip->tags()->sync($request->get('tags'));
        else $new_trip->tags()->sync([]);
        $result = $new_trip->save();
        return redirect()->route('home')->with('result', $result)->with('type', 'trip');
    }

    /**
     * Shows the trip with Id $id
     *
     * @param int $id The ID of the trip to show
     * @return \Illuminate\View\View
     */
    public function show($id) {

        return view('trip', ['trip' => Trip::find($id)]);
    }

}
