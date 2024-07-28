<!doctype html>
<html lang="en">
<head>
    <title>Car Rental Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="http://localhost/cicrud/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/cicrud/assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="http://localhost/cicrud/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="http://localhost/cicrud/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost/cicrud/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="http://localhost/cicrud/assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="http://localhost/cicrud/assets/css/aos.css">
    <link href="http://localhost/cicrud/assets/css/dashboard.css" rel="stylesheet">
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
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/cicrud/vehicule">
              <span data-feather="shopping-cart"></span>
              Vehicles
            </a>
          </li>
          <li class="nav-item">
        <a class="nav-link" href="http://localhost/cicrud/zaboun">
          <span data-feather="users"></span>
            Customers
         </a>
        </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/cicrud/agence/index">
              <span data-feather="briefcase"></span>
              Agences
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
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Liste des Clients</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID Client</th>
              <th>Nom</th>
              <th>Email</th>
              <th>Adresse</th>
              <th>Téléphone</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php if (isset($clients) && !empty($clients)): ?>
              <?php foreach ($clients as $client) : ?>
                <tr>
                  <td><?= $client->ID_client ?></td>
                  <td><?= $client->Nom_client ?></td>
                  <td><?= $client->email ?></td>
                  <td><?= $client->adresse ?></td>
                  <td><?= $client->téléphone ?></td>
                  <td>
                    <a href="<?= base_url('client/edit/' . $client->ID_client) ?>" class="btn btn-primary btn-sm">Modifier</a>
                    <a href="<?= base_url('client/delete/' . $client->ID_client) ?>" class="btn btn-danger btn-sm">Supprimer</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="6">Aucun client trouvé.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
        <a href="<?= base_url('client/add') ?>" class="btn btn-success">Ajouter un client</a>
        <a href="<?= site_url('dashboard'); ?>" class="btn btn-secondary">Back to Dashboard</a>
      </div>
    </main>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="http://localhost/cicrud/assets/js/feather.min.js"></script>
<script src="http://localhost/cicrud/assets/js/dashboard.js"></script>
<script>
  feather.replace();
</script>
</body>
</html>
