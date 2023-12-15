<?= $this->extend('template/main'); ?>

<?= $this->section('content-title'); ?>
Form Mahasiswa
<?= $this->endSection(); ?>

<?= $this->section('card-header'); ?>
<div class="input-group">
    <a href="/mahasiswa" class="btn btn-danger btn-sm"><i class="fas fa-caret-left fa-xs"></i> Kembali</a>
</div>
<small>Kembali ke halaman utama</small>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>



<?= form_open('/mahasiswa/addMahasiswa'); ?>
<div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" name="nim" id="nim" class="form-control" placeholder="Nomor Induk Mahasiswa..." required value="<?= old('nim'); ?>">
</div>
<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Mahasiswa..." required value="<?= old('nama'); ?>">
</div>
<div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Mahasiswa...">
</div>
<div class="form-group">
    <label for="telepon">Telepon</label>
    <input type="text" name="telepon" id="telepon" class="form-control" placeholder="No Telepon Mahasiswa...">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success">Submit</button>
</div>
<?php if (session()->has('error')) : ?>
    <div class="text-danger">
        <?= session('error'); ?>
    </div>
<?php endif; ?>
<?= form_close(); ?>
<?= $this->endSection(); ?>