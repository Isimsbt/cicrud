<!doctype html>
<html lang="en">
<head>
    <title>Car Rental Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="http://localhost/projet-location/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/projet-location/assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="http://localhost/projet-location/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="http://localhost/projet-location/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost/projet-location/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="http://localhost/projet-location/assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="http://localhost/projet-location/assets/css/aos.css">
    <link href="http://localhost/projet-location/assets/css/dashboard.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .status-completed {
        color: green;
      }
      .status-ongoing {
        color: orange;
      }
    </style>
  </head>
  <body>
    
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Car Rental Dashboard</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/projet-location/frontend/page/dashboard">
              <span data-feather="home"></span>
							<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20"><path d="M22,5.724V2c0-.552-.447-1-1-1s-1,.448-1,1v2.366L14.797,.855c-1.699-1.146-3.895-1.146-5.594,0L2.203,5.579c-1.379,.931-2.203,2.48-2.203,4.145v9.276c0,2.757,2.243,5,5,5h2c.553,0,1-.448,1-1V14c0-.551,.448-1,1-1h6c.552,0,1,.449,1,1v9c0,.552,.447,1,1,1h2c2.757,0,5-2.243,5-5V9.724c0-1.581-.744-3.058-2-4Z"/></svg>

              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/projet-location/backend/reservation/index">
              <span data-feather="file"></span>
							<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" id="Filled" viewBox="0 0 24 24" width="20" height="20">
	<path d="M22.713,4.077A2.993,2.993,0,0,0,20.41,3H4.242L4.2,2.649A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.82-2h11.92a5,5,0,0,0,4.921-4.113l.785-4.354A2.994,2.994,0,0,0,22.713,4.077Z"/><circle cx="7" cy="22" r="2"/><circle cx="17" cy="22" r="2"/></svg>

              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/projet-location/backend/taxi/index">
              <span data-feather="shopping-cart"></span>
							<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20">
  <path d="m22.609,9H1.391l1.713-4.709c.715-1.968,2.603-3.291,4.698-3.291h8.396c2.096,0,3.983,1.323,4.698,3.292l1.713,4.708Zm1.391,6v1c0,2.045-1.237,3.802-3,4.576v1.424c0,1.105-.895,2-2,2s-2-.895-2-2v-1H7v1c0,1.105-.895,2-2,2s-2-.895-2-2v-1.424c-1.763-.774-3-2.531-3-4.576v-1h3c.553,0,1-.448,1-1s-.447-1-1-1H.087c.066-.436.163-.865.315-1.282l.261-.718h22.673l.261.718c.152.417.249.846.315,1.282h-2.913c-.553,0-1,.448-1,1s.447,1,1,1h3Zm-8,2c0-.552-.447-1-1-1h-6c-.553,0-1,.448-1,1s.447,1,1,1h6c.553,0,1-.448,1-1Z"/>
</svg>

              Vehicles
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/projet-location/backend/user">
              <span data-feather="users"></span>
              <?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20">
	<path d="M16.043,14H7.957A4.963,4.963,0,0,0,3,18.957V24H21V18.957A4.963,4.963,0,0,0,16.043,14Z"/><circle cx="12" cy="6" r="6"/></svg>
 Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
							<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20">
  <path d="m17.5,16c0,.829-.671,1.5-1.5,1.5s-1.5-.671-1.5-1.5.671-1.5,1.5-1.5,1.5.671,1.5,1.5Zm4.639,7.553l-2.668-2.668c-.981.699-2.177,1.115-3.471,1.115-3.308,0-6-2.692-6-6s2.692-6,6-6,6,2.692,6,6c0,1.294-.416,2.49-1.115,3.471l2.668,2.668-1.414,1.414Zm-1.639-7.553c-.385-.777-1.728-3-4.5-3s-4.115,2.223-4.5,3c.383.775,1.728,3,4.5,3s4.115-2.223,4.5-3ZM15,.586v4.414h4.414L15,.586Zm-7,15.414c0-4.418,3.582-8,8-8,1.459,0,2.822.397,4,1.079v-2.079h-7V0H3C1.343,0,0,1.343,0,3v21h16c-4.418,0-8-3.582-8-8Z"/>
</svg>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
							<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20">
	<path d="M20,10.5a10.02,10.02,0,0,0-2,.272V9a3,3,0,0,0-3-3H12.728A9.929,9.929,0,0,0,13,4,4,4,0,0,0,5,4a9.929,9.929,0,0,0,.272,2H3A3,3,0,0,0,0,9V24H6.536L6.3,23A9.8,9.8,0,0,1,6,21a3,3,0,0,1,6,0,9.8,9.8,0,0,1-.3,2l-.237,1H18V18.228a10.02,10.02,0,0,0,2,.272,4,4,0,0,0,0-8Z"/></svg>

              Integrations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="http://localhost/projet-location/backend/agence/index#">
              <span data-feather="briefcase"></span>
							<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20">
	<path d="M21,0h-6c-1.654,0-3,1.346-3,3V24h12V3c0-1.654-1.346-3-3-3Zm-4,19h-2v-2h2v2Zm0-4h-2v-2h2v2Zm0-4h-2v-2h2v2Zm0-4h-2v-2h2v2Zm4,12h-2v-2h2v2Zm0-4h-2v-2h2v2Zm0-4h-2v-2h2v2Zm0-4h-2v-2h2v2Zm-11.762-.976l-2.166-2.166c-1.107-1.107-3.038-1.107-4.146,0L.762,6.024c-.484,.483-.762,1.154-.762,1.839V24H10V7.863c0-.685-.278-1.355-.762-1.838Zm-3.238,12.976h-2v-2h2v2Zm0-4h-2v-2h2v2Zm0-4h-2v-2h2v2Z"/></svg>

              Agencies
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
							<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20"><path d="m14,7.015V.474c.913.346,1.753.879,2.465,1.59l3.484,3.486c.712.711,1.245,1.551,1.591,2.464h-6.54c-.552,0-1-.449-1-1Zm7.976,3h-6.976c-1.654,0-3-1.346-3-3V.038c-.161-.011-.322-.024-.485-.024h-4.515C4.243.015,2,2.258,2,5.015v14c0,2.757,2.243,5,5,5h10c2.757,0,5-2.243,5-5v-8.515c0-.163-.013-.324-.024-.485Zm-6.976,5.985h-6c-.552,0-1-.448-1-1s.448-1,1-1h6c.552,0,1,.448,1,1s-.448,1-1,1Z"/></svg>

              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
							<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20"><path d="m14,7.015V.474c.913.346,1.753.879,2.465,1.59l3.484,3.486c.712.711,1.245,1.551,1.591,2.464h-6.54c-.552,0-1-.449-1-1Zm7.976,3h-6.976c-1.654,0-3-1.346-3-3V.038c-.161-.011-.322-.024-.485-.024h-4.515C4.243.015,2,2.258,2,5.015v14c0,2.757,2.243,5,5,5h10c2.757,0,5-2.243,5-5v-8.515c0-.163-.013-.324-.024-.485Zm-6.976,5.985h-6c-.552,0-1-.448-1-1s.448-1,1-1h6c.552,0,1,.448,1,1s-.448,1-1,1Z"/></svg>

              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
							<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20"><path d="m14,7.015V.474c.913.346,1.753.879,2.465,1.59l3.484,3.486c.712.711,1.245,1.551,1.591,2.464h-6.54c-.552,0-1-.449-1-1Zm7.976,3h-6.976c-1.654,0-3-1.346-3-3V.038c-.161-.011-.322-.024-.485-.024h-4.515C4.243.015,2,2.258,2,5.015v14c0,2.757,2.243,5,5,5h10c2.757,0,5-2.243,5-5v-8.515c0-.163-.013-.324-.024-.485Zm-6.976,5.985h-6c-.552,0-1-.448-1-1s.448-1,1-1h6c.552,0,1,.448,1,1s-.448,1-1,1Z"/></svg>

              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
							<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20"><path d="m14,7.015V.474c.913.346,1.753.879,2.465,1.59l3.484,3.486c.712.711,1.245,1.551,1.591,2.464h-6.54c-.552,0-1-.449-1-1Zm7.976,3h-6.976c-1.654,0-3-1.346-3-3V.038c-.161-.011-.322-.024-.485-.024h-4.515C4.243.015,2,2.258,2,5.015v14c0,2.757,2.243,5,5,5h10c2.757,0,5-2.243,5-5v-8.515c0-.163-.013-.324-.024-.485Zm-6.976,5.985h-6c-.552,0-1-.448-1-1s.448-1,1-1h6c.552,0,1,.448,1,1s-.448,1-1,1Z"/></svg>

              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
		<div class="container">
    <div class="row">
       <br>
                <h5 >Liste des agences</h5>
								<br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom de l'agence</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($agences as $agence) : ?>
                            <tr>
                                <th scope="row"><?= $agence['ID_agence'] ?></th>
                                <td><?= $agence['nom'] ?></td>
                                <td><?= $agence['adresse'] ?></td>
                                <td><?= $agence['telephone'] ?></td>
                                <td><?= $agence['email'] ?></td>
                                <td>
                                    <a href="<?= base_url() ?>backend/agence/edit/<?= $agence['ID_agence'] ?>" class="btn btn-sm btn-warning">Modifier</a>
                                    <a href="<?= base_url() ?>backend/agence/delete/<?= $agence['ID_agence'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette agence?')">Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
			
		<a href="<?= base_url('backend/agence/add') ?>" class="btn btn-sm btn-primary">Add New agence</a>
      
  
            </div>
        </div>
    </div>
</div>
		</main>
