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
    <!-- <div class="col-sm-4 col-xl-3">
        <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    Rp. <?= number_format($user['saldo_ppob'], 0, ",", ".") ?>
                    <small class="m-0 l-h-n">Saldo PPOB</small>
                </h3>
            </div>
            <i class="fas fa-money-bill-alt position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
        </div>
    </div> -->
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
                        <!-- <div class="col-12 d-grid mb-3">
                            <a href="javascript:;" class="btn btn-primary benefit_account" data-bs-toggle="modal" data-bs-target="#benefit_account">Lihat Benefit</a>
                        </div> -->
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
                                    <p class="mb-0 text-primary fw-bolder"><?= strtoupper($user['level']) ?></p>
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
                                    <p class="mb-0 fw-bolder"><?= $tot_trx_one_week ?> Transaksi</p>
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
                                    <p class="mb-0 text-primary fw-bolder">
                                        <?php
                                        if ($user['level'] == "basic") {
                                            echo "PREMIUM";
                                        } else if ($user['level'] == "premium") {
                                            echo "SPECIAL";
                                        } else if ($user['level'] == "special") {
                                            echo "SPECIAL";
                                        } else {
                                            echo "<span class='text-danger'>Tidak ada</span>";
                                        }
                                        ?>
                                    </p>
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
                                    <p class="mb-0 fw-bolder">20</p>
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
                                    <p class="mb-0 fw-bolder"><?= $tot_trx_one_week ?></p>
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
                                <?php
                                if ($user['level'] == "basic") {
                                    $progress = ($tot_trx_one_week / 20) * 100;
                                } else if ($user['level'] == "premium") {
                                    $progress = ($tot_trx_one_week / 50) * 100;
                                } else if ($user['level'] == "special") {
                                    $progress = ($tot_trx_one_week / 50) * 100;
                                } else {
                                    $progress = 0;
                                }
                                ?>
                                <div class="flex-grow-1 me-3">
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $progress ?>%"></div>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 ml-2">
                                    <p class="mb-0 fw-bolder"><?= $progress ?>%</p>
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
                        <?php foreach ($get_pengumuman as $key) :
                            if ($key['subject_announcement'] == "informasi") {
                                $icon = "fas fa-info-circle";
                                $bg_color = "bg-primary";
                            } else if ($key['subject_announcement'] == "perubahan") {
                                $icon = "fas fa-exclamation-circle";
                                $bg_color = "bg-warning";
                            } else if ($key['subject_announcement'] == "perbaikan") {
                                $icon = "fas fa-exclamation-triangle";
                                $bg_color = "bg-danger";
                            } else {
                                $icon = "fas fa-info-circle";
                                $bg_color = "bg-primary";
                            }

                        ?>
                            <li class="list-group-item pt-0 px-0">
                                <div class="d-flex align-items-start ">
                                    <div class="flex-grow-1 me-2">
                                        <span class="mb-0"><span class="fs-5 badge text-white fw-bold <?= $bg_color ?> rounded-pill"><i class="<?= $icon ?> me-2"></i>&nbsp;INFORMASI</span><small class="fw-normal float-end ml-1"><?= $this->GZL->ubahFormatDateTime($key['date_g']) ?></small></span>
                                        <?php
                                        $isi = $key['content_announcement'];
                                        $isi = strip_tags($isi);
                                        echo $isi;
                                        ?>
                                        <small>Pembaruan terakhir: <?= $this->GZL->ubahFormatDateTime($key['last_update']) ?></small>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <hr class="mt-0">
                    <div class="d-grid">
                        <a href="<?= base_url("announcement") ?>" class="btn btn-primary mb-0">Lihat Semua</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>