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
            <a class="nav-link"  href="http://localhost/cicrud/agence/index">
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
        <h1 class="h2">Dashboard Overview</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-header">
              <h5 class="card-title">Rental Statistics</h5>
            </div>
            <div class="card-body">
              <canvas id="rentalChart" width="672" height="283" style="display: block; height: 227px; width: 538px;"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-header">
              <h5 class="card-title">Top Vehicles</h5>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Toyota Corolla - 50 rentals</li>
                <li class="list-group-item">Honda Civic - 45 rentals</li>
                <li class="list-group-item">Ford Mustang - 30 rentals</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title">Agency Performance</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Agency Name</th>
                  <th>Total Rentals</th>
                  <th>Active Bookings</th>
                  <th>Revenue (USD)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>New York City</td>
                  <td>500</td>
                  <td>50</td>
                  <td>$25,000</td>
                </tr>
                <tr>
                  <td>Los Angeles</td>
                  <td>450</td>
                  <td>40</td>
                  <td>$22,500</td>
                </tr>
                <tr>
                  <td>Miami</td>
                  <td>300</td>
                  <td>30</td>
                  <td>$15,000</td>
                </tr>
                <!-- Add more rows dynamically based on your data -->
              </tbody>
            </table>
          </div>
        </div>
      </div>

			<div class="card">
  <div class="card-header">
    <h5 class="card-title">Recent Orders</h5>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Customer</th>
            <th>Vehicle</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>Toyota Corolla</td>
            <td>2024-07-01</td>
            <td>2024-07-05</td>
            <td><span class="badge badge-success">Confirmed</span></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jane Smith</td>
            <td>Honda Civic</td>
            <td>2024-07-02</td>
            <td>2024-07-06</td>
            <td><span class="badge badge-warning">Pending</span></td>
          </tr>
          <!-- Add more rows dynamically based on your data -->
        </tbody>
      </table>
    </div>
  </div>
</div>

    </main>
  </div>
</div>

<script src="http://localhost/cicrud/assets/js/jquery-3.5.1.min.js"></script>
<script src="http://localhost/cicrud/assets/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost/cicrud/assets/js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  var ctx = document.getElementById('rentalChart').getContext('2d');
  var rentalChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        label: 'Rentals',
        data: [12, 19, 3, 5, 2, 3, 7],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(255, 99, 132, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
});
</script>

  </body>
</html>
