<style>
    .tracking-detail {
        padding: 3rem 0
    }

    #tracking {
        margin-bottom: 1rem
    }

    [class*=tracking-status-] p {
        margin: 0;
        font-size: 1.1rem;
        color: #fff;
        text-transform: uppercase;
        text-align: center
    }

    [class*=tracking-status-] {
        padding: 1.6rem 0
    }

    .tracking-status-intransit {
        background-color: #65aee0
    }

    .tracking-status-outfordelivery {
        background-color: #f5a551
    }

    .tracking-status-deliveryoffice {
        background-color: #f7dc6f
    }

    .tracking-status-delivered {
        background-color: #4cbb87
    }

    .tracking-status-attemptfail {
        background-color: #b789c7
    }

    .tracking-status-error,
    .tracking-status-exception {
        background-color: #d26759
    }

    .tracking-status-expired {
        background-color: #616e7d
    }

    .tracking-status-pending {
        background-color: #ccc
    }

    .tracking-status-inforeceived {
        background-color: #214977
    }

    .tracking-list {
        border: 1px solid #e5e5e5
    }

    .tracking-item {
        border-left: 1px solid #e5e5e5;
        position: relative;
        padding: 2rem 1.5rem .5rem 2.5rem;
        font-size: .9rem;
        margin-left: 3rem;
        min-height: 5rem
    }

    .tracking-item:last-child {
        padding-bottom: 4rem
    }

    .tracking-item .tracking-date {
        margin-bottom: .5rem
    }

    .tracking-item .tracking-date span {
        color: #888;
        font-size: 85%;
        padding-left: .4rem
    }

    .tracking-item .tracking-content {
        padding: .5rem .8rem;
        background-color: #f4f4f4;
        border-radius: .5rem
    }

    .tracking-item .tracking-content span {
        display: block;
        color: #888;
        font-size: 85%
    }

    .tracking-item .tracking-icon {
        line-height: 1.6rem;
        position: absolute;
        left: -1.3rem;
        width: 2.6rem;
        height: 2.6rem;
        text-align: center;
        border-radius: 50%;
        font-size: 1.1rem;
        background-color: #fff;
        color: #fff
    }

    .tracking-item .tracking-icon.status-sponsored {
        background-color: #f68
    }

    .tracking-item .tracking-icon.status-delivered {
        background-color: #4cbb87
    }

    .tracking-item .tracking-icon.status-outfordelivery {
        background-color: #f5a551
    }

    .tracking-item .tracking-icon.status-deliveryoffice {
        background-color: #f7dc6f
    }

    .tracking-item .tracking-icon.status-attemptfail {
        background-color: #b789c7
    }

    .tracking-item .tracking-icon.status-exception {
        background-color: #d26759
    }

    .tracking-item .tracking-icon.status-inforeceived {
        background-color: #214977
    }

    .tracking-item .tracking-icon.status-intransit {
        color: #e5e5e5;
        border: 1px solid #e5e5e5;
        font-size: .6rem
    }

    @media(min-width:992px) {
        .tracking-item {
            margin-left: 10rem
        }

        .tracking-item .tracking-date {
            position: absolute;
            left: -10rem;
            width: 7.5rem;
            text-align: right
        }

        .tracking-item .tracking-date span {
            display: block
        }

        .tracking-item .tracking-content {
            padding: 0;
            background-color: transparent
        }
    }
</style>

<?php

if ($datax['status'] == "Success") {
    $class_bg = "success";
} else if ($datax['status'] == "Error") {
    $class_bg = "danger";
} else if ($datax['status'] == "Partial") {
    $class_bg = "secondary";
} else if ($datax['status'] == "Processing") {
    $class_bg = "info";
}
?>


<div class="container">
    <h2>DETAIL PESANAN</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <td class="alert alert-<?= $class_bg ?>">ID Pesanan </td>
                <td><?= strtoupper($datax['transaction_id']) ?></td>
            </tr>
            <tr>
                <td class="alert alert-<?= $class_bg ?>">Layanan </td>
                <td><?= $datax['service'] ?></td>
            </tr>
            <tr>
                <td class="alert alert-<?= $class_bg ?>">Target </td>
                <td><?= $datax['data'] ?></td>
            </tr>
            <tr>
                <td class="alert alert-<?= $class_bg ?>">Jumlah </td>
                <td><?= $this->GZL->number_format($datax['quantity']) ?></td>
            </tr>
            <tr>
                <td class="alert alert-<?= $class_bg ?>">Sisa</td>
                <td><?= $this->GZL->number_format($datax['remain']) ?></td>
            </tr>
            <tr>
                <td class="alert alert-<?= $class_bg ?>">Price </td>
                <td>Rp. <?= $this->GZL->number_format($datax['price']) ?></td>
            </tr>
        </table>
    </div>

    <div class="row">

        <div class="col-md-12 col-lg-12">
            <div id="tracking-pre"></div>
            <div id="tracking">
                <div class="text-center tracking-status-intransit bg-<?= $class_bg ?>">
                    <p class="tracking-status text-tight"><?= $datax['status'] ?></p>
                </div>
                <?php foreach ($data_history as $key) :


                    if ($key->old_status == "Place Order") { ?>
                        <div class="tracking-list">
                            <div class="tracking-item">
                                <div class="tracking-icon status-intransit" style='color:#886ab5'>
                                    <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                    </svg>
                                    <!-- <i class="fas fa-circle"></i> -->
                                </div>
                                <div class="tracking-date"><?= $this->GZL->changeDateFormat_1($key->change_date) ?><span><?= $this->GZL->changeDateFormat_2($key->change_date) ?></span></div>
                                <div class="tracking-content"><?= strtoupper($key->old_status) ?><span>Jumlah Pesan : <?= $key->quantity ?> | Sudah Terisi : <?= $key->count ?> | Sisa : <?= $key->remain ?> | </span></div>
                            </div>
                        </div>
                    <?php } else {
                        if ($key->new_status == "Success") {
                            $class_bg_2 = "color: #18a899";
                        } else if ($key->new_status == "Error") {
                            $class_bg_2 = "color: #fd3995;";
                        } else if ($key->new_status == "Partial") {
                            $class_bg_2 = "color: #868e96";
                        } else if ($key->new_status == "Processing") {
                            $class_bg_2 = "color: #2196f3";
                        } else if ($key->new_status == "Pending") {
                            $class_bg_2 = "color: #ffc241";
                        } else {
                            $class_bg_2 = "color: #868e96";
                        }
                    ?>

                        <div class="tracking-list">
                            <div class="tracking-item">
                                <div class="tracking-icon status-intransit" style='<?= $class_bg_2 ?>'>
                                    <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                    </svg>
                                    <!-- <i class="fas fa-circle"></i> -->
                                </div>
                                <div class="tracking-date"><?= $this->GZL->changeDateFormat_1($key->change_date) ?><span><?= $this->GZL->changeDateFormat_2($key->change_date) ?></span></div>
                                <div class="tracking-content"><?= strtoupper($key->new_status) ?><span>Jumlah Pesan : <?= $this->GZL->number_format($key->quantity) ?> | Sudah Terisi : <?= $this->GZL->number_format($key->count) ?> | Sisa : <?= $this->GZL->number_format($key->remain) ?> | </span></div>
                            </div>
                        </div>
                    <?php }
                    ?>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>