<style>
    /* .social-buttons {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .social-buttons .btn {
        flex: 1;
        margin-right: 5px;
        margin-left: 5px;
        height: 50px;
    } */

    /* .btn-md {
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: 0.3rem;
        margin-top: 3px;
        margin-left: 5px;
        margin-right: 5px;
    } */

    .instagram {
        background-color: #f09433;
        box-shadow: 0px 0px 15px #f09433;
    }

    .facebook {
        background-color: #3b5998;
        box-shadow: 0px 0px 15px #3b5998;
    }

    .twitter {
        background-color: #55acee;
        box-shadow: 0px 0px 15px #55acee;
    }

    .youtube {
        background-color: #ff0000;
        box-shadow: 0px 0px 15px #ff0000;
    }

    .tiktok {
        background-color: #000000;
        color: white;
        box-shadow: 0px 0px 15px #000000;
    }

    .telegram {
        background-color: #0088cc;
        color: #fff;
        box-shadow: 0px 0px 15px #0088cc;
    }

    .twitch {
        background-color: #6441a5;
        color: #fff;
        box-shadow: 0px 0px 15px #6441a5;
    }

    .discord {
        background-color: #7289da;
        color: #fff;
        box-shadow: 0px 0px 15px #7289da;
    }

    .spotify {
        background-color: #1db954;
        color: #fff;
        box-shadow: 0px 0px 15px #1db954;
    }

    .web-traffic {
        background: gold !important;
        box-shadow: 0px 0px 15px gold;
    }
</style>
<div class="alert alert-success" role="alert">
    <strong>Kategori Favorit !</strong> Silahkan Pilih Salah Satu Kategori Layanan Sosial Media Dibawah Ini Untuk Memudahkan Kamu Memilih Produk Yang Akan Kamu Pesan. <br>
    <div class="mt-3">
        <button class="btn btn-outline-primary btn-md instagram text-light" onclick="load_kategori_fav('<?= $this->GZL->enkrip('instagram') ?>')">
            <i class="fab fa-instagram"></i>
            <span class="button-label">Instagram</span>
        </button>
        <button class="btn btn-outline-primary btn-md facebook text-light" onclick="load_kategori_fav('<?= $this->GZL->enkrip('facebook') ?>')">
            <i class="fab fa-facebook"></i>
            <span class="button-label">Facebook</span>
        </button> <button class="btn btn-outline-primary btn-md twitter text-light" onclick="load_kategori_fav('<?= $this->GZL->enkrip('twitter') ?>')">
            <i class="fab fa-twitter"></i>
            <span class="button-label">Twitter</span>
        </button> <button class="btn btn-outline-primary btn-md youtube text-light" onclick="load_kategori_fav('<?= $this->GZL->enkrip('youtube') ?>')">
            <i class="fab fa-youtube"></i>
            <span class="button-label">Youtube</span>
        </button> <button class="btn btn-outline-primary btn-md tiktok" onclick="load_kategori_fav('<?= $this->GZL->enkrip('tiktok') ?>')">
            <i class="fab fa-tiktok"></i>
            <span class="button-label">Tiktok</span>
        </button> <button class="btn btn-outline-primary btn-md telegram" onclick="load_kategori_fav('<?= $this->GZL->enkrip('Telegram') ?>')">
            <i class="fab fa-telegram"></i>
            <span class="button-label">Telegram</span>
        </button> <button class="btn btn-outline-primary btn-md twitch" onclick="load_kategori_fav('<?= $this->GZL->enkrip('Twitch') ?>')">
            <i class=" fab fa-twitch"></i>
            <span class="button-label">Twitch</span>
        </button> <button class="btn btn-outline-primary btn-md discord" onclick="load_kategori_fav('<?= $this->GZL->enkrip('Discord') ?>')">
            <i class=" fab fa-discord"></i>
            <span class="button-label">Discord</span>
        </button> <button class="btn btn-outline-primary btn-md spotify" onclick="load_kategori_fav('<?= $this->GZL->enkrip('Spotify') ?>')">
            <i class="fab fa-spotify"></i>
            <span class="button-label">Spotify</span>
        </button> <button class="btn btn-outline-primary btn-md web-traffic text-light" onclick="load_kategori_fav('<?= $this->GZL->enkrip('Promo') ?>')">
            <i class="fas fa-dollar-sign"></i>
            <span class="button-label">Promo</span>
        </button>
    </div>
</div>

<div id="panel-1" class="panel">
    <div class="panel-hdr">
        <h2>
            Daftar <span class="fw-300"><i>Harga</i></span>
        </h2>
        <div class="panel-toolbar">
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
        </div>
    </div>
    <div class="show mt-3 text-truncate">


        <div class="load_kategori text-center mb-3" id="load_kategori" style="display:none;">
            <div class="spinner-border text-success" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="kategori_show mb-3"></div>
    </div>
</div>