<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Ajouter un utilisateur</h5>
                <form method="post" action="<?= base_url('user/add') ?>">
                    <div class="mb-3">
                        <label for="ID_client" class="form-label">ID_client</label>
                        <input type="text" name="ID_client" placeholder="ID_client" class="form-control" id="ID_client">
                    </div>
                    <div class="mb-3">
                        <label for="Nom_client" class="form-label">Nom</label>
                        <input type="text" name="Nom_client" placeholder="Nom du Client" class="form-control" id="Nom_client">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="text" maxlength="20" class="form-control" name="telephone" placeholder="Téléphone" id="telephone">
                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" name="adresse" placeholder="Adresse" class="form-control" id="adresse">
                    </div>
                    <div class="mb-3">
                        <label for="nationalite" class="form-label">Nationalité</label>
                        <input type="text" name="nationalite" placeholder="Nationalité" class="form-control" id="nationalite">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Genre</label>
                        <input type="text" name="gender" placeholder="Genre" class="form-control" id="gender">
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
