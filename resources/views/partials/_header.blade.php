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
                                        <li><a href="{{ url('/') }}">home</a></li>
                                        <li><a href="{{ url('/sponsor') }}">Sponsor</a></li>
                                        <li><a href="{{ url('/about') }}">About</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                        <li><a href="{{ url('/login') }}">Login</a></li>
                                    @else
                                        <li><a href="{{ url('/stars') }}">Stars</a></li>
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