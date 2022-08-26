<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" id="navbar-auth">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control search" type="search" placeholder="Search" aria-label="Search">
        </form>
        <div class="pull-right" id="bell">
            <i class="fa fa-bell-o fa-3px bell" aria-hidden="true"></i>
        </div>
        <div class="pull-right pt-1">
            <img src="{{ asset('img_poling/user.png') }}" width="50px" alt="">
        </div>
        <div class="pull-right" id="user">
            <ul class="nav pull-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, Ario
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="menu"><a href="/auth/logout"><i class="fa fa-sign-out" aria-hidden="true"
                                    style="background: transparent"></i>
                                Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </ul>
</div>
