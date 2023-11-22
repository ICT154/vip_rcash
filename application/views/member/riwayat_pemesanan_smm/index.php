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
                <p class="h6">Bagaimana cara mencari berdasarkan tanggal ?</p>
                Jika anda ingin mencari berdasarkan tanggal, masukan tanggal dengan format yyyy-mm-dd. <strong>Contoh: 2021-01-01</strong>
            </div>
        </div>
    </div>
</div>
<div id="panel-1" class="panel">
    <div class="panel-hdr">
        <h2>
            Riwayat <span class="fw-300"><i>Pemesanan</i></span>
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
            <table id="table-riwayat-smm" class="table table-bordered table-hover table-striped w-100">
                <thead class="bg-warning-500">
                    <tr>
                        <th>NO.</th>
                        <th>TANGGAL</th>
                        <th>LAYANAN</th>
                        <th>TARGET</th>
                        <th>HARGA</th>
                        <th>JUMLAH</th>
                        <th>STATUS</th>

                        <th>AKSI</th>

                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot class="thead-themed">
                    <tr>
                        <th>NO.</th>
                        <th>TANGGAL</th>
                        <th>LAYANAN</th>
                        <th>TARGET</th>
                        <th>HARGA</th>
                        <th>JUMLAH</th>
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                </tfoot>
            </table>
            <!-- datatable end -->
        </div>
    </div>
</div>