<div class="container-fluid">
  <div class="navbar row">
    <div class="col-xs-9">
      <div class="row">
        <div class="col-xs-5">
          <div class="title">
            <a href="{{URL::route('index')}}"><img src="{{URL::asset('img/outings_primary_transparent.png')}}" height="94" alt="Outings"></a>
          </div>
        </div>
        <div class="col-xs-7">
          @if(Auth::check())
            <?php $groups = Auth::user()->groups; $trips = Auth::user()->trips; ?>
            <div class="nav">
              <div class="nav-btn">
                <a class="btn btn-default" href="{{url('home')}}">Home</a>
                <div class="btn-group">
                  <a class="btn btn-default" href="#">My Groups</a>
                  <ul class="dropdown-menu" role="menu">
                    @foreach($groups as $group)
                      <li><a href="{{url('home')}}">{{$group->name}}</a></li>
                    @endforeach
                  </ul>
                </div>
                <div class="btn-group">
                  <a class="btn btn-default" href="#">My Trips</a>
                  <ul class="dropdown-menu" role="menu">
                    @foreach($trips as $trip)
                      <li><a href="{{url('home')}}">{{$trip->name}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
    <div class="col-xs-2 col-xs-offset-1">
      <div class="buttons">
        @if(Auth::check())
          <div class="btn-group">
            <a href="{{route('profile', ['id' => Auth::user()->id])}}" class="btn btn-default">
              <span class="glyphicon glyphicon-user"></span>My Profile
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{URL::route('profile', ['id' => Auth::user()->id])}}">Profile</a>
            </ul>
          </div>
        @else
          <a href="{{url('register')}}" class="btn btn-default">Sign Up</a>
          <a href="{{url('login')}}" class="btn btn-primary">Log In</a>
        @endif
      </div>
    </div>
  </div>
</div>
