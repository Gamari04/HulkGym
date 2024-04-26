@include('admin.layouts.header')
<style>
    :root {
--gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
}

body {
background: #111 !important;
}

.card {
background: #222;
border: 1px solid #dd2476;
color: rgba(250, 250, 250, 0.8);
margin-bottom: 2rem;
}

.btn {
border: 5px solid;
border-image-slice: 1;
background: var(--gradient) !important;
-webkit-background-clip: text !important;
-webkit-text-fill-color: transparent !important;
border-image-source:  var(--gradient) !important; 
text-decoration: none;
transition: all .4s ease;
}

.btn:hover, .btn:focus {
  background: var(--gradient) !important;
-webkit-background-clip: none !important;
-webkit-text-fill-color: #fff !important;
border: 5px solid #fff !important; 
box-shadow: #222 1px 0 10px;
text-decoration: underline;
}
</style>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


       @include('admin.layouts.sidebar')


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="background-color: #54a054b1 ">
                Add Product
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-secondary text-light">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data"
                                class="shadow p-4 rounded mt-5" style="width: 90%; max-width: 50rem;">
                                @csrf
                                <h1 class="text-center pb-5 display-4 fs-3">Add New Product</h1>

                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control border text-dark"
                                        placeholder="Enter a title" name="name">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <input type="text" class="form-control border text-dark"
                                        placeholder="Enter a title" name="description">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="number" class="form-control border text-dark"
                                        placeholder="Enter a title" name="price">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Quantity</label>
                                    <input type="number" class="form-control border text-dark"
                                        placeholder="Enter a title" name="quantity">

                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label text-primary">Select the type of the
                                        product :</label>
                                    <select class="form-select form-select-sm mb-3"
                                        aria-label=".form-select-sm example"
                                        style="border: 2px solid rgb(34, 139, 34);" name="type_id">
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">
                                                {{ $type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label text-primary">Choose a Pic</label>
                                    <input class="form-control bg-dark" type="file" id="formFile"
                                        name='image'>
                                </div>
                                <input type="hidden" class="form-control" name="user_id" value="1">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Add Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto mt-4">
                <div class="row">
                    @foreach ($products as $product)
                        
                    
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $product->getFirstMediaUrl('images') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->name}}</h5>
                                {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
                                <p class="card-text">{{$product->description}} Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo dolorum, maiores minima cumque architecto consequuntur doloremque voluptates amet delectus, animi facere. Totam libero dolorum facilis, aut sint laboriosam ullam eos.</p>
                                <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
                                <a href="#" class="btn "><i class="fab fa-github"></i> Github</a>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>


   @include('admin.layouts.footer')
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
