<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 ><a href="/jourj1/index.php"><img src="/jourj1/assets/img/logo.png" height="80px" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/jourj1/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/jourj1/#about">About</a></li>
          <li><a class="nav-link scrollto" href="/jourj1/#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="/jourj1/#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="/jourj1/#events">Events</a></li>
          <li><a class="nav-link scrollto" href="/jourj1/#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="/jourj1/#gallery">Gallery</a></li>
          <?php 
          if(isset($_SESSION['utilisateur'])){
             echo "<a href='/jourj1/forms/deconnexion.php'>log out</a>";
          }else{
             
             echo "<a href='/jourj1/forms/connexion.php'>log in</a>";
          }
          ?>
    
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Reservez votre rendez_vous</a>

    </div>
  </header>