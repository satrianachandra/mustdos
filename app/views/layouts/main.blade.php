<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>My To-Do App</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- CSS are placed here -->
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-theme.css') }}
    {{ HTML::style('css/custom.css') }}
</head>
<body>
	
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::route('mustdos.index')}}">The MustDos</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
             @if (Auth::check())
            <li class="{{{ (Request::is('mustdos') ? 'active' : '') }}}"><a href="{{{ URL::to('mustdos') }}}">Home</a></li>
            <li class="{{{ (Request::is('mustdos/create') ? 'active' : '') }}}"><a href="{{{ URL::to('mustdos/create') }}}">New Mustdos</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings</a></li>
                <li><a href="{{{ URL::to('logout') }}}">Logout</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Info</li>
                <li><a href="#">Help</a></li>
              </ul>
            </li>
             @else
              <li><a href="{{{ URL::to('login') }}}">Login</a></li>
              <li><a href="{{{ URL::to('user/create') }}}">Sign Up</a></li>
              @endif

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


	  <div class="container">
  		<div id="content">
    			@if (Session::has('message'))
    				<div class="flash alert">
    					<p>{{ Session::get('message') }}</p>
    				</div>
    			@endif
     
    			@yield('main')
  		</div>
    </div>
	

	 <!-- Scripts are placed here -->
    {{ HTML::script('js/jquery-2.1.1.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/custom.js') }}
</body>
</html>