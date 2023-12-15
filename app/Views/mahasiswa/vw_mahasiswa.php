<?= $this->extend('template/main'); ?>

<?= $this->section('content-title') ?>
Mahasiswa
<?= $this->endSection(); ?>


<?= $this->section('card-header'); ?>
<div class="input-group">
    <a href="/mahasiswa/formMahasiswa" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-xs"></i> Tambah</a>
</div>
<small>Tombol Untuk menambah Mahasiswa</small>
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
<table class="table table-striped table-hover table-bordered">
    <thead>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($mahasiswa as $row) :
        ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['alamat']  ?></td>
                <td><?= $row['telepon']; ?></td>
                <td>
                    <a href="/mahasiswa/editMahasiswa/<?= base64_encode($row['nim']); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="/mahasiswa/dropMahasiswa/<?= base64_encode($row['nim']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda Yakin ?')"><i class="fa fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $this->endSection(); ?>