<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between"> <a href="{{ url('/') }}"
            class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <h1>{{ config('app.name') }}<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown"><a href="{{ url('/') }}"><span>Home</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ url('/theme/home') }}" class="active">Home</a></li>
                        <li><a href="{{ url('/theme/home2') }}">Home 2</a></li>
                        <li><a href="{{ url('/theme/home3') }}">Home 3</a></li>
                        <li><a href="{{ url('/theme/home4') }}">Home 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ url('/') }}#about">About</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/') }}#services">Services</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/') }}#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/') }}#team">Team</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li> <a href="#">Column 1 link 1</a> <a href="#">Column 1 link 2</a> <a href="#">Column 1
                                link 3</a></li>
                        <li> <a href="#">Column 2 link 1</a> <a href="#">Column 2 link 2</a> <a href="#">Column 3
                                link 3</a></li>
                        <li> <a href="#">Column 3 link 1</a> <a href="#">Column 3 link 2</a> <a href="#">Column 3
                                link 3</a></li>
                        <li> <a href="#">Column 4 link 1</a> <a href="#">Column 4 link 2</a> <a href="#">Column 4
                                link 3</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ url('/') }}#contact">Contact</a></li>
            </ul> <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav> <a class="btn-getstarted scrollto" href="{{ url('/admin') }}">Get Started</a>
    </div>
</header>
