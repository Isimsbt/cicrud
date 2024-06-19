<?php $this->load->view('includes/header'); ?>
<div class="container">
    <h2>Update Reservation</h2>
    <form id="updateForm" action="<?= base_url('reservation/edit/' . $id) ?>" method="post">
        <div class="form-group">
            <label for="ID_client">Client ID</label>
            <input type="text" class="form-control" name="ID_client" value="<?= $reservation['ID_client'] ?>" required>
        </div>
        <div class="form-group">
            <label for="matricule">Taxi ID</label>
            <input type="text" class="form-control" name="matricule" value="<?= $reservation['matricule'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="date_debut">Start Date</label>
            <input type="date" class="form-control" name="date_debut" value="<?= $reservation['date_debut'] ?>" required>
        </div>
        <div class="form-group">
            <label for="date_fin">End Date</label>
            <input type="date" class="form-control" name="date_fin" value="<?= $reservation['date_fin'] ?>" required>
        </div>
        <div class="form-group">
            <label for="etat">Status</label>
            <select class="form-control" name="etat" required>
                <option value="en attente" <?= ($reservation['etat'] == 'en attente') ? 'selected' : '' ?>>En attente</option>
                <option value="confirmé" <?= ($reservation['etat'] == 'confirmé') ? 'selected' : '' ?>>Confirmé</option>
                <option value="annulé" <?= ($reservation['etat'] == 'annulé') ? 'selected' : '' ?>>Annulé</option>
            </select>
        </div>
        <button type="button" id="updateButton" class="btn btn-sm btn-primary">Update</button>
    </form>
</div>

<script>
document.getElementById('updateButton').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default button behavior

    var form = document.getElementById('updateForm');

    // Create an AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open('POST', form.action, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Collect form data
    var formData = new FormData(form);
    var data = new URLSearchParams();
    for (var pair of formData) {
        data.append(pair[0], pair[1]);
    }

    // Handle response
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Redirect to the index page
            window.location.href = "<?= base_url('reservation/index') ?>";
        } else {
            // Handle error (optional)
            console.error('Update failed:', xhr.responseText);
        }
    };

    // Send request
    xhr.send(data);
});
</script>

<?php $this->load->view('includes/footer'); ?>
