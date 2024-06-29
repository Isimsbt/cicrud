<?php $this->load->view('includes/header'); ?>

<div class="container">
    <h2>Modifier un utilisateur</h2>
    <form action="<?= base_url('user/edit/' . $client->ID_client) ?>" method="post">
        <div class="form-group">
            <label for="ID_client">ID_client</label>
            <input type="text" class="form-control" name="ID_client" value="<?= $client->ID_client ?>" required>
        </div>
        <div class="form-group">
            <label for="Nom_client">Nom</label>
            <input type="text" class="form-control" name="Nom_client" value="<?= $client->Nom_client ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $client->email ?>" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" name="adresse" value="<?= $client->adresse ?>" required>
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" name="telephone" value="<?= $client->telephone ?>" required>
        </div>
        <div class="form-group">
            <label for="nationalite">Nationalité</label>
            <input type="text" class="form-control" name="nationalite" value="<?= $client->nationalite ?>" required>
        </div>
        <div class="form-group">
            <label for="gender">Genre</label>
            <input type="text" class="form-control" name="gender" value="<?= $client->gender ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>

<?php $this->load->view('includes/footer'); ?>
