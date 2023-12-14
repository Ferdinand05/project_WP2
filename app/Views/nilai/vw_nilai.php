<?= $this->extend('template/main'); ?>

<?= $this->section('content-title') ?>
Nilai
<?= $this->endSection(); ?>


<?= $this->section('card-header'); ?>
<a href="/nilai/formNilai" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-xs"></i> Tambah</a>
<div class="input-group">
    <small>Input nilai mahasiswa</small>
</div>

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
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Matakuliah</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Rata - Rata</th>
            <th style="width: 14%;">Aksi</th>
        </tr>

    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($nilai as $row) :
        ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nama_matkul']; ?></td>
                <td><?= $row['nilai_tugas']; ?></td>
                <td><?= $row['nilai_uts']; ?></td>
                <td><?= $row['nilai_uas']; ?></td>
                <td><?= $row['rata_rata']; ?></td>
                <td>
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection(); ?>