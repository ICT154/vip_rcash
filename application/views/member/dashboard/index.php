<div class="row text-truncate">
    <div class="col-sm-4 col-xl-3">
        <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    Rp. <?= number_format($user['saldo'], 0, ",", ".") ?>
                    <small class="m-0 l-h-n">Saldo SMM</small>
                </h3>
            </div>
            <i class="fas fa-money-bill-alt position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
        </div>
    </div>
    <div class="col-sm-4 col-xl-3">
        <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    Rp. <?= number_format($user['saldo_ppob'], 0, ",", ".") ?>
                    <small class="m-0 l-h-n">Saldo PPOB</small>
                </h3>
            </div>
            <i class="fas fa-money-bill-alt position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
        </div>
    </div>
    <div class="col-sm-4 col-xl-3">
        <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">

                    Rp. <?= $this->gzl->number_format($tot_pesan_smm['price'], 0, ",", ".") ?>
                    <small class="m-0 l-h-n">Total Pemesanan</small>
                </h3>
            </div>
            <i class="fas fa-shopping-cart position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
        </div>
    </div>
    <div class="col-sm-4 col-xl-3">
        <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    Rp. <?= $this->gzl->number_format($tot_depo['jumlah_didapat'], 0, ",", ".") ?>
                    <small class="m-0 l-h-n">Total Deposit</small>
                </h3>
            </div>
            <i class="fal fa-dollar-sign position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
        </div>
    </div>
    <div class="col-sm-4 col-xl-3">
        <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    <?= $tot_trx_success['total'] ?>
                    <small class="m-0 l-h-n">Total Pemesanan Sukses</small>
                </h3>
            </div>
            <i class="fas fa-thumbs-up position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
        </div>
    </div>

    <div class="col-sm-4 col-xl-3">
        <div class="p-3 bg-danger-200 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    <?= $tot_trx_error['total'] ?>
                    <small class="m-0 l-h-n">Total Pemesanan Gagal</small>
                </h3>
            </div>
            <i class="fas fa-thumbs-down position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
        </div>
    </div>
    <div class="col-sm-4 col-xl-3">
        <div class="p-3 bg-warning-200 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    <?= $tot_trx_pending['total'] ?>
                    <small class="m-0 l-h-n">Total Pemesanan Pending</small>
                </h3>
            </div>
            <i class="fas fa-hourglass-start position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mt-3">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Detail <span class="fw-300"><i> Level</i></span>
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>


            </div>
            <div class="panel-container show">
                <div class="panel-content table-responsive">
                    <div class="row">
                        <div class="col-12 d-grid mb-3">
                            <a href="javascript:;" class="btn btn-primary benefit_account" data-bs-toggle="modal" data-bs-target="#benefit_account">Lihat Benefit</a>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div class="col-6 mb-2 mb-sm-0">
                            <p class="mb-0">Current Level</p>
                        </div>
                        <div class="col-6 mb-2 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 me-3">
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0 text-primary fw-bolder">BRONZE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div class="col-6 mb-2 mb-sm-0">
                            <p class="mb-0">Total Transaksi</p>
                        </div>
                        <div class="col-6 mb-2 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 me-3">
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0 fw-bolder">20 Transaksi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center mb-2">
                        <div class="col-6 mb-2 mb-sm-0">
                            <p class="mb-0">Next Level</p>
                        </div>
                        <div class="col-6 mb-2 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 me-3">
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0 text-primary fw-bolder">SILVER</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div class="col-6 mb-2 mb-sm-0">
                            <p class="mb-0"> Total Transaksi </p>
                        </div>
                        <div class="col-6 mb-2 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 me-3">
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0 fw-bolder">30</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div class="col-6 mb-2 mb-sm-0">
                            <p class="mb-0">Progress (Transaksi)</p>
                        </div>
                        <div class="col-6 mb-2 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 me-3">
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0 fw-bolder">20</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-0">
                        <div class="col-6 mb-2 mb-sm-0">
                            <p class="mb-0">Progress (%)</p>
                        </div>
                        <div class="col-6 mb-2 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 me-3">
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 66.66%"></div>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0 fw-bolder">66%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 mt-3">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Informasi <span class="fw-300"><i> Terbaru</i></span>
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>


            </div>
            <div class="panel-container show">
                <div class="panel-content table-responsive" style="max-height: 430px; overflow: auto;">
                    <ul class="list-group list-group-flush border-top-0">
                        <li class="list-group-item pt-0 px-0">
                            <div class="d-flex align-items-start ">
                                <div class="flex-grow-1 me-2">
                                    <span class="mb-0"><span class="fs-5 badge text-white fw-bold bg-primary rounded-pill"><i class="fas fa-info-circle me-2"></i>&nbsp;INFORMASI</span><small class="fw-normal float-end ml-1">09 Jun 2023 - 18:37</small></span>
                                    <p class="my-1" style="margin-top: 0.6rem !important">Silahkan <strong>hubungi</strong> kontak dibawah ini jika kakak <strong>butuh bantuan</strong> yah:<br>
                                        <br>
                                        <strong>Whatsapp - Admin</strong>: <a href="https://wa.me/message/LI3EDEAIIPLDI1">Klik Disini ( Whatsapp )</a><br>
                                        <strong>Whatsapp - Grup Info Layanan</strong>: <a href="https://chat.whatsapp.com/ISFeH30ZtNl9FdJwuyQ04B">Klik Disini ( Grup Whatsapp Info Layanan )</a><br>
                                        <strong>Telegram</strong>: <a href="https://t.me/101">Klik Disini ( @101 )</a><br>
                                        <strong>Instagram</strong>: <a href="https://instagram.com/101">Klik Disini ( @101 )</a><br>
                                        <strong>Tiket</strong>: <a href="https://raja-sosmed.com/ticket/new">Klik Disini</a>
                                    </p>
                                    <small>Pembaruan terakhir: 25 Jun 2023 - 13:05</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item pt-3 px-0">
                            <div class="d-flex align-items-start mt-1">
                                <div class="flex-grow-1 me-2">
                                    <span class="mb-0"><span class="fs-5 badge text-white fw-bold bg-success rounded-pill"><i class="fas fa-tags me-2"></i>LAYANAN</span><small class="fw-normal float-end">07 Jun 2023 - 03:51</small></span>
                                    <p class="my-1" style="margin-top: 0.6rem !important"><strong>Rekomendasi Layanan:</strong><br>
                                        <br>
                                        <strong>Telegram</strong><br>
                                        - [215] Telegram - Channnel Members/Group Server 11 [30K] [ AUTO Refill 30 days ] Non Drop <br>
                                        <br>
                                        <strong>Instagram Viewers</strong><br>
                                        - [1350] Instagram Views Server 3 | Bisa Untuk ~ Video Post, Reel ~ Fast<br>
                                        - [1372] Instagram Views Server 2 | Bisa Untuk ~ Post, Reel ~ Working<br>
                                        <br>
                                        <strong>Instagram Followers</strong><br>
                                        - [194] Instagram Followers | NON DROP | Recommended | Best Seller |⚡🔥⭐<br>
                                        - [1362] Instagram Followers 𝐕𝐈𝐏 | Lifetime 𝐑𝐄𝐅𝐈𝐋𝐋 | Termurah | Bestt Seller |🔥⭐<br>
                                        - [1386] Instagram Followers | Terbaru R90 | NON DROP | Real Pengguna |⭐🔥🔥<br>
                                        - [1402] Instagram Followers Refill Server 41 [Max 1M] [30 Days Refill] [Real]<br>
                                        <br>
                                        <strong>Instagram Followers - Indonesia</strong><br>
                                        - [218 ]🇮🇩Instagram Followers | Indonesia [Real Aktif] [Refill 7 Hari]<br>
                                        - [1369] 🇮🇩Instagram Followers Indonesia | Qualitas Bagus | Isi Ulang 8 Hari |🔥⭐<br>
                                        <br>
                                        <strong>Instagram Like - Indonesia</strong><br>
                                        - [1188] 🇮🇩Instagram Likes Indonesia | Bisa untuk ~ Video / TV / Reel Indonesia | Real | Impresion + Reach + Profile Visit | Instant | Refill 3 Hari⭐🔥<br>
                                        - [1187] 🇮🇩Instagram Likes Indonesia | Bisa untuk ~ Video / TV / Reel Indonesia | Real | Impresion + Reach + Profile Visit | Instant | Refill 10 Hari⭐🔥<br>
                                        - [1186] 🇮🇩Instagram Likes Indonesia | Bisa untuk ~ Video / TV / Reel Indonesia | Real | Impresion + Reach + Profile Visit | Instant | Refill 8 Hari⭐🔥<br>
                                        <br>
                                        <strong>Instagram Custom Comment </strong><br>
                                        - [263] Instagram Custom Comments [No Drop] 20k/days<br>
                                        <br>
                                        <strong>Tiktok - Followers</strong><br>
                                        -[209] TIKTOK FOLLOWERS Server 3 [ Lifetime guaranted ] [ Non Drop]<br>
                                        -[365] Tiktok Followers VIP 12 [Max 50k] [30 Days Refill] [Real Akun]<br>
                                        -[967] TikTok Followers S15 [ Terbaru ] [ 3K/Day ] [ Refill 30days ] [ Max 300K ]<br>
                                        -[1211] Tiktok Followers VIP 22 [Max 100k] [Real Akun] [Fast]<br>
                                        - [1484] TikTok Followers S28 | Les Drop | Recomended | Speed: 25K Per Hari | Refil 7nHari]⭐🔥♻️<br>
                                        - [1527] Tiktok Followers Server 50 [Max 1M] [Refill 15 Days]<br>
                                        - [1532] TikTok Followers S33 [ refill 30days ] [ best ] [Speed: 10K/Day]<br>
                                        - [1401] TikTok Followers S30 | Max 30K | Mıx - Fast | 3K-4K/days<br>
                                        <br>
                                        <strong>Tiktok - Likes</strong> <br>
                                        - [384] Tiktok Likes VIP 12 [Max 1M] TERMURAH DI Raja Sosmed⭐<br>
                                        - [723] Tiktok Likes VIP 33 [Max 100k] [Refill 30 Days]<br>
                                        - [724] Tiktok Likes VIP 35 [Max 100k]<br>
                                        - [1276] Tiktok Likes LS 4 [ Max 100K ] [ Refill 30 Days ] [Speed 3k/days]<br>
                                        <br>
                                        <strong>Tiktok - Viewers</strong><br>
                                        - [531] 🇮🇩Tiktok Views VIP 2 [Max 100M] [ INDONESIA ]<br>
                                        - [562] Tiktok Views VIP 9 [Max 10M]<br>
                                        <br>
                                        <strong>Youtube - Premium</strong><br>
                                        -[1404 Youtube Premium 4 Bulan Termurah]<br>
                                        <br>
                                        <strong>Youtube - Subscribers</strong><br>
                                        - [449] Youtube Subscribers Server 14 [Max 5k] [Refill 30 Days] [Real Account] [NO DROP] <br>
                                        <br>
                                        <strong>Youtube - Likes</strong><br>
                                        - [47] Youtube Like LS 5 [ Best Price in Market ][ 30 Days refill ]<br>
                                        - [51] Youtube Like LS 6 [ Best Seller ][ AUTO Refill ]♻️<br>
                                        - [59] Youtube Like LS 7 [ No Refill and Cheapest ]<br>
                                        <br>
                                        <br>
                                        <strong>Youtube - Viewers</strong><br>
                                        - [1254] Youtube Views |Suggested| |Best Seler| |Lifetime Guaranteed| |10k-20k/Days|<br>
                                        - [1302] Youtube Views - [ Speed 5k/day ] [ Start Time : 0-5Min ] [ Lifetime Guaranteed ] 1-2% Likes<br>
                                        - [1525] Youtube Views - [ Speed 4K-7k/day ] [ Start Time : 0-5Min ] [ Lifetime Guaranteed ] 1-2% Likes [ After Bonus Price /k ] <br>
                                        - [1526] Youtube Views [ speed 70k-80k/day ] [ Start time : Instant ] [ Lifetime ] [ After Bonus Price /k ]<br>
                                        <br>
                                        <strong>Youtube - Jam Tayang</strong><br>
                                        - [1121] YouTube Jam Tayang [ Terbaru ] [ 60 Minutes Video ] [ Speed 500/Hari ] [ 30 Days Guaranteed ] [ Non Drop ]<br>
                                        - [1120] YouTube Jam Tayang [ Terbaru ] [ 45 Minutes Video ] [ Speed 500/Hari ] [ 30 Days Guaranteed ] [ Non Drop ]<br>
                                        - [1119] YouTube Jam Tayang [ Terbaru ] [ 30 Minutes Video ] [ Speed 500/ Hari ] [ 30 Days Guaranteed ] [ Non Drop ]<br>
                                        - [1118] YouTube Jam Tayang [ Terbaru ] [ 15 Minutes Video ] [ Speed 500/ Hari ] [ 30 Days Guaranteed ] [ Non Drop ]<br>
                                        <br>
                                        <strong>Facebook - Story Viewers</strong><br>
                                        - [1127] Facebook Story Views Server 6 [Max 50k]<br>
                                        - [1126] Facebook Story Views Server 5 [Max 1M]<br>
                                        - [1125] Facebook Story Views Server 4 [Max 1,5k]<br>
                                        - [1124] Facebook Story Views Server 3 [Max 4k]<br>
                                        - [1123] Facebook Story Views Server 2 [Max 1k]<br>
                                        - [1122] Facebook Story Views Server 1 [Max 5k]<br>
                                        <br>
                                        <strong>Twitter - Followers</strong><br>
                                        - [273] Twitter Followers Server 22 [ Refill 30D ] [Non Drop] 20k/days <br>
                                        - [1036] Twitter Followers Server 28 | Refill 30 Hari | Less Drop <br>
                                        - [1040] Twitter Followers Server 29 [ Refill 30days ] [ Max 500K ] [ 50K/Day ] <br>
                                        - [1076] Twitter Followers Server 31 [ No refill ] [ 0-15 Mİn ] <br>
                                        <br>
                                        <strong>Shopee - Followers</strong><br>
                                        - [1205] 🇮🇩Shopee Followers Indonesia | Real NON DROP | LifeTime Guaranteed🔥🔥 <br>
                                        - [1207] 🇮🇩Shopee Followers Indonesia | NON DROP | Instant🔥🔥 <br>
                                        <br>
                                        <strong>Shopee - Likes</strong><br>
                                        - [1206] 🇮🇩Shopee Likes | Produk Indonesia | NON DROP🔥🔥 <br>
                                        <br>
                                        <strong>Akun - Spotify</strong><br>
                                        - [1405] - Spotify Individual Plan 3 Bulan -<br>
                                        <br>
                                        <strong>Akun - Disney</strong><br>
                                        - [1406] - Disney + Hotsar Sharing 3u -<br>
                                        - [1407] - Disney + Hotsar Sharing 2u -<br>
                                        <br>
                                        <strong>Akun - Netflix</strong><br>
                                        - [1408] - Netflix 1 Bulan 1p 2u -<br>
                                        - [1409 ] - Netflix ( Private ) 1 Bulan -<br>
                                        <br>
                                        <strong>Akun - Canva</strong><br>
                                        - [1410] - Canva Premium ( Lifetime ) -<br>
                                        - [1411] - Canva Premium ( Admin ) -<br>
                                        - [1412] - Canva Premium ( Full Akses ) -<br>
                                        <br>
                                        <strong>Akun - Reso</strong><br>
                                        - [1413] - Reso Premium ( Family Plan ) -<br>
                                        - [1414] - Reso Premium ( Individual Plan ) -<br>
                                        - [1415] - Reso ( Family Head ) -
                                    </p>
                                    <small>Pembaruan terakhir: 23 Jul 2023 - 21:04</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item pt-3 px-0">
                            <div class="d-flex align-items-start mt-1">
                                <div class="flex-grow-1 me-2">
                                    <span class="mb-0"><span class="fs-5 badge text-white fw-bold bg-primary rounded-pill"><i class="fas fa-info-circle me-2"></i>INFORMASI</span><small class="fw-normal float-end">07 Jun 2023 - 03:44</small></span>
                                    <p class="my-1" style="margin-top: 0.6rem !important"><strong>Beberapa istilah / simbol beserta pengertiannya yang mungkin akan kakak temui di beberapa nama layanan:</strong><br>
                                        <br>
                                        <strong>VIP</strong> : Server Khusus <br>
                                        <strong>Recommended</strong> : Rekomendasi<br>
                                        <strong>No Refill</strong> : Tidak ada isi ulang<br>
                                        <strong>Refill</strong> : Bisa isi ulang<br>
                                        <strong>R30</strong> : Bisa isi refill 30 hari<br>
                                        <strong>Refill button</strong> : Bisa refill sendiri<br>
                                        <strong>No Drop</strong> : Tidak ada penurunan<br>
                                        <strong>Less Drop</strong> : Sedikit penurunan<br>
                                        <strong>Low Drop</strong> : Penurunan rendah<br>
                                        <strong>Guaranteed</strong> : Bergaransi<br>
                                        <strong>G30</strong> : Garansi 30 hari<br>
                                        <strong>Fast</strong> : Proses cepat<br>
                                        <strong>Instant</strong> : Proses instant<br>
                                        <strong>Start Time</strong> : Estimasi waktu proses dimulai<br>
                                        <strong>Real</strong> : Profile menyerupai pengguna nyata<br>
                                        <br>
                                        ⭐️Best Seller<br>
                                        ⚡️Instant<br>
                                        ⚡️⚡️⚡️ Super Instant<br>
                                        🔥 Exclusive Service<br>
                                        ♻️ Refill Button On (bisa refill sendiri)<br>
                                        💧 Drip Feed On (masuk perlahan)<br>
                                        ⛔️&nbsp;Cancel&nbsp;Button (bisa cancel pesanan)
                                    </p>
                                    <small>Pembaruan terakhir: 07 Jun 2023 - 03:44</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <hr class="mt-0">
                    <div class="d-grid">
                        <a href="https://raja-sosmed.com/page/informations" class="btn btn-primary mb-0">Lihat Semua</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>