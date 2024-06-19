<?php $this->load->view('includes/header'); ?>
    <div class="container">
        <h2>Modifier une agence</h2>
        <form id="updateForm" action="<?= base_url('agence/edit/' . $id) ?>" method="post">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="<?= $agence['nom'] ?>" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" name="adresse" value="<?= $agence['adresse'] ?>" required>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text" class="form-control" name="telephone" value="<?= $agence['telephone'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?= $agence['email'] ?>" required>
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
            window.location.href = "<?= base_url('agence/index') ?>";
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
