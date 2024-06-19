<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Supprimer un taxi</h5>
                <form method="post" action="<?= base_url() ?>taxi/delete/<?= $taxi->matricule ?>">
                    <p>Êtes-vous sûr de vouloir supprimer ce taxi ?</p>
                    <p>Matricule : <?= $taxi->matricule ?></p>
                    <p>Marque : <?= $taxi->marque ?></p>
                    <p>Modèle : <?= $taxi->modele ?></p>
                    <p>Disponibilité : <?= $taxi->disponibilite ?></p>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                    <a href="<?= base_url() ?>taxi" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
