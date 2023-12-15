<?= $this->extend('template/main'); ?>

<?= $this->section('content-title'); ?>
Form Matakuliah
<?= $this->endSection(); ?>

<?= $this->section('card-header'); ?>
<a href="/matakuliah" class="btn btn-sm btn-danger"><i class="fas fa-caret-left fa-xs"></i> Kembali</a>

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<form action="/matakuliah/addMatakuliah" method="post">
    <?= csrf_field(); ?>
    <div class="form-group">
        <label for="kode_matkul">Kode</label>
        <input type="text" name="kode_matkul" id="kode_matkul" class="form-control" placeholder="Kode Matakuliah..." required value="<?= old('kode_matkul'); ?>">
    </div>
    <div class="form-group">
        <label for="nama_matkul">Matakuliah</label>
        <input type="text" name="nama_matkul" id="nama_matkul" class="form-control" placeholder="Nama Matakuliah..." required value="<?= old('nama_matkul'); ?>">
    </div>
    <div class="form-group">
        <label for="dosen_matkul">Dosen</label>
        <input type="text" name="dosen_matkul" id="dosen_matkul" class="form-control" placeholder="Nama Dosen Matakuliah...">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    <?php if (session()->has('error')) : ?>
        <div class="text-danger">
            <?= session('error'); ?>
        </div>
    <?php endif; ?>
</form>
<?= $this->endSection(); ?>