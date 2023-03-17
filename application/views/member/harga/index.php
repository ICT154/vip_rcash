<div class="col-xl-12">
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
        <div class="panel-container show">
            <div class="panel-content table-responsive">
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab-fill" data-toggle="tab" href="#pulsa" role="tab" aria-controls="pulsa" aria-selected="false">Pulsa &amp; PPOB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab-fill" data-toggle="tab" href="#games" role="tab" aria-controls="games" aria-selected="false">Games &amp; App Premium</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab-fill" data-toggle="tab" href="#sosmed" role="tab" aria-controls="sosmed" aria-selected="false">Sosmed</a>
                    </li>
                </ul>

                <div class="tab-content mt-3">
                    <div class="tab-pane show active" id="pulsa">
                        <form role="form" method="POST">
                            <input type="hidden" id="subpulsa" name="subpulsa" value="false">
                            <div class="row">
                                <div class="form-group col-12 col-md-6" id="mpulsa1">
                                    <select class="form-control select2" id="provpulsa" name="provpulsa">
                                        <?php foreach ($prepaid_categori as $key) { ?>
                                            <option value="<?php echo $this->GZL->enkrip($key->brand); ?>"><?php echo $key->brand; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped mb-0 " id="table-prepaid">
                                    <thead class="bg-warning-500">
                                        <tr>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">No</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Produk</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle;width:30%">Catatan</th>
                                            <th class="text-center" colspan="2" style="vertical-align:middle">Harga</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Status</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Member</th>
                                            <th class="text-center">Reseller</th>
                                        </tr>
                                    </thead>
                                    <tbody id="pricelist2">
                                        <tr>
                                            <td colspan="5" class="text-center">Silakan pilih kategori.</td>
                                            <td class="text-center text-danger"><i class="far fa-times-circle"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="sosmed">
                        <form role="form" method="POST">
                            <div class="row">
                                <div class="form-group col-12">
                                    <select class="form-control" id="categorysosmed" name="categorysosmed">
                                        <?php foreach ($sosmed_categori as $key) { ?>
                                            <option value="<?php echo $this->GZL->enkrip($key->category); ?>"><?php echo $key->category; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped zero-configuration mb-0">
                                    <thead class="bg-warning-500">
                                        <tr>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">ID</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Produk</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Min</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Max</th>
                                            <th class="text-center" colspan="2" style="vertical-align:middle">Harga/1000</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Status</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Member</th>
                                            <th class="text-center">Reseller</th>
                                        </tr>
                                    </thead>
                                    <tbody id="pricelist1">
                                        <tr>
                                            <td colspan="6" class="text-center">Silakan pilih kategori.</td>
                                            <td class="text-center text-danger"><i class="far fa-times-circle"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="games">
                        <form role="form" method="POST">
                            <div class="row">
                                <div class="form-group col-12">
                                    <select class="form-control select2" id="categorygames" name="categorygames">
                                        <?php foreach ($game_categori as $key) { ?>
                                            <option value="<?php echo $this->GZL->enkrip($key->game); ?>"><?php echo $key->game; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped zero-configuration mb-0">
                                    <thead class="bg-warning-500">
                                        <tr>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">ID</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Produk</th>
                                            <th class="text-center" colspan="2" style="vertical-align:middle">Harga</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Status</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Member</th>
                                            <th class="text-center">Reseller</th>
                                        </tr>
                                    </thead>
                                    <tbody id="pricelist3">
                                        <tr>
                                            <td colspan="4" class="text-center">Silakan pilih kategori.</td>
                                            <td class="text-center text-danger"><i class="far fa-times-circle"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- datatable start -->
                <!-- datatable end -->
            </div>
        </div>
    </div>
</div>