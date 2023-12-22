<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Cards</title>
    <style>
 .card-container {
    display: flex;
    flex-wrap: wrap; /* Mengizinkan flex items untuk melompat ke baris berikutnya */
    margin-bottom: 20px;
}

.card {
    width: calc(25% - 20px); /* Mengatur width untuk menampilkan 4 card dalam satu baris */
    margin-right: 10px;
    margin-bottom: 50px;
}

.card:last-child {
    margin-right: 0;
}

        .styled-button {
            background-color: #800080; /* Warna ungu */
            color: white; /* Warna teks */
            padding: 10px 10px; /* Padding untuk memberikan ruang di sekitar teks */
            font-size: 11px; /* Ukuran teks */
            border: none; /* Menghapus garis batas */
            border-radius: 20px; /* Sudut melengkung */
            cursor: pointer; /* Mengubah kursor saat diarahkan ke tombol */

        }

        /* Hover effect */
        .styled-button:hover {
            background-color: #6a006a; /* Warna latar belakang saat tombol dihover */
        }
    </style>
</head>

<body>

    <div class="card-container">
    <div class="card" style="width: 18rem; height: 350px;">
    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url("storage/") ?>uploads_images_product/ml.jpg" class="d-block w-100" alt="Slide 1" style="height: 170px;">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("storage/") ?>uploads_images_product/by.png" class="d-block w-100" alt="Slide 2" style="height: 170px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
            <div class="card-body text-center">
                <h5 class="card-title">Top Up Mobile Legends</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button id="modalDetail1" class="styled-button" onclick="DetailProduk()" >Rincian Produk</button>
    <button id="modalBeli1" class="styled-button">Beli Sekarang</button>
            </div>
        </div>

        <div class="card" style="width: 18rem; height: 350px;">
    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url("storage/") ?>uploads_images_product/ml.jpg" class="d-block w-100" alt="Slide 1" style="height: 170px;">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("storage/") ?>uploads_images_product/valo.jpg" class="d-block w-100" alt="Slide 2" style="height: 170px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
            <div class="card-body text-center">
                <h5 class="card-title">Top Up Mobile Legends</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of thecard's content.</p>
                <button id="modalDetail2" class="styled-button" onclick="DetailProduk()" >Rincian Produk</button>
    <button id="modalBeli2" class="styled-button">Beli Sekarang</button>
  </div>
        </div>
        <div class="card" style="width: 18rem; height: 350px;">
        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url("storage/") ?>uploads_images_product/valo.jpg" class="d-block w-100" alt="Slide 1" style="height: 170px;">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("storage/") ?>uploads_images_product/ml.jpg" class="d-block w-100" alt="Slide 2" style="height: 170px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
            <div class="card-body text-center">
                <h5 class="card-title">Top Up Valorant Point</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button id="modalDetail3" class="styled-button" onclick="DetailProduk()" >Rincian Produk</button>
    <button id="modalBeli3" class="styled-button">Beli Sekarang</button>
            </div>
        </div>
        <div class="card" style="width: 18rem; height: 350px;">
    <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url("storage/") ?>uploads_images_product/by.png" class="d-block w-100" alt="Slide 1" style="height: 170px;">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("storage/") ?>uploads_images_product/ml.jpg" class="d-block w-100" alt="Slide 2" style="height: 170px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="card-body text-center">
        <h5 class="card-title">Top Up Point Blank Cash</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button id="modalDetail4" class="styled-button" onclick="DetailProduk()" >Rincian Produk</button>
    <button id="modalBeli4" class="styled-button">Beli Sekarang</button>
    </div>
        </div>
        <div class="card" style="width: 18rem; height: 350px;">
    <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url("storage/") ?>uploads_images_product/ml.jpg" class="d-block w-100" alt="Slide 1" style="height: 170px;">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("storage/") ?>uploads_images_product/valo.jpg" class="d-block w-100" alt="Slide 2" style="height: 170px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators5" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
            <div class="card-body text-center">
                <h5 class="card-title">Top Up Mobile Legends</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of thecard's content.</p>
                <button id="modalDetail5" class="styled-button" onclick="DetailProduk()" >Rincian Produk</button>
    <button id="modalBeli5" class="styled-button">Beli Sekarang</button>
  </div>
        </div>
        <div class="card" style="width: 18rem; height: 350px;">
    <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url("storage/") ?>uploads_images_product/ml.jpg" class="d-block w-100" alt="Slide 1" style="height: 170px;">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("storage/") ?>uploads_images_product/valo.jpg" class="d-block w-100" alt="Slide 2" style="height: 170px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators6" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators6" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
            <div class="card-body text-center">
                <h5 class="card-title">Top Up Mobile Legends</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of thecard's content.</p>
                <button id="modalDetail6" class="styled-button" onclick="DetailProduk()" >Rincian Produk</button>
    <button id="modalBeli6" class="styled-button">Beli Sekarang</button>
  </div>
        </div>
        <div class="card" style="width: 18rem; height: 350px;">
        <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url("storage/") ?>uploads_images_product/valo.jpg" class="d-block w-100" alt="Slide 1" style="height: 170px;">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("storage/") ?>uploads_images_product/ml.jpg" class="d-block w-100" alt="Slide 2" style="height: 170px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators7" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators7" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
            <div class="card-body text-center">
                <h5 class="card-title">Top Up Valorant Point</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button id="modalDetail7" class="styled-button" onclick="DetailProduk()" >Rincian Produk</button>
    <button id="modalBeli7" class="styled-button">Beli Sekarang</button>
            </div>
        </div>
        <div class="card" style="width: 18rem; height: 350px;">
    <div id="carouselExampleIndicators8" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url("storage/") ?>uploads_images_product/by.png" class="d-block w-100" alt="Slide 1" style="height: 170px;">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("storage/") ?>uploads_images_product/ml.jpg" class="d-block w-100" alt="Slide 2" style="height: 170px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators8" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators8" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="card-body text-center">
        <h5 class="card-title">Top Up Point Blank Cash</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button id="modalDetail8" class="styled-button" onclick="DetailProduk()" >Rincian Produk</button>
    <button id="modalBeli8" class="styled-button">Beli Sekarang</button>
    </div>
</div>
    </div>
    <script>
        function DetailProduk() {
            // Ganti URL berikut dengan URL halaman tujuan Anda
            window.location.href = 'detail-produk';
        }
    </script>
</body>
</html>
