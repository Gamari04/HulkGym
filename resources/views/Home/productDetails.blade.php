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
                                    


                                    <div class="col-md-4 col-6 mb-3">
                                        <label class="mb-2 d-block">Quantity</label>
                                        <div class="input-group mb-3" style="width: 170px;">
                                          <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                            <i class="fas fa-minus"></i>
                                          </button>
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <input type="hidden" name="user_id" value="{{Auth::id()}}">
                                          <input type="number" value="1" class="form-control" name="quantity"/>
                                          <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                            <i class="fas fa-plus"></i>
                                          </button>
                                        </div>
                                        <button class="btn b ms-1 text-dark" type="submit" style="background-color: green">
                                            Save
                                            
                                        </button>
                                      </div>

                                    {{-- <div class="form-outline me-1" style="width: 100px;">
                                        <label class="form-label">How much you want?</label>
                                        <input type="number" value="1" class="form-control" name="quantity"/>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="user_id" value="{{Auth::id()}}">
                                    </div> --}}
                                  




                                    
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sélectionnez les boutons et l'input de quantité
        var btnMinus = document.getElementById('button-addon1');
        var btnPlus = document.getElementById('button-addon2');
        var quantityInput = document.querySelector('input[name="quantity"]');
    
        // Ajoutez un gestionnaire d'événements pour le bouton de soustraction
        btnMinus.addEventListener('click', function() {
            // Vérifiez si la valeur actuelle est supérieure à 1
            if (quantityInput.value > 1) {
                // Soustrayez 1 de la valeur actuelle
                quantityInput.value--;
            }
        });
    
        // Ajoutez un gestionnaire d'événements pour le bouton d'ajout
        btnPlus.addEventListener('click', function() {
            // Ajoutez 1 à la valeur actuelle
            quantityInput.value++;
        });
    });
    </script>
@include('Home.layouts.footer')