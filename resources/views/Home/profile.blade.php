<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css"
        integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>



    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
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

                                <li> <a href="/addProgram" class="primary-btn rounded p-2">Add Program</a></li>

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
                                    <form method="POST" action="{{ route('submit') }}" id="CoachRequestForm">
                                        @csrf
                                        <button type="submit" class="primary-btn  btn-normal"
                                            id="submitCoachRequest">Became Coach</button>
                                    </form>
                                    <div id="successMessage" style="display: none;" class="alert alert-success mt-3">
                                        Congratulations! Your request to become an organizer has been successfully
                                        submitted. We will review your request soon. Thank you!
                                    </div>


                                </li>
                            @endif --}}

                            @if (auth()->check())
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="primary-btn rounded">Log Out</button>
                                </form>
                            @else
                                <a href="{{ route('register') }}" class="primary-btn rounded">Sign Up</a>
                            @endif
                        </div>



                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header><br><br><br><br>
    <!-- Header End -->

    <main class="pt-5">
      
        <section >
            <div class="container py-5">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card mb-4 bg-dark">
                    <div class="card-body text-center">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                      <h5 class="my-3">John Smith</h5>
                      <p class="text-muted mb-1">Full Stack Developer</p>
                      <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                      <div class="d-flex justify-content-center mb-2">
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Follow</button>
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1">Message</button>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="col-lg-8">
                  <div class="card mb-4 bg-dark">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">Johnatan Smith</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">example@example.com</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">(097) 234-5678</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Mobile</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">(098) 765-4321</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card mb-4 mb-md-0 bg-dark">
                        <div class="card-body">
                          <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                          </p>
                          <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 72%" aria-valuenow="72"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%" aria-valuenow="55"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                          <div class="progress rounded mb-2" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 66%" aria-valuenow="66"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card mb-4 mb-md-0 bg-dark">
                        <div class="card-body">
                          <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                          </p>
                          <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 72%" aria-valuenow="72"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%" aria-valuenow="55"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                          <div class="progress rounded mb-2" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 66%" aria-valuenow="66"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

    </main>
    <!-- Js Plugins -->
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main1.js"></script>



</body>

</html>
