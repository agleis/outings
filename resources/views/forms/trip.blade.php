@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{URL::asset('jqueryUI/jquery-ui.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('jqueryUI/jquery-ui.structure.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('jqueryUI/jquery-ui.theme.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/chosen.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/form.css')}}">
  <script src="{{URL::asset('jqueryUI/jquery-ui.min.js')}}"></script>
  <script src="{{URL::asset('js/chosen.jquery.min.js')}}"></script>
  <script src="{{URL::asset('js/form.js')}}"></script>
@endsection

@section('main')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8 form-col">
        <form class="trip-form" method="POST" action="{{url('trip')}}">
          {{ csrf_field() }}
          <fieldset class="field field-odd form-group">
            <h2>Select The Type of Outing</h2>
            <p>Select the fields below that best describe the type of outing
              you're planning, or add your own!</p>
            <div class="row">
              <div class="col-xs-4">
                <ul class="list-types">
                  @for($i = 1; $i < count($types) + 1; $i += 3)
                    <div class="type-list-div">
                      <label class="form-check-label label-right" for="{{$types[$i]}}">
                      <input type="checkbox" class="form-check-input sidebar-check" name="tags[]" value="{{$i}}" id="{{$types[$i]}}" @if(old($types[$i])) checked @endif>
                      <p>{{$types[$i]}}</p></label>
                    </div>
                  @endfor
                </ul>
              </div>
              <div class="col-xs-4">
                <ul class="list-types">
                  @for($i = 2; $i < count($types) + 1; $i += 3)
                    <div class="type-list-div">
                      <label class="form-check-label label-right" for="{{$types[$i]}}">
                      <input type="checkbox" class="form-check-input sidebar-check" name="tags[]" value="{{$i}}" id="{{$types[$i]}}" @if(old($types[$i])) checked @endif>
                      <p>{{$types[$i]}}</p></label>
                    </div>
                  @endfor
                </ul>
              </div>
              <div class="col-xs-4">
                <ul class="list-types">
                      @for($i = 3; $i < count($types) + 1; $i += 3)
                    <div class="type-list-div">
                      <label class="form-check-label label-right" for="{{$types[$i]}}">
                      <input type="checkbox" class="form-check-input sidebar-check" name="tags[]" value="{{$i}}" id="{{$types[$i]}}" @if(old($types[$i])) checked @endif>
                      <p>{{$types[$i]}}</p></label>
                    </div>
                  @endfor
                </ul>
              </div>
            </div>
          </fieldset>
          <fieldset class="field field-even form-group">
            <h2>Enter a Name</h2>
            <p>Enter a name for your trip.</p>
            <div class="row">
              <div class="col-xs-6">
                <input type="text" class="trip-input form-control" name="name">
              </div>
            </div>
            <h2>Enter a Description</h2>
            <p>Add a description for the trip.</p.>
            <div class="row">
              <div class="col-xs-12">
                <textarea class="trip-input form-control" name="description"></textarea>
              </div>
            </div>
          </fieldset>
          <fieldset class="field field-odd form-group">
            <h2>Select the Group</h2>
            <p>Select the group this event belongs in, or create a new one.</p>
            <div class="radio-group">
              <div class="radio-button">
                <input type="radio" id="public" name="visibility" value="public" checked>
                <label class="label-right" for="public"><h3>Public</h3><p>Make this event viewable to anyone.</p></label>
              </div>
              <div class="radio-button">
                <input type="radio" id="private" name="visibility" value="private">
                <label class="label-right" for="private"><h3>Private</h3><p>Make this event viewable only to the selected group.</p></label>
              </div>
              <div class="selects" id="selects-groups" style="display:none;">
                <select name="group" id="group-select" class="chosen">
                  @foreach($groups as $id => $name)
                    <option value="{{$id}}">{{$name}}</option>
                  @endforeach
                  <option value="new">New Group...</option>
                </select>
                <div class="selects" id="new-group" style="display:none;">
                  <h3>Add Group</h3>
                  <p>Select a name for the new group, and add users to it.</p>
                  <input type="text" name="group-name">
                  <select data-placeholder="Choose some users..." name="users[]" class="chosen" multiple>
                    @foreach($users as $id => $name)
                      <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset class='field field-even form-group'>
            <h2>Enter a Location</h2>
            <p>Enter the trip location (e.g. 1600 Pennsylvania Ave., Yosemite National Park, etc.).</p>
            <div class="row">
              <div class="col-xs-8">
                <div class="form-text">
                  <label class="label-left" for="address">Address: </label>
                  <input type="text" class="trip-input form-control" name="address" id="address">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <div class="form-text">
                  <label class="label-left" for="city">City: </label>
                  <input type="text" class="trip-input form-control" name="city" id="city">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-1">
                <div class="form-text">
                  <label class="label-left" for="state">State: </label>
                  <input maxlength="2" type="text" class="trip-input form-control" name="state" id="state">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-2">
                <div class="form-text">
                  <label class="label-left" for="zip">Zip: </label>
                  <input maxlength="10" type="text" class="trip-input form-control" name="zip" id="zip">
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset class="field field-odd form-group">
            <h2>Enter the Dates</h2>
            <p>Enter the dates on which your trip starts and ends.</p>
            <div class="row">
              <div class="col-xs-4">
                <div class="form-text">
                  <label class="label-left" for="trip-start">Start: </label>
                  <input type="date" class="trip-input form-control" name="trip-start" id="trip-start">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <div class="form-text">
                  <label class="label-left" for="trip-end">End: </label>
                  <input type="date" class="trip-input form-control" name="trip-end" id="trip-end">
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset class="field field-even submit form-group">
            <input type="submit" class="btn btn-primary" name="submit" value="Add New Trip">
          </fieldset>
        </form>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('.chosen').each(function() {
        $(this).chosen({width:'500px'});
      });
    });
  </script>
@endsection
