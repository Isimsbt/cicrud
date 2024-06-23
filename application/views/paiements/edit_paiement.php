<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Modifier un paiement</h5>
                <form method="post" action="<?= base_url('paiement/edit/' . $ID_paiement) ?>">
				<div class="mb-3">

                   <label for="id_paiement" class="form-label">ID_paiement</label>
                    <input type="text" name="id_paiement" value="<?= $paiement->id_paiement ?>" class="form-control" id="id_paiement">
                 </div>

                    <div class="mb-3">

                        <label for="id_reservation" class="form-label">ID Réservation</label>
                        <input type="text" name="id_reservation" value="<?= $paiement->id_reservation ?>" class="form-control" id="id_reservation">
                    </div>
                    <div class="mb-3">
                        <label for="montant" class="form-label">Montant</label>
                        <input type="text" name="montant" value="<?= $paiement->montant ?>" class="form-control" id="montant">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" name="date" value="<?= $paiement->date ?>" class="form-control" id="date">
                    </div>
                    <div class="mb-3">
                        <label for="mode_paiement" class="form-label">Mode de Paiement</label>
                        <select name="mode_paiement" class="form-control" id="mode_paiement">
                            <option value="espèces" <?= $paiement->mode_paiement == 'espèces' ? 'selected' : '' ?>>Espèces</option>
                            <option value="carte" <?= $paiement->mode_paiement == 'carte' ? 'selected' : '' ?>>Carte</option>
                            <option value="chèque" <?= $paiement->mode_paiement == 'chèque' ? 'selected' : '' ?>>Chèque</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
