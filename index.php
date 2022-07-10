<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Familymart</title>

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
            <img src="https://www.family.co.jp/content/dam/img/english/logo/logo_fm.png" class="img-fluid">
        </a>
        </nav>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://www.family.co.jp/content/dam/family/english/home/img/home_p01_02.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://www.family.co.jp/content/dam/family/english/home/img/home_p01_01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://www.family.co.jp/content/dam/family/english/home/img/home_p01_04.jpg" class="d-block w-100" alt="...">
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
        <p style="font-size: 20px;">FamilyMart, pertama kali berdiri tahun 1970, sebagai toko yang dibangun di area tersendiri dan dirancang sebagai toko percontohan modern dengan konsep dan format retail baru, yaitu Convenience Store. Pemilihan dan penggunaan nama "FamilyMart" sebagai bentuk perwujudan ide "Hubungan Kekeluargaan" dan "Maju & Berkembang Bersama". FamilyMart CVS franchise/ waralaba diresmikan di Jepang tahun 1973. Saat ini, FamilyMart merupakan kepemilikan dari FamilyMart Company Limited (http://www.family.co.jp/english). Merupakan brand CVS No.2 di Dunia, dengan jumlah toko lebih dari 17.000, yang tersebar di beberapa negara, yaitu: Jepang, China, Taiwan, Thailand, Philipine, Vietnam, Indonesia & USA.</p>

        <h2 class="text-center mt-5">Grafik Penjualan</h2>
        <div id="sales"></div>

        <hr>
        &copy; FamilyMart <?php echo date('Y'); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>