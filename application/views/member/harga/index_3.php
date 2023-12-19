<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Cards</title>
    <style>
        .card-container {
            display: flex;
            margin-bottom: 20px; /* Margin antara card pertama dan card lainnya */
        }

        .card {
            width: 18rem;
            margin-right: 20px; /* Margin antara card 1 dan card 2 */
        }

        .card:last-child {
            margin-right: 0; /* Menghapus margin kanan pada card terakhir */
        }
    </style>
</head>

<body>

    <div class="card-container">
    <div class="card" style="width: 18rem; height: 350px;">
            <!-- konten ke 2 -->
            <img src="<?= base_url("assets/") ?>img/ml.jpg" alt="Produk" aria-roledescription="card" style="height: 170px;">
            <div class="card-body text-center">
                <h5 class="card-title">Top Up Mobile Legends</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

        <div class="card" style="width: 18rem; height: 350px;">
            <!-- konten ke 2 -->
            <img src="<?= base_url("assets/") ?>img/ml.jpg" alt="Produk" aria-roledescription="card" style="height: 170px;">
            <div class="card-body text-center">
                <h5 class="card-title">Top Up Mobile Legends</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

        <div class="card" style="width: 18rem; height: 350px;">
            <!-- konten ke 3 -->
            <img src="<?= base_url("assets/") ?>img/valo.jpg" alt="Produk" aria-roledescription="card" style="height: 170px;">
            <div class="card-body text-center">
                <h5 class="card-title">Top Up Valorant Point</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
        <div class="card" style="width: 18rem; height: 350px;">
            <!-- konten ke 4 -->
            <img src="<?= base_url("assets/") ?>img/by.png" alt="Produk" aria-roledescription="card" style="height: 170px;">
            <div class="card-body text-center">
                <h5 class="card-title">Top Up Point Blank Cash</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>

</body>

</html>
