<div class="container-fluid">
  <div class="navbar row">
    <div class="col-xs-9">
      <div class="row">
        <div class="col-xs-5">
          <div class="title">
            <a href="{{URL::route('index')}}"><img src="{{URL::asset('img/logo.jpg')}}" height="70" alt="Outings"></a>
          </div>
        </div>
        <div class="col-xs-7"></div>
      </div>
    </div>
    <div class="col-xs-2 col-xs-offset-1">
      <div class="buttons">
        @if(Auth::check())
          <div class="btn-group">
            <button type="button" class="btn profile-button dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-user"></span>My Profile
            </button>
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
