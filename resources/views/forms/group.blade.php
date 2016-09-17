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
        <form class="trip-form" method="POST" action="{{url('group')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <fieldset class="field field-odd form-group">
            <h2>Enter a Name</h2>
            <p>Enter a name for your group.</p>
            <div class="row">
              <div class="col-xs-6">
                <input type="text" class="trip-input form-control" name="name">
              </div>
            </div>
            <h2>Enter a Description</h2>
            <p>Add a description for the group.</p.>
            <div class="row">
              <div class="col-xs-12">
                <textarea class="trip-input form-control" name="description"></textarea>
              </div>
            </div>
          </fieldset>
          <fieldset class="field field-even form-group">
            <h2>Add Users</h2>
            <p>Select the users to add to this group.</p>
            <select data-placeholder="Choose some users..." name="users[]" class="chosen" multiple>
              @foreach($users as $id => $name)
                <option value="{{$id}}">{{$name}}</option>
              @endforeach
            </select>
          </fieldset>
          <fieldset class="field field-odd form-group">
            <h2>Upload Group Photo</h2>
            <p>Upload a photo for the group.</p>
            <label class="custom-file">
              <input type="file" id="file" name="file" class="custom-file-input form-control" accept="image/*">
              <span class="custom-file-control"></span>
            </label>
          </fieldset>
          <fieldset class="field field-even form-group">
            <h2>Administration</h2>
            <p>Does this group need an administrator? This is ideal for business and organization groups.</p>
            <div class="radio-group">
              <div class="radio-button">
                <input type="radio" id="admin_yes" class="trigger" name="admin" value="yes">
                <label class="label-right" for="public"><h3>Admin</h3><p>Give this group an administrator.</p></label>
              </div>
              <div class="selects" id="selects-show" style="display:none;">
                <div class="selects" id="new-admin">
                  <h3>Select Admin</h3>
                  <p>Pick a user to be an admin.</p>
                  <select data-placeholder="Choose an admin..." name="admin-select" class="chosen">
                    @foreach($users as $id => $name)
                      <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="radio-button">
                <input type="radio" id="admin_no" class="untrigger" name="admin" value="no" checked>
                <label class="label-right" for="private"><h3>No admin</h3><p>Everyone in this group has admin responsibilities.</p></label>
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
