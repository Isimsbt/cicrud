<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Liste des locations</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID Location</th>
                            <th scope="col">Matricule</th>
                            <th scope="col">ID Client</th>
                            <th scope="col">ID Agence</th>
                            <th scope="col">Date début</th>
                            <th scope="col">Date fin</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($locations as $location) : ?>
                            <tr>
                                <th scope="row"><?= $location['ID_location'] ?></th>
                                <td><?= $location['matricule'] ?></td>
                                <td><?= $location['ID_client'] ?></td>
                                <td><?= $location['ID_agence'] ?></td>
                                <td><?= $location['date_debut'] ?></td>
                                <td><?= $location['date_fin'] ?></td>
                                <td>
                                    <a href="<?= base_url() ?>location/edit/<?= $location['ID_location'] ?>" class="btn btn-sm btn-warning">Modifier</a>
                                    <a href="<?= base_url() ?>location/delete/<?= $location['ID_location'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette location?')">Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="<?= base_url('location/add') ?>" class="btn btn-sm btn-primary">Ajouter une nouvelle location</a>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
