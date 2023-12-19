<?= $this->extend('template/main'); ?>


<?= $this->section('content-title'); ?>
Detail Nilai & Mahasiswa
<?= $this->endSection() ?>
<?= $this->section('card-header'); ?>
Detail <i class="fas fa-info-circle"></i>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
<div class="d-flex justify-content-around">
    <div class="card flex-grow-1 mr-2">

        <ul class="list-group list-group-flush ">
            <li class="list-group-item"><small>Nama</small><br><?= $data['nama']; ?></li>
            <li class="list-group-item"><small>Matakuliah</small><br><?= $data['nama_matkul']; ?></li>
            <li class="list-group-item"><small>Nilai UTS</small><br><?= $data['nilai_uts']; ?></li>
            <li class="list-group-item"><small>Nilai UAS</small><br><?= $data['nilai_uas']; ?></li>
            <li class="list-group-item"><small>Nilai Tugas</small><br><?= $data['nilai_tugas']; ?></li>
            <li class="list-group-item"><small>Rata Rata</small><br><?= $data['rata_rata']; ?></li>
        </ul>
    </div>

    <div class="card flex-grow-1 ">

        <ul class="list-group list-group-flush ">
            <li class="list-group-item"><small>NIM</small><br><?= $data['nim']; ?></li>
            <li class="list-group-item"><small>Telepon</small><br><?= $data['telepon']; ?></li>
            <li class="list-group-item"><small>Alamat</small><br><?= $data['alamat']; ?></li>
            <li class="list-group-item"><small>Dosen Matakuliah</small><br><?= $data['dosen_matkul']; ?></li>
            <li class="list-group-item"><a href="/nilai" class="btn btn-sm btn-danger">Kembali</a></li>
        </ul>
    </div>

</div>

<?= $this->endSection() ?>