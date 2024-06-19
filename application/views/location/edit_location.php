<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Modifier une location</h5>
                <form method="post" action="<?= base_url('location/edit/' . $ID_location) ?>">
                    <div class="mb-3">
                        <label for="matricule" class="form-label">matricule</label>
                        <input type="text" name="matricule" value="<?= $location->matricule ?>" class="form-control" id="matricule">
                    </div>
                    <div class="mb-3">
                        <label for="ID_client" class="form-label">ID Client</label>
                        <input type="text" name="ID_client" value="<?= $location->ID_client ?>" class="form-control" id="ID_client">
                    </div>
                    <div class="mb-3">
                        <label for="ID_agence" class="form-label">ID Agence</label>
                        <input type="text" name="ID_agence" value="<?= $location->ID_agence ?>" class="form-control" id="ID_agence">
                    </div>
                    <div class="mb-3">
                        <label for="date_debut" class="form-label">Date début</label>
                        <input type="text" name="date_debut" value="<?= $location->date_debut ?>" class="form-control" id="date_debut">
                    </div>
                    <div class="mb-3">
                        <label for="date_fin" class="form-label">Date fin</label>
                        <input type="text" name="date_fin" value="<?= $location->date_fin ?>" class="form-control" id="date_fin">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
