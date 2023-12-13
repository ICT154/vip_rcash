<div class="row">
    <div class="col-lg-5">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <!-- <h2>
            Monitoring <span class="fw-300"><i>Layanan</i></span>
        </h2> -->
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>


            </div>
            <div class="panel-container show">
                <div class="panel-content table-responsive">
                    <div class="d-flex flex-column align-items-center justify-content-center p-4">
                        <?php
                        if ($user['profile_photo'] != null) {
                            $foto = base_url("storage/uploads_photo_profile/") . $user['profile_photo'];
                        } else {
                            $foto =  base_url("assets/") . "img/demo/avatars/avatar-admin-lg.png";
                        }
                        ?>
                        <img src="<?= $foto ?>" class=" shadow-2 img-thumbnail" alt="">
                        <h5 class="mb-0 fw-700 text-center mt-3">
                            <?= $user['nama_lengkap'] ?>
                            <small class="text-muted mb-0"><?= $user['username'] ?>, <?= $user['email'] ?></small>
                        </h5>
                    </div>

                    <div class="alert alert-success" role="alert">
                        <strong>Terdaftar Sejak : </strong> <?= $this->GZL->format_tanggal($user['tanggal_pendaftaran']) ?> <br>
                        <strong>Terakhir Login : </strong> <?= $this->GZL->format_tanggal($user['last_login']) ?> <br>
                        <strong>Saldo SMM : </strong>Rp. <?= $this->GZL->number_format($user['saldo']) ?> <br>
                        <strong>Saldo PPOB : </strong>Rp. <?= $this->GZL->number_format($user['saldo_ppob']) ?> <br>
                        <strong>Level Akun : </strong> <?= $user['level'] ?> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <!-- <h2>
            Monitoring <span class="fw-300"><i>Layanan</i></span>
        </h2> -->
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>


            </div>
            <div class="panel-container show">
                <div class="panel-content table-responsive">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab_borders_icons-1" role="tab" aria-selected="true"><i class="fal fa-user-cog mr-1"></i> Info Pribadi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-2" role="tab" aria-selected="false"><i class="fal fa-user-shield mr-1"></i> Kata Sandi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-3" role="tab" aria-selected="false"><i class="fal fa-key mr-1"></i> Api Key</a>
                        </li>
                    </ul>

                    <div class="tab-content border border-top-0 p-3">
                        <div class="tab-pane fade active show" id="tab_borders_icons-1" role="tabpanel">
                            <form action="<?= base_url("save-profile-edit") ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div class="form-group row">
                                    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Nama Lengkap </label>
                                    <div class="col-12 col-lg-8">
                                        <input type="text" name="nama_lengkap" id="nama_lengkap" required class="form-control" autocomplete="off" value="<?= $user['nama_lengkap'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">No Telp </label>
                                    <div class="col-12 col-lg-8">
                                        <input type="number" name="no_telp" id="no_telp" required class="form-control" autocomplete="off" value="<?= $user['nomer_hp'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Email </label>
                                    <div class="col-12 col-lg-8">
                                        <input type="text" name="email" id="email" required class="form-control" autocomplete="off" readonly value="<?= $user['email'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Foto Profil </label>
                                    <div class="col-12 col-lg-8">
                                        <input type="file" name="foto_profile_xxx" id="foto_profile_xxx" class="form-control" accept="image/*">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right"> </label>
                                    <div class="col-12 col-lg-8">
                                        <button type="submit" class="btn btn-icon btn-lg btn-success"><i class="fa fa-save"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab_borders_icons-2" role="tabpanel">
                            <form action="<?= base_url("save-profile-edit-password") ?>" method="post">
                                <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                                <div class="form-group row">
                                    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Kata Sandi Lama </label>
                                    <div class="col-12 col-lg-8">
                                        <input type="password" name="password_lama" id="password_lama" required class="form-control" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Kata Sandi Baru </label>
                                    <div class="col-12 col-lg-8">
                                        <input type="password" name="password_baru" id="password_baru" required class="form-control" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Konfirmasi Kata Sandi Baru </label>
                                    <div class="col-12 col-lg-8">
                                        <input type="password" name="password_baru_konfirmasi" id="password_baru_konfirmasi" required class="form-control" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right"> </label>
                                    <div class="col-12 col-lg-8">
                                        <button class="btn btn-icon btn-lg btn-success"><i class="fa fa-save"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab_borders_icons-3" role="tabpanel">
                            <form action="<?= base_url("save-profile-edit-api-key") ?>" method="post">
                                <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                                <div class="form-group row">
                                    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Api Key</label>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" name="api_key" id="api_key" required class="form-control" autocomplete="off" readonly value="<?= $user['api_key'] ?>">
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="btn btn-info" type='button' onclick="copyApiKey()">Copy</button>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right"> </label>
                                    <div class="col-12 col-lg-8">
                                        <button class="btn btn-icon btn-lg btn-success" type="submit"><i class="fa fa-shuffle"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>