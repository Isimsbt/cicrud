<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Add Reservation</h5>
                <form method="post" action="<?= base_url() ?>reservation/add">
                    <div class="mb-3">
                        <label for="ID_client" class="form-label">Client ID</label>
                        <input type="text" name="ID_client" placeholder="Client ID" class="form-control" id="ID_client">
                    </div>
                    <div class="mb-3">
                        <label for="ID_taxi" class="form-label">Taxi ID</label>
                        <input type="text" name="ID_taxi" placeholder="Taxi ID" class="form-control" id="ID_taxi">
                    </div>
                    <div class="mb-3">
                        <label for="date_debut" class="form-label">Start Date</label>
                        <input type="date" name="date_debut" class="form-control" id="date_debut">
                    </div>
                    <div class="mb-3">
                        <label for="date_fin" class="form-label">End Date</label>
                        <input type="date" name="date_fin" class="form-control" id="date_fin">
                    </div>
                    <div class="mb-3">
                        <label for="etat" class="form-label">Status</label>
                        <select name="etat" class="form-select" id="etat">
                            <option value="en attente">En attente</option>
                            <option value="confirmé">Confirmé</option>
                            <option value="annulé">Annulé</option>
                        </select>
                    </div>
					<button type="button" id="addButton" class="btn btn-sm btn-primary">Ajouter</button>
<script>
document.getElementById('addButton').addEventListener('click', function() {
    // Redirect to the reservation/index page
    window.location.href = "http://localhost/cicrud/reservation/index";
});
</script>
                </form>
            </div>
        </div>
    </div>
</div>




<?php $this->load->view('includes/footer'); ?>
