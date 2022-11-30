<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <!--Import materialize.css-->
  <link id="theme-controller" type="text/css" rel="stylesheet" href="css/theme-dark.css">
  <link type="text/css" rel="stylesheet" href="css/materialize.css">
  <link type="text/css" rel="stylesheet" href="css/script.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="icon" href="img/syphon.jpg">
  <title>Syphon Games</title>

</head>

<body>
  <header>
    <!-- nav bar -->
    <nav>
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo center"><i class="material-icons">videogame_asset</i>Syphon</a>
        <div class="right">
          <?php
              $login = ['user']  
              if $login == true:
                echo <i class="fa-regular fa-circle-user"></i>
              else:
                echo <i class="fa-solid fa-circle-user"></i>
          ?>
          <i class="material-icons" id="modeswitcher"> remove_red_eye</i>
        </div>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">
          <li><a href="terraria.php">Terraria</a></li>
          <li><a href="dbd.php">Dead By Daylight</a></li>
          <li><a href="soom.php">Soom</a></li>
          <li><a class="waves-effect waves-light btn modal-trigger blue2" href="#modal1">Contact</a></li>
        </ul>
      </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="terraria.php">Terraria</a></li>
      <li><a href="dbd.php">Dead By Daylight</a></li>
      <li><a href="soom.php">Soom</a></li>
      <li><a class="waves-effect waves-light btn modal-trigger blue2" href="#modal1">Contact</a></li>
      <li><i class="fa-solid fa-cat" id="nyan"></i></li>
    </ul>
  </header>
  <!-- Carousel -->
  
  <div class="row">
    <div class="col s12 l8 offset-l2">
      <div class="content">
        <div class="carousel carousel-slider grey-outline">
          <div class="carousel-item" id="terra_carou">
            <img src="img/terraria.jpg" alt="image du projet terraria">
          </div>
          <div class="carousel-item" id="dbd_carou">
            <img src="img/dbd-cards/dbd1.jpg" alt="image du projet dead by daylight">
          </div>
          <div class="carousel-item" id="soom_carou">
            <img src="img/soom.jpeg" alt="image du jeu soom">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- "Le Studio" Premier bloc -->
  
  <div class="block1">
    <div class="row animate__animated animate__fadeIn wow">
      <div class="col s10 offset-s1 l6 offset-l3 description anim1">
        <div class="center gradient">
          <h2>Le Studio</h2>
        </div>
        <p>Syphon Games est un petit studio étudiant créé en janvier 2022 pour gérer un
          projet de jeu vidéo : Soom.
          <br>
          Les projets étudiants du studio seront présentés sur le site.
          Vous retrouverez alors 2 fan sites de Terraria et Dead By Daylight ansi que le projet Soom.
        </p>
      </div>
    </div>
  </div>
  
  <!-- "Les membres" Deuxime bloc -->
  <div class="block2">
    <div class="row">
      <div class="col s10 offset-s1 l6 offset-l3 center animate__animated animate__backInUp wow identity">
        <div class="center gradient">
          <h2>Les Membres</h2>
        </div>
        <div class="col s12 l6">
          <div class="anim2">
            <img id="pic1" src="img/clou.jpg" alt="magnifique photo de Fiard Loris">
          </div>
          <div class="row">
            <div class="col s12 m12">
              <div class="card grey darken-3">
                <div class="card-content white-text">
                  <span class="card-title">Loris Fiard</span>
                  <p>Né le 6 juillet 2004.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 l6">
          <div class="anim2">
            <img id="pic2" src="img/perceuse.jpg" alt="magnifique photo de Bailleul WIlliam">
          </div>
          <div class="row">
            <div class="col s12 m12">
              <div class="card grey darken-3">
                <div class="card-content white-text">
                  <span class="card-title">William Bailleul</span>
                  <p>Né le 18 juillet 2004.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s6">
          <h5 class="white-text">Retrouvez Nous</h5>
          <a href="https://gamingcampus.fr/" target="_blank">
            <img class="anim4" src="img/gc.jpg" alt="logo du gaming campus">
          </a>
        </div>
        <div class="col l4 offset-l2 s6">
          <h5 class="white-text">Réseaux</h5>
          <ul>
            <li>
              <a class="text-lighten-3 anim3" href="https://discord.gg/7W6dymfW3s" target="_blank">
                <i class="fa-brands fa-discord"></i>
                Discord</a>
            </li>
            <li>
              <a class="text-lighten-3 anim3" href="https://twitter.com/SyphonGames_OF" target="_blank">
                <i class="fa-brands fa-twitter"></i>
                Twitter</a>
            </li>
            <li>
              <a class="text-lighten-3 anim3" href="https://www.patreon.com/SyphonGamesOF" target="_blank"><i
                  class="fa-brands fa-patreon"></i>Patreon</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        SyphonGames© 2022 All Rights Reserved (enfin sauf les photos des autres jeux nous collez pas un procès svp)
      </div>
    </div>
  </footer>

  <!-- Modal -->
  <div class="modal-content">
    <div id="modal1" class="modal modal-fixed-footer">
      <div class="container">
        <div class="row">
          <div class="col s12 l12">
            <h5 class="blue-text">Contact</h5>
            <div class="row">
              <form class="col s12 l12">
                <div class="row">
                  <div class="input-field col s6 l6">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">Prénom</label>
                  </div>
                  <div class="input-field col s6 l6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Nom</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 l12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field col s12 l12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Message</label>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-light btn-flat">Agree</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--JavaScript at end of body for optimized loading-->
  <script src="js/jquery.js"></script>
  <script src="js/materialize.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/script.js"></script>
  <script src="https://kit.fontawesome.com/198411c19a.js" crossorigin="anonymous"></script>
</body>


</html>