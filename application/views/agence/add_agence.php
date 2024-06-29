<?php $this->load->view('includes/header'); ?>

<div class="container">
    <h2>Ajouter une nouvelle agence</h2>
    <form action="<?= base_url('agence/add') ?>" method="post">
        <div class="form-group">
            <label for="nom">Nom de l'agence</label>
            <input type="text" class="form-control" name="nom" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" name="adresse" required>
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" name="telephone" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

<?php $this->load->view('includes/footer'); ?>
