<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
 
</head>
<body>

    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>



    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4><a href="contact.html">Contact</a></h4>
                    <p>Nomer Telfon : +628319231209</p>
                    <p>Alamat Email :  TravelP@blablabla.com</p>
                    <p>Alamat :</p>
                    <a href="https://goo.gl/maps/w8a1x5s8n1Ykr8bf8">Jl. Raya Puputan No.86, Dangin Puri Klod, Kec. Denpasar Tim., Kota Denpasar, Bali 80234</a>
                </div>
                <div class="col-md-6">
                    <h4><a href="aboutUs.html">About Us</a></h4>
                    <p>kami adlah agensi travel lintas dimensi dijamin puas dan senang dan jangan lupa memberi bintang 5 yaa terimakasih </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>