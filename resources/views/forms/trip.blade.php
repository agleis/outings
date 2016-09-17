@extends('layouts.master')

@section('main')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8 form-col">
        <form class="trip-form" method="POST" action="url('trip')">
          <fieldset class="field-odd">
            <h2>Select The Type of Outing</h2>
            <p>Select the fields below that best describe the type of outing
              you're planning, or add your own!</p>
            <div class="row">
              <div class="col-xs-4">
                <ul class="list-types">
                  @for($i = 0; $i < count($types); $i += 3)
                    <div class="type-list-div">
                      <input type="checkbox" class="sidebar-check" name="{{$types[$i]}}" id="{{$types[$i]}}" @if(old($types[$i])) checked @endif>
                      <label class="label-right" for="{{$types[$i]}}">{{$types[$i]}}</label>
                    </div>
                  @endfor
                </ul>
              </div>
              <div class="col-xs-4">
                <ul class="list-types">
                  @for($i = 1; $i < count($types); $i += 3)
                    <div class="type-list-div">
                      <input type="checkbox" class="sidebar-check" name="{{$types[$i]}}" id="{{$types[$i]}}" @if(old($types[$i])) checked @endif>
                      <label class="label-right" for="{{$types[$i]}}">{{$types[$i]}}</label>
                    </div>
                  @endfor
                </ul>
              </div>
              <div class="col-xs-4">
                <ul class="list-types">
                  @for($i = 2; $i < count($types); $i += 3)
                    <div class="type-list-div">
                      <input type="checkbox" class="sidebar-check" name="{{$types[$i]}}" id="{{$types[$i]}}" @if(old($types[$i])) checked @endif>
                      <label class="label-right" for="{{$types[$i]}}">{{$types[$i]}}</label>
                    </div>
                  @endfor
                </ul>
              </div>
            </div>
          </fieldset>
          <fieldset class="field-even">
            <h2>Enter a Name</h2>
            <p>Enter a name for your trip.</p>
            <input type="text" class="trip-input" name="trip-name">
            <h2>Enter a Description</h2>
            <p>Enter any number of characters to describe your trip.</p.>
            <input type="text" class="trip-input" name="trip-description">
          </fieldset>
        </form>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
@endsection
