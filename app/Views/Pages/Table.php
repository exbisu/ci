<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">foto</th>
      <th scope="col">nama</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    foreach($table as $isi){
    ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="/assets/img/<?= $isi['foto'] ?>" alt="<?=$isi['name'] ?>" class="imgTa"></td>
      <td><?=$isi['name'] ?></td>
      <td><a href="<?= base_url('Table'); ?>\<?=$isi['slug']; ?>" class="btn btn-success">detail</a></td>
    </tr>
    
    <?php $i++; } ?>
  </tbody>

</table>
    <a href="/add" class="btn btn-primary">Add Data</a>


<?= $this->endSection('');?>