<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Description" content="FamilyMart" />
    <!-- Mendeklarasikan warna yang muncul pada address bar Chrome versi seluler -->
    <meta name="theme-color" content="#414f57" />
    <!-- Mendeklarasikan ikon untuk iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="FamilyMart" />
    <link rel="shortcut icon" href="/assets/images/logo-192.png" type="image/png">
    <link rel="apple-touch-icon" href="/assets/images/logo-192.png" type="image/png">
    <!-- Mendeklarasikan ikon untuk Windows -->
    <meta name="msapplication-TileImage" content="/assets/images/logo-192.png" />
    <meta name="msapplication-TileColor" content="#000000" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="manifest" href="assets/js/manifest.json" />

    <title>Familymart</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">

    <!-- Resources -->
    <script src="//www.amcharts.com/lib/4/core.js"></script>
    <script src="//www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script>
		$(document).ready(function(){
            $("#sales").load('grafik.php');
			setInterval(function(){
				$("#sales").load('grafik.php')
		    }, 5000);
		});
		</script>
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-light bg-white">
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo_fm.png" class="img-fluid">
        </a>
        </nav>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="assets/images/home_p01_02.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="assets/images/home_p01_01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="assets/images/home_p01_04.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>

        <h2 class="text-center mt-5">Tentang Kami</h2>
        <div class="row mt-5">
          <div class="col-12 col-lg-6">
            <img src="assets/images/fmjapan.jpg" class="img-fluid mb-3">
          </div>
          <div class="col-12 col-lg-6">        
            <p style="font-size: 20px;">FamilyMart, pertama kali berdiri tahun 1970, sebagai toko yang dibangun di area tersendiri dan dirancang sebagai toko percontohan modern dengan konsep dan format retail baru, yaitu Convenience Store. Pemilihan dan penggunaan nama "FamilyMart" sebagai bentuk perwujudan ide "Hubungan Kekeluargaan" dan "Maju & Berkembang Bersama".</p>
            <p style="font-size: 20px;" class="mt-3">FamilyMart CVS franchise/ waralaba diresmikan di Jepang tahun 1973. Saat ini, FamilyMart merupakan kepemilikan dari FamilyMart Company Limited (http://www.family.co.jp/english). Merupakan brand CVS No.2 di Dunia, dengan jumlah toko lebih dari 17.000, yang tersebar di beberapa negara, yaitu: Jepang, China, Taiwan, Thailand, Philipine, Vietnam, Indonesia & USA.</p>
          </div>
        </div>

        <h2 class="text-center mt-5">Grafik Penjualan</h2>
        <div id="sales"></div>

        <hr>
        &copy; FamilyMart 2022
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script>
            var BASE_URL = '/';
            document.addEventListener('DOMContentLoaded', init, false);

            function init() {
                if ('serviceWorker' in navigator && navigator.onLine) {
                    navigator.serviceWorker.register( BASE_URL + 'service-worker.js')
                    .then((reg) => {
                        console.log('Registrasi service worker Berhasil', reg);
                    }, (err) => {
                        console.error('Registrasi service worker Gagal', err);
                    });
                }
            }
</script>
  </body>
</html>