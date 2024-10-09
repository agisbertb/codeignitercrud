<?= $this->extend('layouts/layout'); ?>

<?= $this->section('content'); ?>
<div class="w-100 p-4 bg-light rounded-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="mb-4 text-dark">Users</h2>
            <!-- Alert -->
            <?= $this->include('partials/alert'); ?>
            <a href="/create" class="btn btn-success mb-3 float-end">Create new User</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- Users Table -->
            <?= $this->include('partials/users_table'); ?>
        </div>
    </div>
</div>

<!-- Delete modal -->
<?= $this->include('partials/delete_modal'); ?>

<?= $this->endSection(); ?>