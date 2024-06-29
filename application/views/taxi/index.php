<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Liste des Taxis</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Marque</th>
                        <th>Modèle</th>
                        <th>Disponibilité</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($taxis as $taxi) : ?>
                        <tr>
                            <td><?= $taxi->matricule ?></td>
                            <td><?= $taxi->marque ?></td>
                            <td><?= $taxi->modele ?></td>
                            <td><?= $taxi->disponibilite ?></td>
                            <td>
                                <a href="<?= base_url('taxi/edit/' . $taxi->matricule) ?>" class="btn btn-primary">Modifier</a>
                                <a href="<?= base_url('taxi/delete/' . $taxi->matricule) ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= base_url('taxi/add') ?>" class="btn btn-success">Ajouter un taxi</a>
			<a href="<?php echo site_url('dashboard'); ?>" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
