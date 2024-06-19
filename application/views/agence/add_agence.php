<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Ajouter une agence</h5>
                <form method="post" action="<?= base_url() ?>agence/add">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom de l'agence</label>
                        <input type="text" name="nom" placeholder="Nom de l'agence" class="form-control" id="nom">

                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" name="adresse" placeholder="Adresse" class="form-control" id="adresse">

                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Téléphone">

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-describedby="emailHelp">

                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer'); ?>
