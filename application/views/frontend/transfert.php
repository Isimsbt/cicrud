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
  <link rel="stylesheet" href="http://localhost/cicrud/assets/css/style.css">
</head>

<body>
	
	<style>
/* Style pour les titres des tarifs */
.tarif_h3 {
    text-align: center; /* Centre le texte */
    font-weight: bold; /* Met le texte en gras */
    color: black; /* Couleur du texte */
    font-size: 24px; /* Taille de la police */
		font-style: italic;
}

/* Style pour les paragraphes de tarifs */
.txt_tarif {
    text-align: justify; /* Justifie le texte pour une présentation uniforme */
    margin-top: 10px; /* Ajoute un espace au-dessus du paragraphe */
}

/* Style pour le conteneur principal */
.container {
    display: flex; /* Utilise Flexbox pour le conteneur */
    justify-content: space-between; /* Espace entre les éléments */
    align-items: flex-start; /* Aligne les éléments en haut */
    flex-wrap: wrap; /* Permet aux éléments de passer à la ligne si nécessaire */
}

/* Style pour la table des tarifs */
#tab_tarifs {
    max-width: 400px; /* Réduit la largeur maximale de la table */
    margin: 0; /* Retire la marge par défaut */
    border-collapse: collapse; /* Réduit l'espace entre les cellules */
    flex: 1; /* Permet à la table de prendre l'espace disponible */
}

/* Style pour les en-têtes et les cellules de la table */
#tab_tarifs th, #tab_tarifs td {
    padding: 13px; /* Ajoute un peu de padding aux cellules */
    text-align: left; /* Aligne le texte à gauche */
    border: 1px solid #ddd; /* Ajoute une bordure légère */
}

/* Style pour les en-têtes de la table */
#tab_tarifs th {
    background-color: black; /* Couleur de fond des en-têtes */
    color: #fff; /* Couleur du texte des en-têtes */
    font-weight: bold; /* Met le texte en gras */
}

/* Style pour les lignes paires de la table */
#tab_tarifs tr:nth-child(even) {
    background-color: #f2f2f2; /* Couleur de fond des lignes paires */
}

/* Style pour les lignes au survol */
#tab_tarifs tr:hover {
    background-color: #e9ecef; /* Couleur de fond au survol */
}

/* Style pour la liste de transferts */
#liste_transfer {
    padding: 15px; /* Ajoute un peu de padding autour de la liste */
    margin: 0; /* Supprime la marge par défaut */
    max-width: 500px; /* Limite la largeur maximale de la liste */
    flex: 1; /* Permet à la liste de prendre l'espace disponible */
    overflow-y: auto; /* Ajoute une barre de défilement verticale si nécessaire */
}

/* Style pour les éléments de la liste de transferts */
#liste_transfer li {
    display: flex; /* Affiche les éléments en ligne */
    align-items: flex-start; /* Aligne les éléments au début de la ligne */
    border-bottom: 1px solid #ddd; /* Ajoute une ligne de séparation */
    padding: 15px 0; /* Ajoute de l'espace en haut et en bas */
}

/* Style pour les descriptions dans la liste de transferts */
#liste_transfer dl {
    display: flex; /* Affiche les éléments en ligne */
    flex-direction: row; /* Place l'image à gauche et le texte à droite */
    margin: 0;
    flex-wrap: wrap;
    align-items: center;
}

/* Style pour les images dans la liste de transferts */
#liste_transfer dt {
    margin: 0 5px 0 0; /* Ajoute un espace à droite de l'image */
    flex-shrink: 0; /* Empêche l'image de rétrécir */
}

/* Style pour les descriptions de la liste de transferts */
#liste_transfer dd {
    margin: 0 0 1px 0; /* Ajuste l'espace entre les descriptions */
    font-size: 8px; /* Augmente la taille de la police */
    flex: 1; /* Permet au texte de prendre tout l'espace disponible */
}

/* Style pour les liens dans la liste de transferts */
#liste_transfer .lien_bas a {
    color: #007bff; /* Couleur des liens */
    text-decoration: none; /* Supprime la décoration par défaut des liens */
}

/* Style pour les liens au survol */
#liste_transfer .lien_bas a:hover {
    text-decoration: underline; /* Souligne le texte au survol */
}

/* Style pour le pied de page */
#pied {
    background-color: #f8f9fa; /* Couleur de fond claire pour le pied de page */
    padding: 30px; /* Ajoute un padding autour du contenu */
    color: #333; /* Couleur du texte */
}

/* Style pour les listes dans le pied de page */
.liste_pied {
    list-style: none; /* Supprime les puces de la liste */
    padding: 0; /* Supprime le padding par défaut */
    margin: 0; /* Supprime la marge par défaut */
    display: flex; /* Affiche les blocs en ligne */
    justify-content: space-between; /* Espace entre les blocs */
    flex-wrap: wrap; /* Permet aux blocs de passer à la ligne si nécessaire */
}

/* Style pour les blocs de description dans le pied de page */
.bloc_desc {
    flex: 1; /* Permet aux blocs de prendre l'espace disponible */
    margin: 0 15px; /* Ajoute un espace horizontal entre les blocs */
    max-width: 250px; /* Limite la largeur maximale des blocs */
}

/* Style pour les titres des blocs de description */
.bloc_desc h3 {
    font-size: 18px; /* Taille de police des titres */
    margin-bottom: 15px; /* Espace sous les titres */
    color: #007bff; /* Couleur des titres */
}

/* Style pour les listes de services dans le pied de page */
.liste_services {
    list-style: none; /* Supprime les puces de la liste des services */
    padding: 0; /* Supprime le padding par défaut */
    margin: 0; /* Supprime la marge par défaut */
}

/* Style pour les éléments de la liste des services */
.liste_services li {
    margin-bottom: 10px; /* Espace entre les éléments de la liste */
    font-size: 14px; /* Taille de police des éléments de la liste */
}

/* Style pour le texte général */
.txt {
    font-size: 14px; /* Taille de police du texte */
    line-height: 1.6; /* Hauteur de ligne pour un meilleur espacement */
}

/* Style pour les liens dans le texte général */
.txt a {
    color: #007bff; /* Couleur des liens */
    text-decoration: none; /* Supprime la décoration par défaut des liens */
}

/* Style pour les liens au survol dans le texte général */
.txt a:hover {
    text-decoration: underline; /* Souligne le texte au survol */
}

/* Style pour le texte en gras */
.gras {
    font-weight: bold; /* Met le texte en gras */
}

/* Style pour le texte invisible */
.invis {
    display: none; /* Cache le texte inutilisé */
}


</style>

  <div class="site-wrap" id="home-section">
    <header class="site-navbar site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-3">
            <div class="site-logo">
              <a href="index.html"><strong>wanderwheels</strong></a>
            </div>
          </div>
          <div class="col-9 text-right">
            <span class="d-inline-block d-lg-none"><a href="#" class="site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>
            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto">
                <li><a href="http://localhost/cicrud/frontend/page/index" class="nav-link">Accueil</a></li>
                <li class="active"><a href="http://localhost/cicrud/frontend/page/vehicule" class="nav-link">Véhicule</a></li>
                <li><a href="http://localhost/cicrud/frontend/page/espace_client" class="nav-link">Espace client</a></li>
                <li><a href="http://localhost/cicrud/frontend/page/agence" class="nav-link">Agence</a></li>
                <li><a href="http://localhost/cicrud/frontend/page/reservation" class="nav-link">Réservation</a></li>
                <li><a href="http://localhost/cicrud/frontend/page/propos" class="nav-link">À propos</a></li>
                <li><a href="http://localhost/cicrud/frontend/page/contact" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <div class="hero inner-page" style="background-image: url('http://localhost/cicrud/assets/images/hero_1_a.jpg');">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-5">
            <div class="intro">
              <h1><strong>Transfert</strong></h1>
              <div class="custom-breadcrumbs"><a href="http://localhost/cicrud/frontend/page/index">Accueil</a> <span class="mx-2">/</span> <strong>Transfert</strong></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-5">


	<h3 class="tarif_h3"><span>Disponibilité 24h24 7j/7</span></h3>
      <p class="txt_tarif">

Sur un simple appel téléphonique, <strong>wanderwheels</strong>, se déplace pour des prises en charge sur Toute la Tunisie.

En fonction de votre planning, à la journée ou plus, de votre lieu de travail, pour un rendez-vous d’affaire, ou tout simplement pour des visites touristiques… <strong>wanderwheels</strong> saura satisfaire toutes vos exigences.</p>
<div class="container">
<table class="table table-hover table-bordered" id="tab_tarifs">
  <thead>
    <tr>
      <th scope="col">De</th>
      <th scope="col">Vers</th>
    </tr>
  </thead>
    <tbody>
      <tr>
        <td>Aéroport Tunis-Carthage</td>
        <td>Hammamet</td>
      </tr>
      <tr>
        <td>Aéroport Tunis-Carthage</td>
        <td>Sousse</td>
      </tr>
      <tr>
        <td>Aéroport Tunis-Carthage</td>
        <td>Aéroport Djerba</td>
      </tr>
      <tr>
        <td>Aéroport Monastir</td>
        <td>Hammamet</td>
      </tr>
      <tr>
        <td>Aéroport Monastir</td>
        <td>Sousse</td>
      </tr>
      <tr>
        <td>Aéroport Monastir</td>
        <td>Aéroport Djerba</td>
      </tr>
      <tr>
        <td>Aéroport Tunis-Carthage</td>
        <td>Monastir</td>
      </tr>
      <tr>
        <td>Aéroport Tunis-Carthage</td>
        <td>Mahdia</td>
      </tr>
      <tr>
        <td>Monastir</td>
        <td>Mahdia</td>
      </tr>
      <tr>
        <td>Aéroport Tunis-Carthage</td>
        <td>Aéroport Monastir</td>
      </tr>
      <tr>
        <td>Aéroport Tunis-Carthage</td>
        <td>Aéroport Djerba</td>
      </tr>
    </tbody>
  </table>

  <ul id="liste_transfer" class="list-unstyled">
    <li class="mb-4">
      <dl>
        <dt><img src="http://localhost/cicrud/assets/images/golf.jpg" alt="Image" class="img-fluid"></dt>
        <dd><strong>wanderwheels</strong> offre un transport à tous les points de la ville de Tunisie.</dd>
        <dd>Réservez votre taxi pour voyager à travers la ville. Confortable et sûr, sans délai.</dd>
        <dd class="lien_bas"><a href="http://localhost/cicrud/frontend/page/reservation">Le meilleur taxi de la ville »</a></dd>
      </dl>
    </li>
    <li class="mb-4">
      <dl>
        <dt><img src="http://localhost/cicrud/assets/images/nissan.jpg" alt="" class="img-fluid"></dt>
        <dd>Transferts à l'aéroport de Tunisie avec <strong>wanderwheels</strong>.</dd>
        <dd>Programmez votre heure de départ et réservez dès maintenant votre taxi familial pour l'aéroport.</dd>
        <dd class="lien_bas"><a href="http://localhost/cicrud/frontend/page/reservation">Taxi aéroport en Tunisie »</a></dd>
      </dl>
    </li>
    <li class="mb-4">
      <dl>
        <dt><img src="http://localhost/cicrud/assets/images/skodaocta.jpg" alt="" class="img-fluid"></dt>
        <dd>Réserver votre taxi à l'avance est votre meilleure garantie de satisfaction.</dd>
        <dd><strong>Taxi Loisirs</strong> reçoit en temps réel vos mails, et vous confirme votre réservation instantanément.</dd>
        <dd class="lien_bas"><a href="http://localhost/cicrud/frontend/page/reservation">Transport longue distance »</a></dd>
      </dl>
    </li>
  </ul>
</div>

    </div>
  </div>
  </div>     

  
  <div id="pied">
  <ul class="liste_pied">
    <li class="bloc_desc">
      <h3>Nos Services</h3>
      <ul class="liste_services">
        <li>Découvrez notre service de taxi touristique, </li>
        <li> offrant des trajets confortables et fiables pour explorer la Tunisie en toute sérénité."</li>
        <li>Services aux entreprises</li>
        <li>S&eacute;curit&eacute;, Ponctualit&eacute;, Confort </li>
        <li>Service 7j/7 et 24h/24 sur r&eacute;servation</li>
      </ul>
    </li>
   
    <li class="bloc_desc">
      <h3>Excursions & Circuits</h3>
      <p class="txt">Pour que vous profitiez de vos s&eacute;jours en Tunisie, wanderwheels Tunisie vous offre l'occasion d'&ecirc;tre pr&ecirc;t de la nature, l'air et la mer et de donner &aacute; votre corps et votre esprit la s&eacute;r&eacute;nit&eacute; et la tranquillit&eacute; souhait&eacute;.<a href="execursions.php">Plus d'infos?</a></p>
    </li>
    <li class="bloc_desc">
      <h3>Contact</h3>
      <dl>
        <dt class="invis">wanderwheels Tunisie</dt>
 
        <dd class="gras">Mobile : (+216) 50<span style="display:none;">_</span>320333</dd>
        <dd><a href="mailto:salmabaatour@gmail.com">salmabaatour@gmail.com</a></dd>
        <dd>salma baatout,monastir tunisia</dd>
      </dl>
    </li>
  </ul>
  
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
