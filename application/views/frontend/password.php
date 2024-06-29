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
  <section class="site-section"></section>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="http://localhost/cicrud/assets/images/login.png" alt="Sample photo" class="img-fluid"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>
              <div class="col-xl-6">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase"><strong>Password Recovery</strong></h3>
                  <form id="form" action="<?= base_url('auth/forgot_password') ?>" method="post" novalidate>
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" id="em" name="email" class="form-control form-control-lg" placeholder="Entrez une adresse e-mail" required />
                      <label class="form-label" for="em">Adresse e-mail</label>
                    </div>
                    <div class="invalid-feedback" id="emailAlert" style="display:none;">
                      L'adresse e-mail doit être valide.
                    </div>
                    <div class="d-flex justify-content-end pt-3">
                      <button type="submit" id="submit" class="btn btn-primary btn-lg ms-2">Submit</button>
                    </div>
                    <div class="mt-3">
                      <p class="mb-1"><a href="http://localhost/cicrud/frontend/page/espace_client">Retour à la connexion</a></p>
                    </div>
                  </form>
                  <script>
                    document.getElementById('form').addEventListener('submit', function (event) {
                      var email = document.getElementById('em');
                      var alert = document.getElementById('emailAlert');
                      if (!email.checkValidity()) {
                        email.classList.add('is-invalid');
                        alert.style.display = 'block';
                      } else {
                        email.classList.remove('is-invalid');
                        alert.style.display = 'none';
                      }
                      if (!email.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                      }
                    }, false);
                  </script>
                  <style>
                    .is-invalid {
                      border-color: #dc3545;
                    }

                    .invalid-feedback {
                      color: #dc3545;
                      display: block;
                    }
                  </style>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
