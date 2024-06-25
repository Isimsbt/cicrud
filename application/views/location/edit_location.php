<?php $this->load->view('includes/header'); ?>
    <div class="container">
        <h2>Modifier une location</h2>
        <form id="updateForm" action="<?= base_url('location/edit/' . $id) ?>" method="post">
            <div class="form-group">
                <label for="matricule">matricule</label>
                <input type="text" class="form-control" name="matricule" value="<?= $location['matricule'] ?>" required>
            </div>
            <div class="form-group">
                <label for="ID_client">ID Client</label>
                <input type="text" class="form-control" name="ID_client" value="<?= $location['ID_client'] ?>" required>
            </div>
            <div class="form-group">
                <label for="ID_agence">ID Agence</label>
                <input type="text" class="form-control" name="ID_agence" value="<?= $location['ID_agence'] ?>" required>
            </div>
            <div class="form-group">
                <label for="date_debut">Date début</label>
                <input type="date" class="form-control" name="date_debut" value="<?= $location['date_debut'] ?>" required>
            </div>
            <div class="form-group">
                <label for="date_fin">Date fin</label>
                <input type="date" class="form-control" name="date_fin" value="<?= $location['date_fin'] ?>" required>
            </div>
            <button type="button" id="updateButton" class="btn btn-sm btn-primary">Mettre à jour</button>
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
            window.location.href = "<?= base_url('location/index') ?>";
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
