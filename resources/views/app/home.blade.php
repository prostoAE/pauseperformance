<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="navbar-nav">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                    <li><a class="nav-link" href="{{ route('settings.payments') }}">App</a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h1>Home page</h1>
        </div>
    </div>
</div>
