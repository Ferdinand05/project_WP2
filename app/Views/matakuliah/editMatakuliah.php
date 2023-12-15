<?= $this->extend('template/main'); ?>


<?= $this->section('content-title'); ?>
Form Edit Matakuliah
<?= $this->endSection(); ?>

<?= $this->section('card-header'); ?>
<a href="<?= site_url('matakuliah'); ?>" class="btn btn-sm btn-danger"><i class="fas fa-backward fa-xs"></i> Kembali</a>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<form action="/matakuliah/updateMatakuliah" method="post">
    <div class="form-group">
        <label for="kode_matkul">Kode Matakuliah</label>
        <input type="text" name="kode_matkul" id="kode_matkul" class="form-control" readonly value="<?= $matakuliah['kode_matkul']; ?>">
    </div>
    <div class="form-group">
        <label for="nama_matkul">Nama Matakuliah</label>
        <input type="text" name="nama_matkul" id="nama_matkul" class="form-control" value="<?= $matakuliah['nama_matkul']; ?>">
    </div>
    <div class="form-group">
        <label for="dosen">Nama Dosen</label>
        <input type="text" name="dosen" id="dosen" class="form-control" value="<?= $matakuliah['dosen_matkul']; ?>">
    </div>
    <div class="form-group">
        <button class="btn btn-warning">Update</button>
    </div>
</form>
<?= $this->endSection(); ?>