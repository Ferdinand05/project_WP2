<?= $this->extend('template/main'); ?>


<?= $this->section('content-title'); ?>
Form Input Nilai
<?= $this->endSection(); ?>

<?= $this->section('card-header'); ?>
<a href="/nilai" class="btn btn-sm btn-danger"><i class="fas fa-caret-left fa-xs"></i> Kembali</a>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<form action="/nilai/addNilai" method="post">
    <div class="form-group">
        <label for="mahasiswa">Mahasiswa</label>
        <select name="mahasiswa" id="mahasiswa" class="form-control" required>
            <option value="" selected disabled>- Pilih Mahasiswa</option>
            <?php foreach ($mahasiswa as $row) : ?>
                <option value="<?= $row['nim']; ?>"><?= $row['nama']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="matakuliah">Matakuliah</label>
        <select name="matakuliah" id="matakuliah" class="form-control" required>
            <option value="" selected disabled>- Pilih Matakuliah</option>
            <?php foreach ($matakuliah as $row) : ?>
                <option value="<?= $row['kode_matkul']; ?>"><?= $row['nama_matkul']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="nilai_tugas">Nilai Tugas</label>
        <input type="number" name="nilai_tugas" id="nilai_tugas" class="form-control" placeholder="Nilai Tugas Mahasiswa...">
    </div>
    <div class="form-group">
        <label for="nilai_uts">Nilai UTS</label>
        <input type="number" name="nilai_uts" id="nilai_uts" class="form-control" placeholder="Nilai UTS Mahasiswa...">
    </div>
    <div class="form-group">
        <label for="nilai_uas">Nilai UAS</label>
        <input type="number" name="nilai_uas" id="nilai_uas" class="form-control" placeholder="Nilai UAS Mahasiswa...">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-warning">Submit</button>
    </div>
</form>
<?= $this->endSection(); ?>