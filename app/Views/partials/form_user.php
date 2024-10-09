<form action="<?= isset($user) ? '/update/' . $user['id'] : '/store' ?>" method="post">
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="name" class="form-label text-dark">Name</label>
            <input type="text" name="name" id="name" value="<?= isset($user) ? $user['name'] : old('name') ?>" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="surname" class="form-label text-dark">Surname</label>
            <input type="text" name="surname" id="surname" value="<?= isset($user) ? $user['surname'] : old('surname') ?>" class="form-control" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-4">
            <label for="age" class="form-label text-dark">Age</label>
            <input type="number" name="age" id="age" value="<?= isset($user) ? $user['age'] : old('age') ?>" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label for="email" class="form-label text-dark">Email</label>
            <input type="email" name="email" id="email" value="<?= isset($user) ? $user['email'] : old('email') ?>" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label for="phone" class="form-label text-dark">Phone</label>
            <input type="text" name="phone" id="phone" value="<?= isset($user) ? $user['phone'] : old('phone') ?>" class="form-control" required>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn <?= isset($user) ? 'btn-warning' : 'btn-success' ?>">
            <?= isset($user) ? 'Update User' : 'Create User' ?>
        </button>
        <a href="/" class="btn btn-secondary">Cancel</a>
    </div>
</form>