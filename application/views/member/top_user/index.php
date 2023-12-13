<style>
    .top-users {
        max-width: 800px;
        margin: 50px auto;
    }

    .user-card {
        background-color: #343a40;
        color: #fff;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        transition: transform 0.3s;
    }

    .user-card:hover {
        transform: scale(1.05);
    }

    .user-card-keren {
        transition: transform 0.3s;
    }

    .user-card-keren:hover {
        transform: scale(1.05);
    }

    .user-rank {
        font-size: 36px;
        font-weight: bold;
        color: #ffc107;
    }

    .user-name {
        font-size: 24px;
        margin-top: 10px;
        margin-bottom: 15px;
    }

    .user-total {
        font-size: 18px;
        color: #6c757d;
    }

    .user-icon {
        font-size: 36px;
        margin-right: 10px;
    }

    .lrefunder {
        background: linear-gradient(270deg, #2bd5aa, #ead31b);
        background-size: 400% 400%;

        -webkit-animation: AnimationName 30s ease infinite;
        -moz-animation: AnimationName 30s ease infinite;
        animation: AnimationName 30s ease infinite;
    }
</style>

<div id="panel-1" class="panel">
    <div class="panel-hdr">
        <h2>
            Top <span class="fw-300"><i>User</i></span>
        </h2>
        <div class="panel-toolbar">
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
        </div>


    </div>
    <div class="panel-container show">
        <div class="panel-content table-responsive">

            <center>
                <h5>TOP DEPOSIT SMM</h5>
            </center>
            <div class="row ">
                <?php
                $no = 1;
                foreach ($top_deposit as $key) {
                    if ($key->nama_lengkap == null) {
                        $nama_lengkap = $key->username;
                    } else {
                        $nama_lengkap = $key->nama_lengkap;
                    }
                ?>

                    <div class="col-sm-4 col-xl-4 text-truncate">

                        <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g user-card-keren">
                            <div class="">
                                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                    <?= $this->GZL->formatAngkaRBJT($key->total_deposit) ?>
                                    <small class="m-0 l-h-n "><?= $nama_lengkap ?></small>
                                </h3>
                            </div>
                            <i class="fal fa-<?= $no++ ?> position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                        </div>
                    </div>
                <?php } ?>


            </div>


            <center>
                <h5>TOP PEMESANAN SMM</h5>
            </center>
            <div class="row">
                <?php
                $no = 1;
                foreach ($top_user_order as $key) {
                    if ($key->nama_lengkap == null) {
                        $nama_lengkap = $key->username;
                    } else {
                        $nama_lengkap = $key->nama_lengkap;
                    }
                ?>
                    <div class="col-sm-4 col-xl-4 text-truncate">
                        <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g user-card-keren">
                            <div class="">
                                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                    <?= $this->GZL->formatAngkaRBJT($key->total_price) ?> (<?= $key->total_transactions ?>)
                                    <small class="m-0 l-h-n "><?= $nama_lengkap ?></small>
                                </h3>
                            </div>
                            <i class="fal fa-1 position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                        </div>
                    </div>
                <?php } ?>
            </div>



            <!-- <div class="col-sm-4 col-xl-4 text-truncate">
                <center>
                    <h5>TOP LAYANAN</h5>
                </center>
                <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g user-card-keren">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                            21.5k
                            <small class="m-0 l-h-n">users signed up</small>
                        </h3>
                    </div>
                    <i class="fal fa-1 position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                </div>
            </div> -->
        </div>
        <!-- datatable start -->

        <!-- datatable end -->
    </div>
</div>