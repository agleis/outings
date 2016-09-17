@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{URL::asset('css/sidebar.css')}}">
@endsection

@section('main')
  <div class="container-fluid">
    <div class="row main-content">
      <div class="col-xs-2 sidebar">
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
      </div>
      <div class="col-xs-10">
        {{-- main code --}}
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $(".sidebar-title").click(function() {
        $(".sidebar-title").parent().find("ul").toggle();
      });
    });
  </script>
@endsection
