<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Ajouter un utilisateur</h5>
                <form method="post" action="<?= base_url() ?>user/add">
                    <div class="mb-3">
                        <label for="id_client" class="form-label">ID_Client</label>
                        <input type="text" name="ID_client" placeholder="ID Client" class="form-control" id="ID_client">

                    </div>
                    <div class="mb-3">
                        <label for="Nom_client" class="form-label">Nom_client </label>
                        <input type="text" name="Nom_client" placeholder="Nom_client" class="form-control" id="Nom_client">

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">telephone</label>
                        <input type="text" maxlength="10" class="form-control" name="telephone" placeholder="Téléphone" id="telephone">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Adresse</label>
                        <input type="text" name="adresse" placeholder="Adresse" class="form-control" id="addresse">
                    </div>
					<div class="mb-3">
                        <label for="nationalite" class="form-label">nationalite</label>
                        <input type="text" name="nationalite" placeholder="nationalite" class="form-control" id="nationalite">
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
           
                 
                

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer'); ?>
