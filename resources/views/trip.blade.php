@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{URL::asset('css/sidebar.css')}}">
@endsection

@section('main')
  <div class="container-fluid">
    <div class="row main-content">
      <div class="col-sm-2 sidebar">
        <h2>Group:</h2>
        <a href="{{URL::route('group', ['id' => $trip->group->id])}}" class="indent">{{$trip->group->name}}</a>
        <h2>Trippers: </h2>
        @if(count($trip->users) == 0)
          <p>Sorry, it looks like no one is going at this time. Invite some friends!</p>
        @else
          @foreach($trip->users as $user)
            <img width="50" height="50" src="{{$user->profile_picture or URL::asset('img/default-user-image.png')}}">
          @endforeach
        @endif
      </div>
      <div class="col-sm-6 col-sm-offset-1">
        <h1>{{$trip->name}}</h1>
        <p>{{$trip->description}}</p>
        <h2>Message Board</h2>
        <div class="message-board">
          @foreach($trip->comments as $comment)
            @include('includes.comment')
          @endforeach
        </div>
        <div class="message-form">
          <form class="form-group form-inline message-form" method="GET" action="{{url('message', ['id' => $trip->id])}}">
            <label for="comment">Message</label>
            <textarea name="comment" id="comment" class="comment form-control" placeholder="Add a comment..."></textarea>
            <input type="submit" class="btn btn-default" name="message" value="Submit">
          </form>
        </div>
      </div>
      <div class="col-sm-2 col-sm-offset-1 sidebar">

      </div>
    </div>
  </div>
@endsection
