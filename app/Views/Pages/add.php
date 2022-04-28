<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="my-3">form add</h2>

<form>
  <div class="row mb-3">
    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="Text" class="form-control" id="Nama" name="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="age" class="col-sm-2 col-form-label">Umur</label>
    <div class="col-sm-10">
      <input type="Text" class="form-control" id="age" name="age">
    </div>
  </div>
    <div class="row mb-3">
    <label for="biodata" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <input type="Text" class="form-control" id="biodata" name="biodata">
    </div>
  </div>
    <div class="row mb-3">
    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="gender" name="gender">
    </div>
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>

<?= $this->Endsection();?>