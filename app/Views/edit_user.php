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
    <title>Edit User - CodeIgniter CRUD</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <style>
        .btn {
            font-weight: bold;
        }

        input:focus {
            border-color: #ff6700 !important;
            box-shadow: 0 0 5px rgba(255, 103, 0, 0.8);
            outline: none;
        }

        label.form-label {
            font-weight: bold;
        }

        .form-actions {
            text-align: right;
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
                    <h2 class="mb-4 text-dark">Edit User</h2>

                    <!-- Alert -->

                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-weight: bold;">
                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                <p style="margin: 0;"><?= esc($error) ?></p>
                            <?php endforeach; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

            <!-- Form -->
            <form action="/update/<?= $user['id'] ?>" method="post">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label text-dark">Name</label>
                        <input type="text" name="name" id="name" value="<?= $user['name'] ?>" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="surname" class="form-label text-dark">Surname</label>
                        <input type="text" name="surname" id="surname" value="<?= $user['surname'] ?>" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="age" class="form-label text-dark">Age</label>
                        <input type="number" name="age" id="age" value="<?= $user['age'] ?>" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label text-dark">Email</label>
                        <input type="email" name="email" id="email" value="<?= $user['email'] ?>" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="phone" class="form-label text-dark">Phone</label>
                        <input type="text" name="phone" id="phone" value="<?= $user['phone'] ?>" class="form-control" required>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-warning">Update User</button>
                    <a href="/" class="btn btn-secondary">Cancel</a>
                </div>
            </form>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light py-3 text-center mt-auto">
        <div class="container">
            <p class="mb-0">&copy; 2024 CodeIgniter CRUD. Made with ❤️ by <a href="https://github.com/agisbertb" class="text-light" target="_blank">agisbertb</a></p>
        </div>
    </footer>

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>