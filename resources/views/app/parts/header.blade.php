<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <form action="#">
        <div class="row">
            <div class="col-sm-6">
                <select class="form-control ml-3 form-select" id="single-select-optgroup-field" data-placeholder="Choose one thing">
                    @foreach($organisations as $key => $value)
                        <optgroup label="{{$key}}">
                            @foreach($value as $organisation)
                                <option {{$organisation->active ? "selected" : ""}}>{{$organisation->name}}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                    {{--<optgroup label="Group 1">
                        <option>Reactive</option>
                        <option>Solution</option>
                        <option>Conglomeration</option>
                    </optgroup>
                    <optgroup label="Group 2">
                        <option>Algoritm</option>
                        <option>Holistic</option>
                    </optgroup>--}}
                </select>
            </div>
            <div class="col-sm-6">
                <button type="button" class="btn btn-block btn-outline-primary ml-3">Add New</button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>

    <ul class="navbar-nav">
        <!-- Authentication Links -->
        @guest
            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
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
</nav>
