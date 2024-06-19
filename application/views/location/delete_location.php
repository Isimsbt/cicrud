<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Supprimer une location</h5>
                <form method="post" action="<?= base_url('location/delete/' . $ID_location) ?>">
                    <p>Êtes-vous sûr de vouloir supprimer cette location ?</p>
                    <p>ID Taxi : <?= $location->matricule ?></p>
                    <p>ID Client : <?= $location->ID_client ?></p>
                    <p>ID Agence : <?= $location->ID_agence ?></p>
                    <p>Date début : <?= $location->date_debut ?></p>
                    <p>Date fin : <?= $location->date_fin ?></p>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                    <a href="<?= base_url('location') ?>" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
