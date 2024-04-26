<!DOCTYPE html>
<html lang="zxx">
@include('Home.layouts.header')
<body>
  
    <!-- Header End -->
@include('Home.layouts.nav') <br><br><br><br>

<!--Main layout-->
<main class="mt-5 pt-4">
    <div class="container mt-5">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-md-6 mb-4">
                <img src="{{ $product->getFirstMediaUrl('images') }}" class="img-fluid" alt="" />
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">
                <!--Content-->
                <div class="p-4">
                    <div class="mb-3">
                        
                            <span class="badge bg-dark me-1">{{ $product->type->name }}</span>
                        
                     
                    </div>

                    <p class="lead">
                        
                        <span>${{ $product->price }}</span>
                    </p>

                    <strong><p style="font-size: 20px;">Description</p></strong>

                    <p>{{ $product->description }} Et dolor suscipit libero eos atque quia ipsa sint voluptatibus! Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>
                    <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    style="background-color: #54a054b1 ">
                    Buy Now
                    <i class="fas fa-shopping-cart ms-1"></i>
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
                                <form class="d-flex justify-content-left" action="{{ route('session', ['product' => $product->id]) }}" method="POST">
                                    <!-- Default input -->
                                    
                                    <div class="form-outline me-1" style="width: 100px;">
                                        <label class="form-label">How much you want?</label>
                                        <input type="number" value="1" class="form-control" name="quantity"/>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="user_id" value="{{Auth::id()}}">
                                    </div>
                                    <button class="btn btn-primary ms-1" type="submit">
                                        Save
                                        
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                 
                </div>
                <!--Content-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

        <hr/>

     

       
    </div>
</main>

@include('Home.layouts.footer')