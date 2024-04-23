@include('Home.layouts.header')
<style>
    .dark-aside {
        background-color: #343a40;
        color: #fff;
        padding: 20px;
    }

    .course {
        background-color: #212529;
        padding: 10px;
        margin-bottom: 10px;
        font-family: Arial, sans-serif;
        /* Changer la police ici */
    }

    .course-number {
        background-color: #08a136;
        color: #212529;
        width: 5%;
        height: 5%;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        padding: 5px;
        font-weight: bold;
        /* Rendre le numéro plus gras */
        margin-right: 10px;
        font-family: Arial, BOLD SERIF;
        /* Changer la police ici */
        font-weight: bold;
        font-size: 18px;
    }

    .header-section {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #000;
        z-index: 1000;
        /* Autres styles personnalisés */
    }

    /* Si nécessaire, ajustez les marges ou le rembourrage pour aligner correctement les éléments */
    .logo {
        margin-top: 10px;
    }

    .nav-menu {
        text-align: center;
        /* Pour aligner les éléments de la barre de navigation au centre */
    }

    .navbar-nav {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .navbar-nav .nav-item {
        margin-left: 20px;
        /* Espacement entre les éléments de la barre de navigation */
    }

    .navbar-nav .nav-link {
        color: #333;
        /* Couleur du texte des liens de navigation */
        font-weight: bold;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
        background-color: #f0f0f0;
        /* Couleur de fond au survol */
    }

    .navbar-nav .dropdown-menu {
        background-color: #000;
        /* Couleur de fond du menu déroulant */
        border: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        /* Ombre du menu déroulant */
    }

    .navbar-nav .dropdown-menu .dropdown-item {
        color: #333;
        padding: 10px 15px;
        text-decoration: none;
        display: block;
        transition: background-color 0.3s ease;
    }

    .navbar-nav .dropdown-menu .dropdown-item:hover {
        background-color: #f0f0f0;
    }

    /* Style pour l'icône de profil */
    .navbar-nav .nav-link.dropdown-toggle {
        display: flex;
        align-items: center;
    }

    .navbar-nav .nav-link.dropdown-toggle img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 5px;
    }
</style>


<!-- Header End -->
@include('Home.layouts.nav') <br><br>
<section class="container  mt-5">
    <!-- Sidebar Start -->
    <div class="row">
        <div class="col-lg-4 mt-4">
            <div class="sidebar  border border-success" style="margin-top: 8%; padding-right: 20%;">
               

                    <div class="navbar-nav w-100">
                        @foreach ($exercises as $exercise)
                            <li>
                                <a href="{{ route('exercise.show', ['id' => $exercise->id]) }}"class="nav-item nav-link"><span class="course-number">1</span>{{ $exercise->title}}</a>
                            </li>
                        @endforeach
                    </div>
                
            </div>

        </div>
        <div class="col-lg-8 ">
            <div>
                <div class=" d-flex flex-column">

                    <img src="{{ $trainingProgram->getFirstMediaUrl('images') }}" alt="Generic placeholder image" class="" style="width: 100%;">

                </div>

                <div class="card-body p-4 text-black">
                    <div class="mb-5">
                        <h1>{{ $trainingProgram->title }}</h1>
                        <p class="ray text-secondary">xdcfvgbhn</p>
                        <p class="text-secondary">xcdfvgbhn</p>

                        <p>Available Seats :
                        <p class="text-secondary">cfvgbhnj,</p>
                        </p>
                        <p class="lead fw-normal mb-1">Description</p>
                        <div class="p-4" style="background-color: #f8f9fa;">
                            <p class="font-italic mb-1">{{ $trainingProgram->description }}cvfgbhnj,Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Libero vitae iste adipisci optio, numquam
                                voluptatum est ea quod? Qui et vero veniam, eos at delectus ex perspiciatis
                                cumque culpa ducimus?</p>


                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <button type="button" class="btn text-dark mx-auto mb-5" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" style="background-color: #088f1f ">
                            Add Exercice
                        </button>

                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <form method="POST" action="{{ route('exercices.store') }}">
                                        @csrf
                                        <div class="mb-3">Title</label>
                                            <input type="text" class="form-control border"
                                                placeholder="Enter Number of Tickets" name="title">

                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Duration</label>
                                            <input type="time" class="form-control border"
                                                placeholder="Enter Number of Tickets" name="duration">

                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Required Equipment</label>
                                            <input type="text" class="form-control border"
                                                placeholder="Enter Number of Tickets" name="Required_Equipment">

                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Difficulty Level</label>
                                            <select class="form-select" name="Difficulty_Level">
                                                <option value="Beginner">Beginner</option>
                                                <option value="Intermediate">Intermediate</option>
                                                <option value="Advanced">Advanced</option>
                                            </select>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Targeted Muscle Groups</label>
                                            <input type="text" class="form-control border"
                                                placeholder="Enter Number of Tickets" name="Targeted_Muscle_Groups">

                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Instructions</label>
                                            <input type="text" class="form-control border"
                                                placeholder="Enter Number of Tickets" name="Instructions">

                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Number_Sets_Repetitions</label>
                                            <input type="number" class="form-control border"
                                                placeholder="Enter Number of Tickets" name="Number_Sets_Repetitions">

                                        </div>
                                        <input type="hidden" class="form-control" name="training_program_id" value="{{ $trainingProgram->id }}">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fas fa-shopping-cart"></i>Add Exercise</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('Home.layouts.footer')
