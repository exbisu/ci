<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Jenis-Jenis Paket</h1>
            </div>
        </div>
    </div>
    <div class="pilih">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="img/premiumplus.png" alt="paket premiumplus" width="200px" height="200PX">
                <h2>Paket PremiumPlus</h2>
                <p>- Tiket Pesawat Kelas Bisnis</p>
                <p>- Paket Perjalanan</p>
                <p>- Hotel Bintang 5</p>
                <p>- Makan 3X Sehari Selama Perjalanan Di Restoran Bintang 5</p>
                <button>Beli</button>
            </div>
            <div class="col-md-4">
                <img src="img/premium.png" alt="paket premium" width="200px" height="200px">
                <h2>premium</h2>
                <p>- Tiket Pesawat Kelas Ekonomi</p>
                <p>- Paket Perjalanan</p>
                <p>- Hotel Bintang 4</p>
                <p>- Makan 3X Sehari Selama Perjalanan Di Restoran Bintang 4</p>
                <button>Beli</button>
            </div>
            <div class="col-md-4">
                <img src="img/biasa.png" alt="paket biasa" width="200px" height="200px">
                <h2>Biasa</h2>
                <p>- Perjalanan Memakai Bus</p>
                <p>- Paket Perjalanan</p>
                <p>- Hotel Bintang 3</p>
                <p>- Makan 3X Sehari Selama Perjalanan Di Restoran Bintang 3</p>
                <button>Beli</button>
            </div> 
        </div>
    </div>
    </div>
<?= $this->endSection();?>