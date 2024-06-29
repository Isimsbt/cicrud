<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-list { background-color: #007bff; color: white; }
        .btn-add { background-color: #28a745; color: white; }
        .btn-edit { background-color: #ffc107; color: white; }
        .btn-delete { background-color: #dc3545; color: white; }
        table { width: 100%; }
        th, td { padding: 15px; text-align: center; }
        th { background-color: #f2f2f2; }
        .btn-block { width: 100%; }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="my-4">Dashboard</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Section</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>User</td>
                    <td>
					<a href="<?php echo site_url('user/index'); ?>" class="btn btn-list btn-block mb-2">Liste des utilisateurs</a>
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-danger btn-block mb-2">Ajouter utilisateur</a>

                    </td>
                </tr>
                <tr>
                    <td>Agence</td>
                    <td>
                        <a href="<?php echo site_url('agence/index'); ?>" class="btn btn-list btn-block mb-2">liste des agences</a>
						<a href="<?php echo site_url('agence/add'); ?>" class="btn btn-danger btn-block mb-2">Ajouter agence</a>
                    </td>
                </tr>
                <tr>
                    <td>Taxi</td>
                    <td>
                        <a href="<?php echo site_url('taxi'); ?>" class="btn btn-list btn-block mb-2">liste taxi</a>
                        <a href="<?php echo site_url('taxi/add'); ?>" class="btn btn-danger btn-block mb-2">Ajouter taxi</a>
                    </td>
                </tr>
                <tr>
                    <td>Reservation</td>
                    <td>
                        <a href="<?php echo site_url('reservation/index'); ?>" class="btn btn-list btn-block mb-2">

						                                                                                          Liste Reservation </a>
						<a href="<?php echo site_url('reservation/add'); ?>" class="btn btn-danger btn-block mb-2">Ajouter reservation</a>
                    </td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td>
                        <a href="<?php echo site_url('location/index'); ?>" class="btn btn-list btn-block mb-2">Liste des locations</a>
                        <a href="<?php echo site_url('location/add'); ?>" class="btn btn-danger btn-block mb-2">ajouter location</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
