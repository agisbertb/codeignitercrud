<?= $this->extend('layouts/layout'); ?>

<?= $this->section('content'); ?>
<div class="w-100 p-4 bg-light rounded-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="mb-4 text-dark">Create User</h2>
            <!-- Alert -->
            <?= $this->include('partials/alert'); ?>
            <!-- User Form -->
            <?= $this->include('partials/form_user'); ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>