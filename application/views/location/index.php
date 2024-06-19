<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Liste des locations</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Location</th>
                            <th>matricule</th>
                            <th>ID Client</th>
                            <th>ID Agence</th>
                            <th>Date début</th>
                            <th>Date fin</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($locations) && !empty($locations)): ?>
                            <?php foreach ($locations as $row): ?>
                                <tr>
                                    <td><?= $row['ID_location'] ?></td>
                                    <td><?= $row['matricule'] ?></td>
                                    <td><?= $row['ID_client'] ?></td>
                                    <td><?= $row['ID_agence'] ?></td>
                                    <td><?= $row['date_debut'] ?></td>
                                    <td><?= $row['date_fin'] ?></td>
                                    <td>
                                        <a href="<?= base_url('location/edit/' . $row['ID_location']) ?>" class="btn btn-sm btn-primary">Modifier</a>
                                        <a href="<?= base_url('location/delete/' . $row['ID_location']) ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette location ?')" class="btn btn-sm btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center">Aucune location trouvée</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <a href="<?= base_url('location/add') ?>" class="btn btn-sm btn-primary">Ajouter une location</a>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
