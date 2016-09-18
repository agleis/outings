<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Login</title>
    <link rel="stylesheet" property="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/front-image.css')}}">
    <link rel="stylesheet" href="{{URL::asset('jqueryUI/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('jqueryUI/jquery-ui.structure.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('jqueryUI/jquery-ui.theme.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/chosen.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/login.css')}}">
    <script src="{{URL::asset('jqueryUI/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('js/chosen.jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/login.js')}}"></script>
		@yield('head')
	</head>

	<body>
      <div class="title2">
        <a href="{{URL::route('index')}}"><img src="{{URL::asset('img/outings_primary_transparent.png')}}" height="94" alt="Outings"></a>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8 form-col">
            <form class="trip-form" method="POST" action="{{route('postRegister')}}">
              {{ csrf_field() }}
              <fieldset class="field field-even form-group">
                <h1>Join Outings Today</h1>
                <h3>Username</h3>
                  <div class="row">
                    <div class="col-xs-4">
                    </div>
                    <div class="col-xs-4">
                      <input type="text" class="trip-input form-control" name="username">
                    </div>
                    <div class="col-xs-4">
                    </div>
                  </div>
                <h3>Email Address</h3>
                  <div class="row">
                    <div class="col-xs-4">
                    </div>
                    <div class="col-xs-4">
                      <input type="text" class="trip-input form-control" name="email">
                    </div>
                    <div class="col-xs-4">
                    </div>
                  </div>
                <h3>Password</h3>
                  <div class="row">
                    <div class="col-xs-4">
                    </div>
                    <div class="col-xs-4">
                      <input type="text" class="trip-input form-control" name="password">
                    </div>
                    <div class="col-xs-4">
                    </div>
                  </div>
                  <h3>Confirm your Password</h3>
                    <div class="row">
                      <div class="col-xs-4">
                      </div>
                      <div class="col-xs-4">
                        <input type="text" class="trip-input form-control" name="passwordconfirm">
                      </div>
                      <div class="col-xs-4">
                      </div>
                    </div>
                  <div class="buttons">
                    <a href="{{route('index')}}" class="btn btn-default">Back</a>
                    &nbsp;
                    &nbsp;
                    <a href="{{route('postRegister')}}" class="btn btn-primary">Sign Up</a>
                  </div>
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
      @yield('main')
  </body>
</html>
