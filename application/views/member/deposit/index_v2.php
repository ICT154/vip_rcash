<div class="alert alert-primary alert-dismissible d-none">
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


<div class="row">
    <div class="col-md-7">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Form <span class="fw-300"><i>Deposit Saldo</i></span>
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">

                    <?php if ($data_depo->num_rows() > 0) { ?>
                        <div class="alert alert-info" role="alert">
                            <strong>Info !</strong> Silahkan selesaikan Pembayaran Deposit Terakhir Anda.
                        </div>
                    <?php  } else { ?>

                        <form action="<?= base_url("deposit-baru-sv") ?>" method="post" class="form-horizontal">
                            <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                            <div class="form-group row">
                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Metode Pembayaran </label>
                                <div class="col-12 col-lg-8">
                                    <select name="metode_pembayaran" id="metode_pembayaran" class="form-control">
                                        <option value="">-- Pilih Metode Pembayaran --</option>
                                        <?php
                                        foreach ($method_depo as $row) { ?>
                                            <option value="<?= $this->gzl->enkrip($row->payment_method_id) ?>"><?= $row->payment_method_name ?> - <?= $row->account_number ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Tipe Deposit </label>
                                <div class="col-12 col-lg-4">
                                    <select name="tipe_deposit" id="tipe_deposit" class="form-control">
                                        <option value="">-- Pilih Tipe Deposit --</option>
                                        <option value="<?= $this->gzl->enkrip("SMM") ?>">SMM </option>
                                        <!-- <option value="<?= $this->gzl->enkrip("PPOB") ?>">PPOB </option> -->
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right text-danger text-bold">Bonus Deposit </label>
                                <div class="col-12 col-lg-4">
                                    <div class="input-group">

                                        <input type="text" id="bonus_deposit" class="form-control" placeholder="" readonly>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">% </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Minimal Deposit </label>
                                <div class="col-12 col-lg-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp. </span>
                                        </div>
                                        <input type="text" id="minimal_deposit" class="form-control" placeholder="" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Jumlah Deposit </label>
                                <div class="col-12 col-lg-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp. </span>
                                        </div>
                                        <input type="text" class="form-control" name="nominal_deposit" id="nominal_deposit" required autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Saldo Diterima </label>
                                <div class="col-12 col-lg-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp. </span>
                                        </div>
                                        <input type="text" class="form-control" name="saldo_diterima" id="saldo_diterima" readonly autocomplete="off">
                                    </div>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right"> </label>
                                <div class="col-12 col-lg-5">
                                    <button class="btn btn-outline-success mt-4" type="submit">
                                        <center>
                                            <div id="spinner_jenis_deposit" style="display:none;">
                                                <div class="spinner-border spinner-border-sm" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                        </center>

                                        <div id="icon_button">
                                            <i class="fa-solid fa-money-bill-wave"></i> Deposit
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
    </div>

    <div class="col-md-5">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Informasi <span class="fw-300"><i>Deposit Saldo</i></span>
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="card-body pb-3">
                        <strong>Cara Melakukan Deposit Baru :</strong>
                        <ul>
                            <li>Pilih <em>Jenis Permintaan</em>.</li>
                            <li>Pilih <em>Jenis Pembayaran</em>.</li>
                            <li>Pilih <em>Metode Pembayaran</em>.</li>
                            <li>Input <em>Jumlah Deposit</em> yang Anda inginkan.</li>
                            <li>Transfer Pembayaran sesuai dengan nominal yang tertera.</li>
                            <li>Saldo akan otomatis bertambah dalam beberapa menit apabila Anda menggunakan <em>Jenis Permintaan</em> <b><em>OTOMATIS</em></b>.</li>
                        </ul>
                        <strong>Penting !</strong>
                        <ul>
                            <li>Kami berhak menghapus atau memblokir akun Anda apabila terbukti melakukan kecurangan pada Deposit.</li>
                            <li>Jika menggunakan <em>Jenis Permintaan</em> <b><em>MANUAL</em></b>, harap konfirmasi ke Admin agar Permintaan Deposit segera diterima.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>