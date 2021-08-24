<?php
include('layouts/header.php');
include('layouts/navbar.php');
?>


<!-- Main Content -->
<div class="container mt-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/a.jpg.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/a.jpg.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/a.jpg.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container mt-5">
    <h2><b>Kategori Produk</b></h2>
    <div class="row">
        <div class="col-md-4 mb-3">

        </div>
    </div>
</div>


<div class="container mt-5">
    <h2><b>Promo</b></h2>
    <div class="row mx-3">
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="./assets/img/img-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="promo">Rp. 50.000</span>
                    <p><b>Rp. 35.000</b></p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="./assets/img/img-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="promo">Rp. 50.000</span>
                    <p><b>Rp. 35.000</b></p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="./assets/img/img-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="promo">Rp. 50.000</span>
                    <p><b>Rp. 35.000</b></p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('layouts/footer.php');
?>