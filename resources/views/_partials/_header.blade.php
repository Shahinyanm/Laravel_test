<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="#"><img src="{{asset('assets')}}/imglogo/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="header-top-menu">


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <ul class="nav navbar-nav notika-top-nav">
                        <li class="nav-item dropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>                            <div role="menu" class="dropdown-menu search-dd animated flipInX">
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
