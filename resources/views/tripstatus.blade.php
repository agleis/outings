@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{URL::asset('css/form.css')}}">
@endsection

@section('main')
  @if(Session::get('result'))
    <div class="alert alert-success fade in trip-alert">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Success!</strong> Your trip has been added to the database.
    </div>
  @else
    <div class="alert alert-danger fade in trip-alert">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Failure.</strong> Failed to add trip to database.
    </div>
  @endif
@endsection
