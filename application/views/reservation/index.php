<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Liste des réservations</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID Client</th>
                            <th scope="col">matricule</th>
                            
                            <th scope="col">Date début</th>
                            <th scope="col">Date fin</th>
                            <th scope="col">État</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($reservations as $reservation) : ?>
                            <tr>
                                <th scope="row"><?= $reservation['ID_reservation'] ?></th>
                                <td><?= $reservation['ID_client'] ?></td>
                                <td><?= $reservation['matricule'] ?></td>
                               
                                <td><?= $reservation['date_debut'] ?></td>
                                <td><?= $reservation['date_fin'] ?></td>
                                <td><?= $reservation['etat'] ?></td>
                                <td>
                                    <a href="<?= base_url() ?>reservation/edit/<?= $reservation['ID_reservation'] ?>" class="btn btn-sm btn-warning">Modifier</a>
                                    <a href="<?= base_url() ?>reservation/delete/<?= $reservation['ID_reservation'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette réservation?')">Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="<?= base_url('reservation/add') ?>" class="btn btn-sm btn-primary">Ajouter une réservation</a>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
