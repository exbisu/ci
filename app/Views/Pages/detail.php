<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-5">
            <img src="/assets/img/<?= $info['foto'] ?>" alt="asd">
        </div>
        <div class="col-md-7">
            <p>nama : <?= $info['name'] ?></p>
            <p>umur : <?=$info['age']?></p>
            <p>pekerjaan : <?=$info['biodata']?> </p>
            <p>jenis kelamin : <?=$info['gender']?></p>
            <a href="#" class="btn btn-warning">update</a>
            <a href="/table" class="btn btn-danger">kembali</a>
        </div>
    </div>
</div>

<?= $this->endSection();?>