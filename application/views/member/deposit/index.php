<div class="alert alert-primary alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">
            <i class="fal fa-times"></i>
        </span>
    </button>
    <div class="d-flex flex-start w-100">
        <div class="mr-2 hidden-md-down">
            <span class="icon-stack icon-stack-lg">
                <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                <i class="fal fa-info icon-stack-1x opacity-100 color-white"></i>
            </span>
        </div>
        <div class="d-flex flex-fill">
            <div class="flex-fill">
                <p class="h6">Bagaimana Caranya Deposit ?</p>
                <code>
                    1. Isi Nominal
                    <br> 2. Pilih Jenis & Tipe Pembayaran
                    <br> 3. Bayar
                    <br> 4. Tunggu Konfirmasi Deposit Berhasil

                </code>
                <br><br>
                <code>HARAP DIBACA !</code> <br>
                <code> Deposit Harus Sesuai Dengan Nominal Yang Sudah Ditentukan !</code> <br>
                <code> Harap Transfer Ke Metode Pembayaran Yang Tersedia !</code> <br>
                <code> Setelah Transfer, anda dapat memberi bukti Konfirmasi lewat WhatsApp Admin !</code> <br>
                <code> Untuk Metode Pembayaran Otomatis, tidak perlu chat admin</code> <br>
                <code> Memainkan Deposit, Dapat Membuat Akun Anda Ter Banned</code>
            </div>
        </div>
    </div>
</div>

<div id="panel-1" class="panel">
    <div class="panel-hdr">
        <h2>
            Form <span class="fw-300"><i>Deposit Saldo</i></span>
        </h2>

    </div>
    <div class="panel-container show">
        <div class="panel-content">

            <?php if ($data_depo->num_rows() > 0) { ?>
                <div class="alert alert-info" role="alert">
                    <strong>Info !</strong> Silahkan selesaikan Pembayaran Deposit Terakhir Anda.
                </div>
            <?php  } else { ?>

                <form action="<?= base_url("deposit-baru-sv") ?>" method="post">
                    <div class="row text-truncate">
                        <div class="col">
                            <label for=""> Nominal Deposit :</label> <input type="text" class="form-control" name="nominal_deposit" id="nominal_deposit" required autocomplete="off">
                        </div>
                        <div class="col">
                            <label for=""> Metode Pembayaran :</label> <select name="metode_pembayaran" id="metode_pembayaran" class="form-control">
                                <option value="">-- Pilih Metode Pembayaran --</option>
                                <?php
                                foreach ($method_depo as $row) { ?>
                                    <option value="<?= $row->payment_method_id ?>"><?= $row->payment_method_name ?> - <?= $row->account_number ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div id="show_jenis_deposit"></div>

                        <div class="col">

                            <button class="btn btn-outline-success mt-4" type="submit">
                                <center>
                                    <div id="spinner_jenis_deposit" style="display:none;">
                                        <div class="spinner-border spinner-border-sm" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </center>

                                <div id="icon_button">
                                    <i class="fa-solid fa-money-bill-wave"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>
            <?php } ?>
            <center>
                <div id="spinner_form" style="display:none;">
                    <div class="spinner-border text-info " role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </center>



            <div id="form-input"></div>

        </div>
    </div>
</div>