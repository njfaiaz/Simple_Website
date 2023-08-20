<nav class="navbar navbar-expand-lg bg-primary px-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('frontend/assets') }}/IMAGES/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-4 fw-bold text-white active" aria-current="page" href="{{ route('user.dashboard') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link ms-4 ms-lg-0 fw-bold dropdown-toggle" href="./our-service.html"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        Our Service
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">Contracting </a>
                            <ul class="dropdown-menu">
                                <li> <a href="#" class="dropdown-item">A</a> </li>
                                <li> <a href="#" class="dropdown-item">B</a> </li>
                                <li> <a href="#" class="dropdown-item">C</a> </li>
                                <li> <a href="#" class="dropdown-item">D</a> </li>
                                <li> <a href="#" class="dropdown-item">E</a> </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle " href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">Cleaning </a>
                            <ul class="dropdown-menu">
                                <li> <a href="#" class="dropdown-item">A</a> </li>
                                <li> <a href="#" class="dropdown-item">B</a> </li>
                                <li> <a href="#" class="dropdown-item">C</a> </li>
                                <li> <a href="#" class="dropdown-item">D</a> </li>
                                <li> <a href="#" class="dropdown-item">E</a> </li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">Hospitality</a></li>
                        <li><a class="dropdown-item" href="#">Trading</a></li>
                        <li><a class="dropdown-item" href="#">Service</a></li>
                        <li><a class="dropdown-item" href="#">Travel Agency</a></li>
                        <li><a class="dropdown-item" href="#">Training</a></li>
                        <li><a class="dropdown-item" href="#">Library Faculty</a></li>
                        <li><a class="dropdown-item" href="#">Real Estate</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 fw-bold" href="./our-project.html">Our Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 fw-bold" href="{{ route('user.boardOf') }}">Board of Directors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 fw-bold" href="./inqueary.html">Inquiry </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 fw-bold" href="./jobApply.html">Job Apply </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 fw-bold" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link ms-4 ms-lg-0 fw-bold dropdown-toggle" href="./our-service.html"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        Setting
                    </a>
                    <ul class="dropdown-menu">
                        @auth
                            <li><a class="dropdown-item" href="{{ route('user.profile')}}">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.ChangePassword')}}">Password Change</a></li>

                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                            </li>
                        @else
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        @endauth

                    </ul>
                </li>


            </ul>

        </div>
    </div>
</nav>
