<?= $this->extend('template/main') ?>



<?= $this->section('content-title'); ?>
User
<?= $this->endSection(); ?>

<?= $this->section('card-header'); ?>
Profile
<div class="float-right">
    <a href="/user/list" class="btn btn-primary btn-sm"><i class="far fa-user"></i> Daftar User</a>
</div>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="card mb-3" style="max-width: 680px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="/img/admin.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <h5 class="card-title"><?= strtoupper($user['username']); ?></h5>
                    <li class="list-group-item"><small>No Telepon</small><br><?= $user['no_telp']; ?></li>
                    <li class="list-group-item"><a href="<?= site_url('dashboard'); ?>" class="btn btn-sm btn-danger"><i class="fas fa-caret-left fa-xs"></i> Kembali</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>