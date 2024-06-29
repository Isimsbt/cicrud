<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Liste des agences</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID_agence</th>
                            <th scope="col">Nom de l'agence</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($agences as $agence) : ?>
                            <tr>
                                <td><?= $agence['ID_agence'] ?></td>
                                <td><?= $agence['nom'] ?></td>
                                <td><?= $agence['adresse'] ?></td>
                                <td><?= $agence['telephone'] ?></td>
                                <td><?= $agence['email'] ?></td>
                                <td>
                                    <a href="<?= base_url() ?>agence/edit/<?= $agence['ID_agence'] ?>" class="btn btn-sm btn-warning">Modifier</a>
                                    <a href="<?= base_url() ?>agence/delete/<?= $agence['ID_agence'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette agence?')">Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="<?= base_url('agence/add') ?>" class="btn btn-sm btn-primary">Ajouter une nouvelle agence</a>
				<a href="<?php echo site_url('dashboard'); ?>" class="btn btn-secondary">Back to Dashboard</a>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
