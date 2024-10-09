<?= $this->include('partials/header'); ?>
<?= $this->include('partials/navbar'); ?>

<div class="container d-flex justify-content-center align-items-center flex-grow-1">
    <?= $this->renderSection('content'); ?>
</div>

<?= $this->include('partials/footer'); ?>