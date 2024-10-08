<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Simply CRUD of users made with CodeIgniter framework">
    <meta name="author" content="agisbertb">
    <meta name="keywords" content="CodeIgniter, CRUD, PHP, MySQL">
    <meta name="robots" content="index, follow">
    <title>CodeIgniter CRUD</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <style>
        .btn {
            font-weight: bold;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100 bg-dark text-light">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark py-3">
        <div class="container d-flex justify-content-center">
            <a class="navbar-brand" href="/">
                <img src="<?= base_url('assets/images/Logo.webp') ?>" alt="CodeIgniter Logo" class="img-fluid" style="max-height: 99px;">
            </a>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container d-flex justify-content-center align-items-center flex-grow-1">
        <div class="w-100 p-4 bg-light rounded-3">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mb-4 text-dark">Users</h2>

                    <!-- Alert -->

                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="font-weight: bold;">
                            <?= session()->getFlashdata('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <a href="/create" class="btn btn-success mb-3 float-end">Create new User</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Table responsive -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered rounded-3 overflow-hidden">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Age</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td><?= $user['id'] ?></td>
                                        <td><?= $user['name'] ?></td>
                                        <td><?= $user['surname'] ?></td>
                                        <td><?= $user['age'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td><?= $user['phone'] ?></td>
                                        <td class="text-center">
                                            <div class="d-flex flex-column">
                                                <a href="/edit/<?= $user['id'] ?>" class="btn btn-warning btn-sm mb-1">Edit</a>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="<?= $user['id'] ?>">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- Modal for Deleting User -->
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="deleteModalLabel">Confirm Delete</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        Are you sure you want to delete this user?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <form id="deleteForm" action="" method="post">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light py-3 text-center mt-auto">
        <div class="container">
            <p class="mb-0">&copy; 2024 CodeIgniter CRUD. Made with ❤️ by <a href="https://github.com/agisbertb" class="text-light" target="_blank">agisbertb</a></p>
        </div>
    </footer>

    <script>
        const deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const userId = button.getAttribute('data-bs-id');
            const form = document.getElementById('deleteForm');

            form.action = '/delete/' + userId;
        });
    </script>

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>