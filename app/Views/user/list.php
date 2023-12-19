<?= $this->extend('template/main'); ?>


<?= $this->section('content-title'); ?>
Daftar User Login
<?= $this->endSection(); ?>

<?= $this->section('card-header'); ?>
List
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="d-flex justify-content-around flex-wrap">
    <?php foreach ($user as $row) : ?>

        <div class="card mb-3 mr-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/img/admin.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <h5 class="card-title"><?= strtoupper($row['username']); ?></h5>
                            <li class="list-group-item"><small>No Telepon</small><br><?= $row['no_telp']; ?></li>
                            <?php if (session('username') == $row['username']) : ?>
                                <li class="list-group-item"><small>Status</small><br> <span class="badge badge-primary">Active</span> </li>
                            <?php else : ?>
                                <li class="list-group-item"><small>Status</small><br> <span class="badge badge-danger">Inactive</span> </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>