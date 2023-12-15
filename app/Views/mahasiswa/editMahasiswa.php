<?= $this->extend('template/main'); ?>

<?= $this->section('content-title'); ?>
Form Edit Mahasiswa
<?= $this->endSection(); ?>

<?= $this->section('card-header'); ?>
<a href="<?= site_url('mahasiswa'); ?>" class="btn btn-sm btn-danger"><i class="fas fa-backward fa-xs"></i> Kembali</a>
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>
<form action="/mahasiswa/updatemahasiswa" method="post">
    <?= csrf_field(); ?>
    <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" class="form-control" value="<?= $mahasiswa['nim']; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="<?= $mahasiswa['nama']; ?>">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $mahasiswa['alamat']; ?>">
    </div>
    <div class="form-group">
        <label for="telepon">No Telepon</label>
        <input type="text" name="telepon" id="telepon" class="form-control" value="<?= $mahasiswa['telepon']; ?>">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-warning">Update</button>
    </div>
    <?php if (session()->has('error')) : ?>
        <div class="text-danger">
            <small><?= session('error') ?></small>
        </div>
    <?php endif; ?>
</form>
<?= $this->endSection(); ?>