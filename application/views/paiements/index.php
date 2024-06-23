<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Liste des paiements</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Paiement</th>
                            <th>ID Réservation</th>
                            <th>Montant</th>
                            <th>Date</th>
                            <th>Mode de Paiement</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($paiements) && !empty($paiements)): ?>
                            <?php foreach ($paiements as $row): ?>
                                <tr>
                                    <td><?= $row['id_paiement'] ?></td>
                                    <td><?= $row['id_reservation'] ?></td>
                                    <td><?= $row['montant'] ?></td>
                                    <td><?= $row['date'] ?></td>
                                    <td><?= $row['mode_paiement'] ?></td>
                                    <td>
                                        <a href="<?= base_url('paiement/edit/' . $row['ID_paiement']) ?>" class="btn btn-sm btn-primary">Modifier</a>
                                        <a href="<?= base_url('paiement/delete/' . $row['ID_paiement']) ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce paiement ?')" class="btn btn-sm btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center">Aucun paiement trouvé</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <a href="<?= base_url('paiement/add') ?>" class="btn btn-sm btn-primary">Ajouter un paiement</a>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
