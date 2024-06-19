<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Liste des utilisateurs</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID_Client</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>telephone</th>
                            <th>Adresse</th>
                            <th>Nationalité</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($users) && !empty($users)): ?>
                            <?php foreach ($users as $row): ?>
                                <tr>
                                    <td><?= $row['ID_client'] ?></td>
                                    <td><?=$row['Nom_client'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?=$row ['telephone'] ?></td>
                                    <td><?= $row['adresse'] ?></td>
                                    <td><?= $row['nationalite']?></td>
                                    <td>
									   
                                        <a href="<?= base_url('user/edit/' . $row['ID_client']) ?>" class="btn btn-sm btn-primary">Modifier</a>
                                        <a href="<?= base_url('user/delete/' . $row['ID_client']) ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" class="btn btn-sm btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center">Aucun utilisateur trouvé</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
				<a href="<?= base_url('user/add/' . $row['ID_client']) ?>" class="btn btn-sm btn-primary">ajouter</a>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
