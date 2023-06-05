<style>
    @media print {

        body,
        html {
            width: 210mm;
            height: 297mm
        }

        .invoice-page {
            -webkit-print-color-adjust: exact
        }

        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9 {
            float: left;
            padding: 0
        }

        .col-sm-12 {
            width: 100%
        }

        .col-sm-11 {
            width: 91.66666667%
        }

        .col-sm-10 {
            width: 83.33333333%
        }

        .col-sm-9 {
            width: 75%
        }

        .col-sm-8 {
            width: 66.66666667%
        }

        .col-sm-7 {
            width: 58.33333333%
        }

        .col-sm-6 {
            width: 50%
        }

        .col-sm-5 {
            width: 41.66666667%
        }

        .col-sm-4 {
            width: 33.33333333%
        }

        .col-sm-3 {
            width: 25%
        }

        .col-sm-2 {
            width: 16.66666667%
        }

        .col-sm-1 {
            width: 8.33333333%
        }

        div[data-size=A4] {
            margin: 0;
            -webkit-box-shadow: 0;
            box-shadow: 0;
            padding: 3em 5em !important
        }

        .breadcrumb,
        .subheader {
            display: none
        }

        :not(.keep-print-font) {
            font-family: Arial, Helvetica, sans-serif !important;
            font-size: 11pt !important
        }

        table {
            font-size: 100% !important
        }
    }

    @page {
        size: auto;
        margin: 0
    }

    div[data-size=A4] {
        background: #fff;
        display: block;
        margin: 0 auto;
        margin-bottom: .5cm;
        -webkit-box-shadow: 0 0 .5cm rgba(0, 0, 0, .5);
        box-shadow: 0 0 .5cm rgba(0, 0, 0, .5);
        background: url(../img/svg/pattern-1.svg) no-repeat center bottom;
        background-size: cover;
        padding: 4rem;
        position: relative
    }

    @media only screen and (max-width:992px) {

        .container,
        div[data-size=A4] {
            padding: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }
    }
</style>
<div class="container">
    <div data-size="A4">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex align-items-center mb-5">
                    <h2 class="keep-print-font fw-500 mb-0 text-primary flex-1 position-relative">
                        RCASH
                        <small class="text-muted mb-0 fs-xs">
                            Layanan SMM & PPOB
                        </small>
                        <!-- barcode demo only -->
                        <!-- <img id="barcode" alt="" class="position-absolute pos-top pos-right height-3 mt-1 hidden-md-down" src="<?= base_url("assets/img/rcash.svg") ?>"> -->
                    </h2>
                </div>
                <h3 class="fw-300 display-4 fw-500 color-primary-600 keep-print-font pt-4 l-h-n m-0">
                    INVOICE
                </h3>
                <div class="text-dark fw-700 h1 mb-g keep-print-font">
                    # <?= $data_depo['deposit_id'] ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 d-flex">
                <div class="table-responsive">
                    <table class="table table-clean table-sm align-self-end">
                        <tbody>
                            <tr>
                                <td>
                                    Tanggal Deposit :
                                </td>
                                <td>
                                    <?= $this->GZL->format_tanggal_indonesia($data_depo['tanggal_deposit']) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Provider:
                                </td>
                                <td>
                                    <?= $data_depo['payment_method_id'] ?>
                                </td>
                            </tr>
                            <tr class="text-danger text-strong">
                                <td>
                                    CATATAN :
                                </td>
                                <td>
                                    <?= $data_depo['deposit_id'] ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-4 ml-sm-auto">
                <div class="table-responsive">
                    <table class="table table-sm table-clean text-right">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>HARAP TRANSFER KE:</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-danger">

                                    <strong><?= $method_depo['payment_method_name'] ?></strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-danger">

                                    <strong><?= $method_depo['payment_method_id'] ?></strong>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table mt-5">
                        <thead>
                            <tr>
                                <th class="text-center border-top-0 table-scale-border-bottom fw-700"></th>
                                <th class="border-top-0 table-scale-border-bottom fw-700">Item</th>
                                <th class="border-top-0 table-scale-border-bottom fw-700">Deskripsi</th>
                                <th class="text-right border-top-0 table-scale-border-bottom fw-700">Total Transfer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center fw-700">1</td>
                                <td class="text-left strong">Deposit</td>
                                <td class="text-left">Penambahan Saldo</td>
                                <td class="text-right">Rp. <?= $this->GZL->number_format($data_depo['jumlah'], 0, ",", ".") ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h4 class="py-5 text-primary">
                    Dear <?= $user['nama_lengkap'] ?>, Terima kasih banyak. karena telah melakukan deposit
                    <br>
                    Silahkan bayar supaya anda dapat segera bertransaksi.
                </h4>
                <p class="mt-2 text-muted mb-0">
                    Invoice Pembayaran : <?= $data_depo['deposit_id'] ?>
                </p>
            </div>
        </div>
    </div>
    <button class="btn btn-info" data-toggle="modal" data-target="#default-example-modal-lg-center">KIRIM BUKTI TRANSFER <?php if ($cek_bukti > 0) { ?> <span class="badge badge-icon bg-success" data-toggle="tooltip" data-placement="auto" title="" data-original-title="Anda sudah mengirim bukti transfer, tapi anda bisa mengirim lagi jika yang sebelumnya belum lengkap ( bukti transfer yang sudah anda kirim sebelumnya akan hilang )"><i class="fa fa-check"></i></span>
        <?php } ?> </button>
    <button class="btn btn-danger" id="btn-cancel-deposit">BATALKAN DEPOSIT</button>
</div>