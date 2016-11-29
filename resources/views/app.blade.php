<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Styles -->
    <link rel="stylesheet" id="font-awesome-css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="/css/style.css" rel="stylesheet">
      <link href="/css/stars.css" rel="stylesheet">
  </head>
  <body>
      <header>
            <span id="menu-icon">
				<i class="fa fa-bars" aria-hidden="true" style="display: inline-block;"><span> MENU</span></i>
            </span>
            <div class="menu" style="position: fixed; top: 0; right: 0; left: 0;">
				<div class="menu-inner">
						<div class="menu-actions">
							<a href="#" class="link-close">
								<i class="fa fa-times" aria-hidden="true"></i>
							</a>
						</div><!-- /.sidebar-actions -->
				        <nav>
				            <div class="menu-main-menu-container">
                                <ul class="primary-menu">
                                    <!-- Authentication Links -->
                                    @if (Auth::guest())
                                        <li><a href="{{ url('/login') }}">Login</a></li>
                                    @else
                                        <li><a href="{{ url('/stars') }}">Stars</a></li>
                                        <li><a href="{{ url('stars/create') }}">Add Star</a></li>
                                        <li><a href="{{ url('/email') }}">Email</a></li>
                                        <li><a href="{{ url('/register') }}">New User</a></li>
                                        <li>
                                            <a href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </nav><!-- .main-navigation -->
																<hr>
				        <div class="menu-contact">
                            @if (Auth::guest())
									<p>Lorem ipsum<br>Lorem ipsum dolor sit amet,<br>Clare, Ireland<br></p>
									<br>
									<p>t. <a href="tel:+353 (00) 000 0000">+353 (00) 000 0000</a><br></p>
                            @else
                                <p>Hi {{ Auth::user()->name }}</p>
                            @endif
				        </div>
				</div><!-- /.sidebar-inner -->
            </div>
      </header>
      
          @yield('content')
      
      
      @yield('footer')
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/js/scripts.js"></script>
  </body>
</html>