@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{URL::asset('css/sidebar.css')}}">
@endsection

@section('main')
  <div class="container-fluid">
    <div class="row main-content">
      <div class="col-xs-2 sidebar">
        <form class="sidebar-form" method="GET" action="{{URL::route('filter')}}">
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
                'type_bike' => 'Cycling/Mountain Biking',
                'type_hang' => 'Hangout',
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
      <div class="col-xs-10">
        {{-- main code --}}
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $(".sidebar-list").each(function() {
        checkChildren($(this));
      });
      var checks = 0;
      $(".sidebar-title").click(function() {
        var ul = $(this).parent().find("ul");
        ul.toggle(200);
      });
      $(".sidebar-check").click(function() {
        if($(this).is(":checked")) checks++;
        else checks--;
        if(checks > 0) {
          $("#sidebar-button").show(300);
          $(".sidebar-btn-placeholder").height(30);
          $(".sidebar-btn-placeholder").slideDown(400);
          checkChildren($(this).parent().parent());
        }
        else {
          $("#sidebar-button").hide(300);
          $(".sidebar-btn-placeholder").height(10);
          $(".sidebar-btn-placeholder").slideUp(400);
          checkChildren($(this).parent().parent());
        }
      });
    });

    function checkChildren(ul) {
      var checked = false;
      ul.children().find('.sidebar-check').each(function() {
        if($(this).is(":checked")) checked = true;
      });
      if(checked) ul.parent().find('.sidebar-title').css('color', '#449d44');
      else ul.parent().find('.sidebar-title').css('color', '#333');
    }
  </script>
@endsection
