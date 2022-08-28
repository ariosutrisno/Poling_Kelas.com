<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" id="navbar-auth">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control search" type="search" placeholder="Search" aria-label="Search">
        </form>
        <div class="pull-right pl-2 mt-1" id="bell">
            <i class="fa fa-bell-o fa-3px bell" aria-hidden="true"></i>
        </div>
        <div class="pull-right pt-2 mt-1">
            <img src="{{ asset('img_poling/user.png') }}" width="50px" alt="">
        </div>
        <div class="pull-right" id="user">
            <ul class="nav pull-right">
                @guest
                    <li class="menu">
                        <a class="nav-link" style="color: white"href="{{ route('login-user') }}">
                            <i class="fa fa-key" aria-hidden="true">
                            </i> {{ __('Login') }}</a>
                    </li>
                @else
                    <li class="dropdown mt-2"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome,
                            {{ Auth::user()->name }}
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="menu">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                        class="fa fa-sign-out" aria-hidden="true" style="background: transparent"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </ul>
</div>
