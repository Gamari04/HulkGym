<!DOCTYPE html>
<html lang="zxx">
@include('Home.layouts.header')

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header End -->
@include('Home.layouts.nav')
    <!-- Header End -->

    <main class="pt-5">
      
        <section >
            <div class="container py-5">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card mb-4 bg-dark">
                    <div class="card-body text-center">
                      <img src="{{ asset('images/profile.png') }}" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                      <h5 class="my-3"></h5>
                      <p class="text-muted mb-1">{{ $user->name }}</p>
                      
                      <div class="d-flex justify-content-center mb-2">
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn " style="background-color:darkgreen">Edit Profile</button>

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
                          <p class="text-muted mb-0">{{ $user->name }}</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">{{ $user->email}}</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0"> 234-5678</p>
                        </div>
                      </div>
                      <hr>
                      
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
                  <h2 class="text-primary">The trainings Program You Follow</h2>
                  <div class="row m-5">
                    @foreach($followedTrainingPrograms as $trainingProgram)
                        <div class="col-12 col-md-4 mb-4 ml-3 mr-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ $trainingProgram->getFirstMediaUrl('images') }}" alt="Card image cap" style="width: 100%; height: 200px; object-fit: cover;">
                                <div class="card-body">
                                  <h3>{{ $trainingProgram->title }}</h3>
                                    <p class="card-text">{{ $trainingProgram->description }}Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                </div>
              </div>
            </div>
          </section>

    </main>
    <!-- Js Plugins -->

@include('Home.layouts.footer')
