<?= $this->extend('template/main'); ?>

<?= $this->section('content-title') ?>
Dashboard
<?= $this->endSection(); ?>


<?= $this->section('card-header'); ?>
Dashboard
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $mahasiswa; ?></h3>

                <p>Mahasiswa</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <a href="/mahasiswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= $matakuliah; ?></h3>

                <p>Matakuliah</p>
            </div>
            <div class="icon">
                <i class="fas fa-book-open"></i>
            </div>
            <a href="/matakuliah" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= $nilai; ?></h3>

                <p>Nilai Diinput</p>
            </div>
            <div class="icon">
                <i class="fas fa-chart-bar"></i>
            </div>
            <a href="/nilai" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= $matakuliah; ?></h3>

                <p>Dosen</p>
            </div>
            <div class="icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <a href="/matakuliah" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>

<?= $this->endSection(); ?>