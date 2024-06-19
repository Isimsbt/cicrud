<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Modifier un taxi</h5>
                <form method="post" action="<?= base_url('taxi/edit/' . $matricule) ?>">
                    <div class="mb-3">
                        <label for="marque" class="form-label">Marque</label>
                        <input type="text" name="marque" value="<?= $taxi->marque ?>" class="form-control" id="marque">
                    </div>
                    <div class="mb-3">
                        <label for="modele" class="form-label">Modèle</label>
                        <input type="text" name="modele" value="<?= $taxi->modele ?>" class="form-control" id="modele">
                    </div>
                    <div class="mb-3">
                        <label for="disponibilite" class="form-label">Disponibilité</label>
                        <input type="text" name="disponibilite" value="<?= $taxi->disponibilite ?>" class="form-control" id="disponibilite">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
