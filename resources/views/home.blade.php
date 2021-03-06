@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{URL::asset('css/sidebar.css')}}">
  <script src="{{URL::asset('js/home.js')}}"></script>
@endsection

@section('main')
  <div class="container-fluid">
    <div class="row main-content">
      @if(Session::has('result') && Session::get('result'))
        <div class="alert alert-success fade in trip-alert">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Your {{Session::get('type')}} has been added to the database.
        </div>
      @elseif(Session::has('result') && !Session::get('result'))
        <div class="alert alert-danger fade in trip-alert">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Failure.</strong> Failed to add {{Session::get('type')}} to database.
        </div>
      @endif
      <div class="col-xs-2 sidebar">
        <form class="sidebar-form" method="GET" action="{{URL::route('filter')}}">
          <h2 class="sidebar-header">Filter By...</h2>
          <div class="sidebar-btn-placeholder">
            <input type="submit" class="btn sidebar-btn btn-success" value="Filter Results" id="sidebar-button" style="display:none;">
          </div>
          <div class="sidebar-items">
            @include('includes.sidebar-item', [
              'title' => 'Distance',
              'items' => [
                'dist_one' => 'One Mile',
                'dist_five' => 'Five Miles',
                'dist_ten' => 'Ten Miles',
                'dist_twenty' => 'Twenty Miles',
                'dist_fifty' => 'Fifty Miles'
              ]
            ])
            <hr>
            @include('includes.sidebar-item', [
              'title' => 'Type',
              'items' => [
                'type_hike' => 'Hiking/Backpacking',
                'type_climb' => 'Climbing',
                'type_road' => 'Road Trip',
                'type_bike' => 'Cycling',
                'type_hang' => 'Hangout',
                'type_business' => 'Business',
                'type_other' => 'Other'
              ]
            ])
            <hr>
            @include('includes.sidebar-item', [
              'title' => 'Size',
              'items' => [
                'size_five' => '1-5 people',
                'size_ten' => '5-10 people',
                'size_twenty' => '10-20 people',
                'size_plus' => '20+ people'
              ]
            ])
          </div>
        </form>
      </div>
      <div class="col-xs-6 col-xs-offset-1">
        <div class="trip-container">
          <h1>Trips You May Be Interested In</h1>
          <div class="trips-groups">
            @foreach($group_trips as $trip)
              @include('includes.trip-info', ['trip' => $trip, 'even' => true])
            @endforeach
            <?php $i = 0; ?>
            @foreach($trips as $trip)
              @include('includes.trip-info', ['trip' => $trip, 'even' => $i%2])
              <?php $i++; ?>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="upload-button">
    <div class="add-button-group" id="add-group-group" style="display:none;">
      <div>
        <label class="add-label" for="add-group">Add Group</label>
        <button type="button" id="add-group" class="btn btn-success add-button"><span class="glyphicon glyphicon-user"></span></button>
      </div>
    </div>
    <div class="add-button-group">
      <div>
        <label class="add-label" for="add-trip" style="display:none;">Add Trip</label>
        <button type="button" id="add-trip" class="btn btn-success add-button"><span class="glyphicon glyphicon-plus"></span></button>
      </div>
    </div>
  </div>
@endsection
