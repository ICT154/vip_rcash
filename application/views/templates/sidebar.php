<ul id="js-nav-menu" class="nav-menu">

    <li class="nav-title">Dashboard</li>
    <li id="dash" <?php
                    if ($title == 'RCASH | DASHBOARD') {
                        echo "class='active'";
                    } else {
                    } ?>>
        <a href="<?= base_url('dashboard') ?>" title="dashboard" data-filter-tags="dashboard">
            <i class="fas fa-dashboard" aria-hidden="true"></i>
            <span class="nav-link-text" data-i18n="nav.dashboard">Dashboard</span>
        </a>
    </li>


    <li class="nav-title">MENU UTAMA</li>

    <li id="menu_akun" <?php
                        if ($title == 'RCASH | DEPOSIT BARU' or $title == 'RCASH | RIWAYAT DEPOSIT') {
                            echo "class='active open'";
                        } else {
                        } ?>>
        <a href="#" title="deposit" data-filter-tags="deposit">
            <i class="fas fa-wallet"></i>
            <span class="nav-link-text" data-i18n="nav.deposit">Deposit</span>
        </a>
        <ul>
            <li id="sub_menu_profile" <?php
                                        if ($title == 'RCASH | DEPOSIT BARU') {
                                            echo "class='active'";
                                        } else {
                                        } ?>>
                <a href="<?= base_url("deposit-baru") ?>" title="Deposit Baru" data-filter-tags="Deposit Baru">
                    <span class="nav-link-text" data-i18n="nav.Deposit Baru">Deposit Baru</span>
                </a>
            </li>
            <li id="sub_menu_profile" <?php
                                        if ($title == 'RCASH | RIWAYAT DEPOSIT') {
                                            echo "class='active'";
                                        } else {
                                        } ?>>
                <a href="<?= base_url("riwayat-deposit") ?>" title="Riwayat Deposit" data-filter-tags="Riwayat Deposit">
                    <span class="nav-link-text" data-i18n="nav.Riwayat Deposit">Riwayat Deposit</span>
                </a>
            </li>
        </ul>
    </li>

    <li id="menu_akun" <?php
                        if ($title == 'RCASH | DEPOSIT BARU' or $title == 'RCASH | DAFTAR HARGA') {
                            echo "class='active open'";
                        } else {
                        } ?>>
        <a href="#" title="daftar_harga" data-filter-tags="daftar_harga">
            <i class="fas fa-list"></i>
            <span class="nav-link-text" data-i18n="nav.daftar-harga">DAFTAR HARGA</span>
        </a>


    <li id="sub_menu_profile" <?php
                    if ($title == 'RCASH | DAFTAR HARGA') {
                        echo "class='active'";
                    } else {
                    } ?>>
        <a href="<?= base_url('daftar-harga') ?>" title="daftar_harga_smm" data-filter-tags="daftar_harga_smm">
            <i class="fas fa-list" aria-hidden="true"></i>
            <span class="nav-link-text" data-i18n="nav.daftar_harga">Daftar Harga SMM</span>
        </a>
    </li>

    <li id="sub_menu_profile" <?php
                    if ($title == 'RCASH | DAFTAR HARGA PRODUK') {
                        echo "class='active'";
                    } else {
                    } ?>>
                <a href="<?= base_url("daftar-harga-produk") ?>" title="daftar_harga_produk" data-filter-tags="daftar_harga_produk">
                <i class="fas fa-list" aria-hidden="true"></i>
                    <span class="nav-link-text" data-i18n="nav.daftar_harga_produk">Daftar Harga Produk</span>
                </a>
            </li>
        </ul>
    </li>



    <li id="dash" <?php
                    if ($title == 'RCASH | PEMESANAN SOSIAL MEDIA') {
                        echo "class='active'";
                    } else {
                    } ?>>
        <a href="<?= base_url('pemesanan-sosmed') ?>" title="pemesanan_sosmed" data-filter-tags="pemesanan_sosmed">
            <i class="fas fa-hashtag" aria-hidden="true"></i>
            <span class="nav-link-text" data-i18n="nav.pemesanan_sosmed">Pemesanan Sosial Media</span>
        </a>
    </li>
    <!-- <li id="dash" <?php
                        if ($title == 'RCASH | PEMESANAN SOSIAL MEDIA') {
                            echo "class='active'";
                        } else {
                        } ?>>
        <a href="<?= base_url('dash/pemesanan_ppob') ?>" title="pemesanan_ppob" data-filter-tags="pemesanan_ppob">
            <i class="fas fa-money-bill-trend-up" aria-hidden="true"></i>
            <span class="nav-link-text" data-i18n="nav.pemesanan_ppob">Pemesanan PPOB</span>
        </a>
    </li> -->
    <!-- <li id="dash" <?php
                        if ($title == 'RCASH | PEMESANAN SOSIAL MEDIA') {
                            echo "class='active'";
                        } else {
                        } ?>>
        <a href="<?= base_url('dash/pemesanan_otp') ?>" title="pemesanan_otp" data-filter-tags="pemesanan_otp">
            <i class="fas fa-message" aria-hidden="true"></i>
            <span class="nav-link-text" data-i18n="nav.pemesanan_otp">Pemesanan OTP</span>
        </a>
    </li> -->
    <!-- <li id="dash" <?php
                        if ($title == 'RCASH | PEMESANAN SOSIAL MEDIA') {
                            echo "class='active'";
                        } else {
                        } ?>>
        <a href="<?= base_url('dash/pemesanan_lain') ?>" title="pemesanan_lain" data-filter-tags="pemesanan_lain">
            <i class="fas fa-boxes-stacked" aria-hidden="true"></i>
            <span class="nav-link-text" data-i18n="nav.pemesanan_lain">Pemesanan Lain Lain</span>
        </a>
    </li> -->
    <li id="menu_akun" <?php
                        if ($title == 'RCASH | RIWAYAT PEMESANAN SOSIAL MEDIA') {
                            echo "class='active open'";
                        } else {
                        } ?>>
        <a href="#" title="deposit" data-filter-tags="deposit">
            <i class="fas fa-clock-rotate-left"></i>
            <span class="nav-link-text" data-i18n="nav.deposit">Riwayat Pemesanan</span>
        </a>
        <ul>
            <li id="sub_menu_profile" <?php
                                        if ($title == 'RCASH | RIWAYAT PEMESANAN SOSIAL MEDIA') {
                                            echo "class='active'";
                                        } else {
                                        } ?>>
                <a href="<?= base_url("riwayat-pesanan") ?>" title="riwayat_pemesanan_sosial_media" data-filter-tags="riwayat_pemesanan_sosial_media">
                    <span class="nav-link-text" data-i18n="nav.riwayat_pemesanan_sosial_media">Riwayat Pemesanan Sosial Media</span>
                </a>
            </li>
            <!-- <li id="sub_menu_profile" <?php
                                            if ($title == 'RCASH | RIWAYAT PEMESANAN PPOB') {
                                                echo "class='active'";
                                            } else {
                                            } ?>>
                <a href="<?= base_url("deposit-baru") ?>" title="riwayat_pemesanan_ppob" data-filter-tags="riwayat_pemesanan_ppob">
                    <span class="nav-link-text" data-i18n="nav.riwayat_pemesanan_ppob">Riwayat Pemesanan PPOB</span>
                </a>
            </li> -->
            <!-- <li id="sub_menu_profile" <?php
                                            if ($title == 'RCASH | RIWAYAT PEMESANAN OTP') {
                                                echo "class='active'";
                                            } else {
                                            } ?>>
                <a href="<?= base_url("deposit-baru") ?>" title="riwayat_pemesanan_ppob" data-filter-tags="riwayat_pemesanan_ppob">
                    <span class="nav-link-text" data-i18n="nav.riwayat_pemesanan_ppob">Riwayat Pemesanan OTP</span>
                </a>
            </li>
            <li id="sub_menu_profile" <?php
                                        if ($title == 'RCASH | RIWAYAT PEMESANAN LAIN LAIN') {
                                            echo "class='active'";
                                        } else {
                                        } ?>>
                <a href="<?= base_url("deposit-baru") ?>" title="riwayat_pemesanan_ppob" data-filter-tags="riwayat_pemesanan_ppob">
                    <span class="nav-link-text" data-i18n="nav.riwayat_pemesanan_ppob">Riwayat Pemesanan Lain Lain</span>
                </a>
            </li> -->
        </ul>
    </li>
    <li class="nav-title">Pusat Bantuan</li>
    <li id="dash" <?php
                    if ($title == 'RCASH | DAFTAR TIKET') {
                        echo "class='active'";
                    } else {
                    } ?>>
        <a href="<?= base_url('tiket') ?>" title="tiket" data-filter-tags="tiket">
            <i class="fas fa-ticket" aria-hidden="true"></i>
            <span class="nav-link-text" data-i18n="nav.tiket">Tiket</span>
        </a>
    </li>
    <li id="dash" <?php
                    if ($title == 'RCASH | MONITORING LAYANAN') {
                        echo "class='active'";
                    } else {
                    } ?>>
        <a href="<?= base_url('monitoring-layanan') ?>" title="monitoring-layanan" data-filter-tags="monitoring-layanan">
            <i class="fas fa-tv" aria-hidden="true"></i>
            <span class="nav-link-text" data-i18n="nav.monitoring-layanan">Monitoring Layanan</span>
        </a>
    </li>
    <li id="dash" <?php
                    if ($title == 'RCASH | TOP USER') {
                        echo "class='active'";
                    } else {
                    } ?>>
        <a href="<?= base_url('top-user') ?>" title="top-user" data-filter-tags="top-user">
            <i class="fas fa-medal" aria-hidden="true"></i>
            <span class="nav-link-text" data-i18n="nav.top-user">Pengguna Teratas</span>
        </a>
    </li>

    <li class="nav-title">Menu Admin</li>
    <li id="kelola_data" <?php
                            if ($title == 'RCASH | KELOLA DATA') {
                                echo "class='active'";
                            } else {
                            } ?>>
        <a href="<?= base_url('dash_adm/kelola_data') ?>" title="kelola_data" data-filter-tags="kelola_data">
            <i class="fas fa-database"></i>
            <span class="nav-link-text" data-i18n="nav.kelola_data">Kelola Data</span>
        </a>
    </li>

    <li class="nav-title">Pengaturan & Lainnya</li>
    <li id="menu_akun" <?php
                        if ($title == 'RCASH | KELOLA AKUN') {
                            echo "class='active open'";
                        } else {
                        } ?>>
        <a href="#" title="Pengaturan Akun" data-filter-tags="pengaturan akun">
            <i class="fal fa-user"></i>
            <span class="nav-link-text" data-i18n="nav.pengaturan_akun">Pengaturan Akun</span>
        </a>
        <ul>
            <li id="sub_menu_profile" <?php
                                        if ($title == 'RCASH | KELOLA AKUN') {
                                            echo "class='active'";
                                        } else {
                                        } ?>>
                <a href="<?= base_url("dash/kelola_akun") ?>" title="Profil & Kelola Pengguna" data-filter-tags="pengaturan akun profil & kelola pengguna">
                    <span class="nav-link-text" data-i18n="nav.pengaturan_akun_profile_kelola_pengguna">Profil & Kelola Pengguna</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('dash/logout') ?>" title="Logout" data-filter-tags="Logout">
                    <span class="nav-link-text text-danger" data-i18n="nav.logout">Keluar</span>
                </a>
            </li>
        </ul>
    </li>
</ul>