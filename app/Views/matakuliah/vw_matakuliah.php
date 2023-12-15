<?= $this->extend('template/main'); ?>

<?= $this->section('content-title') ?>
Matakuliah
<?= $this->endSection(); ?>


<?= $this->section('card-header'); ?>
<a href="/matakuliah/formMatakuliah" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-xs"></i> Tambah</a>
<?php if (session()->has('success')) : ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Congratulation!</strong> <?= session('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Matakuliah</th>
            <th>Dosen</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($matakuliah as $row) :
        ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $row['kode_matkul']; ?></td>
                <td><?= $row['nama_matkul']; ?></td>
                <td><?= $row['dosen_matkul']; ?></td>
                <td>
                    <a href="/matakuliah/editmatakuliah/<?= base64_encode($row['kode_matkul']); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="/matakuliah/deletematkul/<?= base64_encode($row['kode_matkul']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda Yakin ?')"><i class="fa fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection(); ?>