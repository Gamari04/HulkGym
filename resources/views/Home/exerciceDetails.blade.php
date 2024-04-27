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

<link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
<!-- Header End -->
@include('Home.layouts.nav') <br><br>



  
  <section class="bg-dark border-top py-4">
    <div class="container">
      <div class="row gx-4">
        <div class="col-lg-8 mb-4">
          <div class="border rounded-2 px-3 py-2 bg-dark ">
         
  
            <!-- Pills content -->
            <div class="tab-content" id="ex1-content">
              
                <video id="player" playsinline controls data-poster="/path/to/poster.jpg">
                    <source src="{{ $exercice->getFirstMediaUrl('videos') }}" type="video/mp4" />
                    
                  
                    <!-- Captions are optional -->
                    <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
                  </video>
          </div>
        </div>
       
      </div>
    </div>
  </section>

  <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>

  
@include('Home.layouts.footer')
