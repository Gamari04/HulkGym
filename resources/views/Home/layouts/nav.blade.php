

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="./classes.html">Classes</a></li>
                <li><a href="./services.html">Services</a></li>
                <li><a href="./team.html">Our Team</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="/about">About us</a></li>
                        <li><a href="./class-timetable.html">Classes timetable</a></li>
                        <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
                        <li><a href="./team.html">Our team</a></li>
                        <li><a href="./gallery.html">Gallery</a></li>
                        <li><a href="./blog.html">Our blog</a></li>
                        <li><a href="./404.html">404</a></li>
                    </ul>
                </li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>

    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="/">
                            <img src="images/VIRUS.png" alt="" class="mb-0"
                                style="width: 100px; margin:0%;padding-top:0%;">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        @if (auth()->user() && auth()->user()->hasRole('user'))
                            <ul>
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="./class-details.html">Classes</a></li>
                                {{-- <li><a href="./services.html">Services</a></li> --}}
                                <li><a href="./team.html">Our Team</a></li>

                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="/about">About us</a></li>
                                        <li><a href="./class-timetable.html">Classes timetable</a></li>
                                        <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
                                        <li><a href="./team.html">Our team</a></li>
                                        <li><a href="./gallery.html">Gallery</a></li>
                                        <li><a href="./blog.html">Our blog</a></li>
                                        <li><a href="./404.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contact</a></li>


                            </ul>
                        @endif
                        @if (auth()->user() && auth()->user()->hasRole('coach'))
                            <ul>
                                <li class="active"><a href="/">Home</a></li>

                                <li><a href="./class-details.html">My Programs</a></li>


                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="/about">About us</a></li>
                                        <li><a href="./class-timetable.html">Classes timetable</a></li>
                                        <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
                                        <li><a href="./team.html">Our team</a></li>
                                        <li><a href="./gallery.html">Gallery</a></li>
                                        <li><a href="./blog.html">Our blog</a></li>
                                        <li><a href="./404.html">404</a></li>
                                    </ul>
                                </li>

                                <li> <a href="{{ route('training_programs.store') }}"
                                        class="primary-btn  btn-normal">Add Program</a></li>

                            </ul>
                        @endif
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="to-social">
                            {{-- <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a> --}}
                            {{-- @if (auth()->user() && auth()->user()->hasRole('user'))
                                <li class="nav-item">
                                    <button type="button" class="primary-btn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Became Coach
                                    </button>


                                    <div id="successMessage" style="display: none;" class="alert alert-success mt-3">
                                        Congratulations! Your request to become a coach has been successfully
                                        submitted. We will review your request soon. Thank you!
                                    </div>


                                </li>
                            @endif --}}
                            {{-- <div id="mobile-menu-wrap"></div> --}}
                            <div class="navbar-nav">
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                        <img class="rounded-circle me-lg-2" src="images/profile.png" alt=""
                                            style="width: 40px; height: 40px;">
                                        @if (auth()->check())
                                            <span class="d-none d-lg-inline-flex">{{ auth()->user()->name }}</span>

                                            <div
                                                class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                                                <a href="/profile" class="dropdown-item">My Profile</a>
                                                <a href="#" class="dropdown-item">Settings</a>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button class="dropdown-item bg-light" >Log Out</button>
                                                </form>
                                         
                                            </div>
                                        @endif
                                </div>
                            </div>
                            {{-- @if (auth()->check())
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="primary-btn">Log Out</button>
                                </form>
                            @else
                                 --}}
                            @unless (auth()->check())
                                <<a href="{{ route('register') }}" class="primary-btn">Sign Up</a>
                                @endunless

                        </div>



                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>