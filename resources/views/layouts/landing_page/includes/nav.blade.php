    <nav class="navbar navbar-expand-lg navbar-white fixed-top" id="mainNav">
        <div class="container">
            @foreach ($companyProfile as $item)
                <a class="" href="#page-top"><img src="{{ asset($item->website_logo) }}" alt="..." style="height: 40px;" /></a>
                <span class="text-uppercase"
                    style="font-size: 1rem;margin-left: 1rem;font-family: Poppins;color: #fff;font-weight: bold">
                    {{ $item->name }}
                </span>
            @endforeach
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Sejarah</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#excellence">Keunggulan</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#service">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <!-- @auth
                        <div class="dropdown profile-picture-container">
                            <img src="{{ asset('assets/img/bruce-mars.jpg') }}" alt="profile_picture"
                                class="profile-picture-image rounded-circle dropdown-toggle" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false" role="button">
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item disabled" href="#">{{ auth()->user()->name }}</a></li>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <li><button class="dropdown-item" type="submit">Logout</button></li>
                                </form>
                            </ul>
                        @endauth -->
                        @guest
                            <div class="nav-item d-flex gap-1">
                                <!-- <li class="nav-item"><a class="btn btn-primary text-white fw-bold"
                                        href="{{ route('login') }}">Login</a></li> -->
                                <!-- <li class="nav-item"><a class="btn btn-secondary text-white fw-bold"
                                        href="{{ route('register') }}">Register</a>
                                </li> -->
                            </div>
                        @endguest
                    </div>
                </ul>
            </div>
        </div>
    </nav>
