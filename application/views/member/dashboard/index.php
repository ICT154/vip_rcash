<div class="row text-truncate">
    <div class="col-sm-4 col-xl-3">
        <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    Rp. <?= number_format($user['saldo'], 2, ",", ".") ?>
                    <small class="m-0 l-h-n">Saldo SMM</small>
                </h3>
            </div>
            <i class="fas fa-money-bill-alt position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
        </div>
    </div>
    <!-- <div class="col-sm-6 col-xl-3">
        <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    Rp. <?= $this->gzl->number_format($user['saldo_ppob'], 2, ",", ".") ?>
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

                    Rp. <?= $this->gzl->number_format($tot_pesan_smm['price'], 2, ",", ".") ?>
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
                    Rp. <?= $this->gzl->number_format($tot_depo['jumlah_didapat'], 2, ",", ".") ?>
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