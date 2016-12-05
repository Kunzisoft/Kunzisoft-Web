    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="scrollTo" href="#tophome"><img class="navbar-brand topnav" src="{{ asset('img/logotype.png') }}" alt="logotype" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="external-link" href="https://kunzisoft.blogspot.com/">Blog</a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">TODO&ensp;<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Kunzisoft</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Test</a></li>
                        <li><a href="#">Test2</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Projects&ensp;<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Kunzisoft</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Test</a></li>
                        <li><a href="#">Test2</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-plus"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('project.create') }}">New Project</a></li>
                        <li><a href="#">New Team</a></li>
                        <li class="divider"></li>
                        <li><a href="#">New Donation</a></li>
                        <li class="divider"></li>
                        <li><a href="#">New idea / feature</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                          <li><a href="#">{{ Auth::user()->name }} <span class="caret"></span></a></li>
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
                    </li>
                </ul>
            </div>
        </div>
    </nav>
