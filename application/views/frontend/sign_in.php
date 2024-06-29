<!doctype html>
<html lang="en">

  <head>
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
                <a href="index.html"><strong>wanderwheels</strong></a>
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
        <li><a href="http://localhost/cicrud/frontend/page/propos" class="nav-link">A propos</a></li>
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
                <h1><strong>Inscription</strong></h1>
                <div class="custom-breadcrumbs"><a href="index.html">Accuiel</a> <span class="mx-2">/</span> <strong>Inscription</strong></div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <section class="vh-200 bg-light">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="http://localhost/cicrud/assets/images/log.png" alt="Sample image" class="custom-size">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
						<form id="signupForm" class="needs-validation" novalidate action="<?= site_url('form/submit') ?>" method="POST">
        <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="radio" id="cin" name="idType" value="cin" checked>
                    <label for="cin">CIN</label>
                    <input type="radio" id="passport" name="idType" value="passport">
                    <label for="passport">Passport</label>

                    <input type="text" class="form-control" id="identification" name="identification" placeholder="Enter your CIN or Passport number" required>
                    <div class="invalid-feedback">
                        Valid identification number is required.
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="prenom">Nom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Enter your last name" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
        <div class="invalid-feedback">
            Please enter a valid email address.
        </div>
    </div>

    <div class="mb-3">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
        <div class="invalid-feedback">
            Please enter your address.
        </div>
    </div>

    <div class="mb-3">
        <label>Gender</label>
        <div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="male" name="gender" class="custom-control-input" value="male" required>
                <label class="custom-control-label" for="male">Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="female" name="gender" class="custom-control-input" value="female" required>
                <label class="custom-control-label" for="female">Female</label>
            </div>
        </div>
        <div class="invalid-feedback">
            Please select a gender.
        </div>
    </div>

    <div class="mb-3">
        <label for="phone">Phone number</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
        <div class="invalid-feedback">
            Please enter a valid phone number.
        </div>
    </div>

    <div class="mb-3">
        <label for="nationalite">Nationalité</label>
        <input type="text" class="form-control" id="nationalite" name="nationalite" placeholder="Entrez votre nationalité" required>
        <div class="invalid-feedback">
            Veuillez entrer une nationalité valide.
        </div>
    </div>

    <div class="mb-3">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
        <div class="invalid-feedback">
            Please enter a password.
        </div>
    </div>

    <div class="mb-3">
        <label for="password-confirm">Confirm Password</label>
        <input type="password" class="form-control" id="password-confirm" name="passwordc" placeholder="Confirm your password" required>
        <div class="invalid-feedback">
            Please confirm your password.
        </div>
    </div>

    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign Up</button>
</form>

              <script>
       document.addEventListener('DOMContentLoaded', function () {
  const nationaliteInput = document.getElementById('nationalite');
  nationaliteInput.addEventListener('input', function () {
    const nationaliteValue = nationaliteInput.value.trim();
    const regex = /^[A-Za-z]+$/;

    if (!regex.test(nationaliteValue)) {
      nationaliteInput.classList.add('is-invalid');
    } else {
      nationaliteInput.classList.remove('is-invalid');
    }
  });

  document.getElementById('signupForm').addEventListener('submit', function(event) {
    var inputs = document.querySelectorAll('#signupForm input');
    var formIsValid = true;

    inputs.forEach(function(input) {
      switch (input.id) {
        case 'nom':
        case 'prenom':
          if (/^[a-zA-Z]+$/.test(input.value.trim())) {
            input.classList.remove('is-invalid');
            input.nextElementSibling.style.display = 'none';
          } else {
            input.classList.add('is-invalid');
            input.nextElementSibling.style.display = 'block';
            formIsValid = false;
          }
          break;

        case 'email':
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (emailRegex.test(input.value.trim())) {
            input.classList.remove('is-invalid');
            input.nextElementSibling.style.display = 'none';
          } else {
            input.classList.add('is-invalid');
            input.nextElementSibling.style.display = 'block';
            formIsValid = false;
          }
          break;

        case 'phone':
          const phoneRegex = /^[0-9]+$/;
          if (phoneRegex.test(input.value.trim())) {
            input.classList.remove('is-invalid');
            input.nextElementSibling.style.display = 'none';
          } else {
            input.classList.add('is-invalid');
            input.nextElementSibling.style.display = 'block';
            formIsValid = false;
          }
          break;
					
        case 'nationalite':
          const nationaliteRegex = /^[A-Za-z]+$/;
          if (nationaliteRegex.test(input.value.trim())) {
            input.classList.remove('is-invalid');
            input.nextElementSibling.style.display = 'none';
          } else {
            input.classList.add('is-invalid');
            input.nextElementSibling.style.display = 'block';
            formIsValid = false;
          }
          break;

        case 'identification':
          if (input.value.trim() !== '') {
            input.classList.remove('is-invalid');
            input.nextElementSibling.style.display = 'none';
          } else {
            input.classList.add('is-invalid');
            input.nextElementSibling.style.display = 'block';
            formIsValid = false;
          }
          break;

        case 'address':
          if (input.value.trim() !== '') {
            input.classList.remove('is-invalid');
            input.nextElementSibling.style.display = 'none';
          } else {
            input.classList.add('is-invalid');
            input.nextElementSibling.style.display = 'block';
            formIsValid = false;
          }
          break;

        case 'password':
          const passwordRegex = /^(?=.*[A-Z])(?=.*\d).{6,}$/;
          if (passwordRegex.test(input.value.trim())) {
            input.classList.remove('is-invalid');
            input.nextElementSibling.style.display = 'none';
          } else {
            input.classList.add('is-invalid');
            input.nextElementSibling.style.display = 'block';
            formIsValid = false;
          }
          break;

        case 'passwordc':
          const password = document.getElementById('password').value.trim();
          if (input.value.trim() === password) {
            input.classList.remove('is-invalid');
            input.nextElementSibling.style.display = 'none';
          } else {
            input.classList.add('is-invalid');
            input.nextElementSibling.style.display = 'block';
            formIsValid = false;
          }
          break;
      }
    });

    if (!formIsValid) {
      event.preventDefault();
      event.stopPropagation();
    }
  }, false);
});

              </script>
            </div>
          </div>
        </div>
      </section>
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

