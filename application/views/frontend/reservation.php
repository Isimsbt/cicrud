
<!doctype html>
<html lang="en">

<head>
  <title>CarRental &mdash; Free Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="http://localhost/cicrud/assets/fonts/icomoon/style.css">

<link rel="stylesheet" href="http://localhost/cicrud/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/cicrud/assets/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="http://localhost/cicrud/assets/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="http://localhost/cicrud/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="http://localhost/cicrud/assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="http://localhost/cicrud/assets/fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="http://localhost/cicrud/assets/css/aos.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="http://localhost/cicrud/assets/css/style.css">

</head>

<body>

  <div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">

          <div class="col-3">
            <div class="site-logo">
              <a href="index.html"><strong>CarRental</strong></a>
            </div>
          </div>

          <div class="col-9  text-right">
              
            <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

						<nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
    <ul class="site-menu main-menu js-clone-nav ml-auto">
        <li><a href="http://localhost/cicrud/frontend/page/index" class="nav-link">Accueil</a></li>
        <li class="active"><a href="http://localhost/cicrud/frontend/page/vehicule" class="nav-link">véhicule</a></li>
        <li><a href="http://localhost/cicrud/frontend/page/espace_client" class="nav-link">Espace client</a></li>
        <li><a href="http://localhost/cicrud/frontend/page/agence" class="nav-link">Agence</a></li>
        <li><a href="http://localhost/cicrud/frontend/page/reservation" class="nav-link">Réservation</a></li>
        <li><a href="http://localhost/cicrud/frontend/page/about" class="nav-link">A propos</a></li>
        <li><a href="http://localhost/cicrud/frontend/page/contact" class="nav-link">Contact</a></li>
    </ul>
</nav>
          </div>

        </div>
      </div>

    </header>

      
    <div class="hero inner-page" style="background-image: url('http://localhost/cicrud/assets/images/hero_1_a.jpg');">
        
        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-5">

              <div class="intro">
                <h1><strong>Reservation</strong></h1>
                <div class="custom-breadcrumbs"><a href="http://localhost/cicrud/frontend/page/index">Accuiel</a> <span class="mx-2">/</span> <strong>Reservation</strong></div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <section class="vh-300 bg-light">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="http://localhost/cicrud/assets/images/sig.png" width="500" height="500" alt="Reservation image" class="custom-size">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <p class="lead fw-normal mb-0 me-3" style="font-size: 1.5em; font-weight: 900;">Réservez-vous</p>
					<form action="<?php echo site_url('reservation/submit'); ?>" method="post">
   <div class="form-outline mb-4">
        <label class="form-label" for="nom_client">Nom client</label>
        <input type="text" id="nom_client" name="nom_client" class="form-control form-control-lg" required />
        <div class="invalid-feedback">Veuillez entrer le nom du client.</div>
    </div>
    <!-- Agence -->
	<div class="form-outline mb-3">
    <label class="form-label" for="agence">Choisir votre agence</label>
    <input type="text" id="agence" name="agence" class="form-control" required />
    <div class="invalid-feedback">Veuillez entrer le nom ou l'ID de l'agence.</div>
</div>


    <!-- Taxi info -->
    
    <div class="row">
	<div class="col-md-6 form-outline mb-3">
    <label class="form-label" for="matricule">Matricule de taxi</label>
    <input type="text" id="matricule" name="matricule" class="form-control" required />
    <div class="invalid-feedback">Veuillez entrer le matricule de taxi.</div>
</div>
<div class="col-md-6 form-outline mb-3">
    <label class="form-label" for="modele">Modèle de taxi</label>
    <input type="text" id="modele" name="modele" class="form-control" required />
    <div class="invalid-feedback">Veuillez entrer le modèle de taxi.</div>
</div>




    <!-- Date reservation -->
    <div class="form-outline mb-4">
        <label class="form-label" for="date_rev">Date de réservation</label>
        <input type="date" id="date_rev" name="date_rev" class="form-control form-control-lg" required />
        <div class="invalid-feedback">Veuillez entrer une date de réservation.</div>
    </div>

    <!-- Départ et arrivée -->
    <div class="row">
        <div class="col-md-6 form-outline mb-3">
            <label class="form-label" for="depart">Début delai</label>
            <input type="date" id="depart" name="depart" class="form-control form-control-lg" required />
            <div class="invalid-feedback">Veuillez entrer la date de départ.</div>
        </div>
        <div class="col-md-6 form-outline mb-3">
            <label class="form-label" for="arrivee">Fin delai</label>
            <input type="date" id="arrivee" name="arrivee" class="form-control form-control-lg" required />
            <div class="invalid-feedback">Veuillez entrer la date d'arrivée.</div>
        </div>
    </div>

    <div class="text-center text-lg-start mt-4 pt-2">
        <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Réserver</button>
    </div>
				</form> 
                    <script>
                        function validateForm(event) {
                            var form = document.getElementById('reservation-form');
                            var inputs = form.querySelectorAll('input, select');
    
                            inputs.forEach(function (input) {
                                var alert = input.parentElement.querySelector('.invalid-feedback');
                                input.addEventListener('blur', function () {
                                    if (!input.value.trim()) {
                                        alert.style.display = 'block';
                                        input.classList.add('is-invalid');
                                    } else {
                                        alert.style.display = 'none';
                                        input.classList.remove('is-invalid');
                                    }
                                });
    
                                if (!input.value.trim()) {
                                    alert.style.display = 'block';
                                    input.classList.add('is-invalid');
                                } else {
                                    alert.style.display = 'none';
                                    input.classList.remove('is-invalid');
                                }
                            });
    
                            var invalidInput = form.querySelector('.is-invalid');
                            if (invalidInput) {
                                event.preventDefault();
                            } else {
                                alert('Formulaire soumis avec succès!');
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
    
  </div>

	<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<h2 class="footer-heading mb-4">A propos</h2>
							<p>
								Notre site web de location de taxi touristique en Tunisie offre un service personnalisé, fiable et sécurisé pour vous permettre de découvrir les trésors cachés de la région avec confort et style. </p>
								<ul class="list-unstyled social">
									<li><a href="#"><span class="icon-facebook"></span></a></li>
									<li><a href="#"><span class="icon-instagram"></span></a></li>
									<li><a href="#"><span class="icon-twitter"></span></a></li>
									<li><a href="#"><span class="icon-linkedin"></span></a></li>
							</ul>
							
						</div>
						<div class="col-lg-8 ml-auto">
							<div class="row">
								<div class="col-lg-3">
									<h2 class="footer-heading mb-4">Quick Links</h2>
									<ul class="list-unstyled">
										<li><a href="#">Acceuil</a></li>
										<li><a href="#">contact</a></li>
										<li><a href="#">espace client</a></li>
										<li><a href="#">reservation</a></li>
										<li><a href="#">vehicule</a></li>
										<li><a href="#">agences</a></li>
										<li><a href="#">a propos</a></li>
									</ul>
								</div>
								<div class="col-lg-3">
									<h2 class="footer-heading mb-4">Resources</h2>
									<ul class="list-unstyled">
										<li><a href="#">Acceuil</a></li>
										<li><a href="#">contact</a></li>
										<li><a href="#">espace client</a></li>
										<li><a href="#">reservation</a></li>
										<li><a href="#">vehicule</a></li>
										<li><a href="#">agences</a></li>
										<li><a href="#">a propos</a></li>
									</ul>
								</div>
								<div class="col-lg-3">
									<h2 class="footer-heading mb-4">Support</h2>
									<ul class="list-unstyled">
										<li><a href="#">Acceuil</a></li>
										<li><a href="#">contact</a></li>
										<li><a href="#">espace client</a></li>
										<li><a href="#">reservation</a></li>
										<li><a href="#">vehicule</a></li>
										<li><a href="#">agences</a></li>
										<li><a href="#">a propos</a></li>
									</ul>
								</div>
							 
							</div>
						</div>
					</div>
					<div class="row pt-5 mt-5 text-center">
						<div class="col-md-12">
							<div class="border-top pt-5">
								<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>
							</div>
						</div>
	
					</div>
				</div>
			</footer>
</div>
<script src="http://localhost/cicrud/assets/js/jquery-3.3.1.min.js"></script>
    <script src="http://localhost/cicrud/assets/js/popper.min.js"></script>
    <script src="http://localhost/cicrud/assets/js/bootstrap.min.js"></script>
    <script src="http://localhost/cicrud/assets/js/owl.carousel.min.js"></script>
    <script src="http://localhost/cicrud/assets/js/jquery.sticky.js"></script>
    <script src="http://localhost/cicrud/assets/js/jquery.waypoints.min.js"></script>
    <script src="http://localhost/cicrud/assets/js/jquery.animateNumber.min.js"></script>
    <script src="http://localhost/cicrud/assets/js/jquery.fancybox.min.js"></script>
    <script src="http://localhost/cicrud/assets/js/jquery.easing.1.3.js"></script>
    <script src="http://localhost/cicrud/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="http://localhost/cicrud/assets/js/aos.js"></script>
    <script src="http://localhost/cicrud/assets/js/main.js"></script>
    <script src="http://localhost/cicrud/assets/js/main.js"></script>
</body>

</html>
