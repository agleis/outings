<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Outings</title>
    <link rel="stylesheet" property="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/front-image.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/navbar.css')}}">
    <script src="{{URL::asset('js/main.js')}}"></script>
		@yield('head')
	</head>

	<body>
      @include('includes.navbar')

      @yield('main')
  </body>
</html>
