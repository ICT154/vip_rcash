<div class="row">
    <div class="col-md-7">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Form <span class="fw-300"><i>Pembuatan Tiket Baru</i></span>
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">



                    <form action="<?= base_url("tiket-sv") ?>" method="post" class="form-horizontal">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                        <div class="form-group row">
                            <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Subjek </label>
                            <div class="col-12 col-lg-8">
                                <input type="text" class="form-control" name="subjek_tiket" id="subjek_tiket" required autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Tipe Tiket </label>
                            <div class="col-12 col-lg-5">
                                <select name="tipe_tiket" id="tipe_tiket" class="form-control">
                                    <option value="DEPOSIT">DEPOSIT</option>
                                    <option value="PEMESANAN">PEMESANAN</option>
                                    <option value="LAYANAN">LAYANAN</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Pesan </label>
                            <div class="col-12 col-lg-9">
                                <textarea name="pesan_tiket" id="pesan_tiket" class="form-control" cols="30" rows="10"></textarea>
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
                                        <i class="fa-solid fa-ticket"></i> Kirim Tiket
                                    </div>
                                </button>
                            </div>
                        </div>

                    </form>

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
                    Informasi <span class="fw-300"><i>Tiket</i></span>
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
                        <strong>Cara Membuat Tiket Baru :</strong>
                        <ul>
                            <li>Input <em>Subjek</em> yang Anda inginkan.</li>
                            <li>Pilih <em>Tipe Tiket</em> (Pesanan, Deposit, Lainnya).</li>
                            <li>Kami akan segera merespon tiket Anda.</li>
                        </ul>
                        <strong>Penting !</strong>
                        <ul>
                            <li>Kami berhak menghapus atau memblokir akun Anda apabila terbukti melakukan tindakan pelanggaran pada Tiket.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="panel-1" class="panel">
    <div class="panel-hdr">
        <h2>
            Data <span class="fw-300"><i>Tiket</i></span>
        </h2>
        <div class="panel-toolbar">
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
        </div>


    </div>
    <div class="panel-container show">
        <div class="panel-content table-responsive">
            <!-- datatable start -->
            <table id="table-data-tiket" class="table table-bordered table-hover table-striped w-100">
                <thead class="bg-warning-500">
                    <tr>
                        <th>NO.</th>
                        <th>TANGGAL DIBUAT</th>
                        <th>TANGGAL PEMBARUAN</th>
                        <th>TIPE</th>
                        <th>SUBJEK</th>
                        <th>STATUS</th>
                        <th>AKSI</th>

                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot class="thead-themed">
                    <tr>
                        <th>NO.</th>
                        <th>TANGGAL DIBUAT</th>
                        <th>TANGGAL PEMBARUAN</th>
                        <th>TIPE</th>
                        <th>SUBJEK</th>
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                </tfoot>
            </table>
            <!-- datatable end -->
        </div>
    </div>
</div>