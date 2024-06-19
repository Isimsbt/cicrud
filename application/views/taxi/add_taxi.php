<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Ajouter un taxi</h5>
                <form method="post" action="<?= base_url() ?>taxi/add">
                    <div class="mb-3">
                        <label for="matricule" class="form-label">Matricule</label>
                        <input type="text" name="matricule" placeholder="Matricule" class="form-control" id="matricule">
                    </div>
                    <div class="mb-3">
                        <label for="marque" class="form-label">Marque</label>
                        <input type="text" name="marque" placeholder="Marque" class="form-control" id="marque">
                    </div>
                    <div class="mb-3">
                        <label for="modele" class="form-label">Modèle</label>
                        <input type="text" class="form-control" name="modele" id="modele" placeholder="Modèle">
                    </div>
                    <div class="mb-3">
                        <label for="disponibilite" class="form-label">Disponibilité</label>
                        <input type="text" class="form-control" name="disponibilite" id="disponibilite" placeholder="Disponibilité">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
