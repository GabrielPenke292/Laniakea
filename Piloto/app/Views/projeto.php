<?= $this->extend('template/layout'); ?>



<header>
    <?= $this->include('template/navbar'); ?>

</header>



<?= $this->section('content'); ?>

<div class="section-title">
    <h2>Services</h2>
    <p>Check out the great services we offer</p>
</div>

<?= $this->endSection() ?>