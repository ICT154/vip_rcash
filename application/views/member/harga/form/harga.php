<?php $table_name = "table-harga" . rand() ?>
<div class="container">
    <div class="table-responsive mt-3 mb-3">
        <table class="table table-bordered table-hover table-striped" id="<?= $table_name ?>">
            <thead class="bg-warning">
                <tr>
                    <th class="">No</th>
                    <th class="">Nama</th>
                    <th class="">Harga</th>
                    <th class="">Min/Max Pesan</th>
                    <th class="">Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($harga as $key) {
                ?>
                    <tr>
                        <td class=""><?= $no++ ?></td>
                        <td class=""><?= $key->name ?></td>
                        <td class="">Rp. <?= $this->GZL->number_format($key->price_sell, 0, "", ".") ?></td>
                        <td class=""><?= $this->GZL->number_format($key->min, 0, "", ".") ?> / <?= $this->GZL->number_format($key->max, 0, "", ".") ?></td>
                        <!-- <td class=""><?= $this->GZL->number_format($key->max, 0, "", ".") ?></td> -->
                        <td class="">
                            <button class="btn btn-outline-primary btn-sm" onclick="load_detail_prod('<?= $this->GZL->enkrip($key->id) ?>')"><i class="fa fa-search"></i></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade default-example-modal-right-lg" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true" id="mod_det_prod">
    <div class="modal-dialog modal-dialog-right modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4">Detail Layanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body" id="">
                <div id="det_prod_show_here"></div>
                <div class="load_det_prod text-center mb-3" id="load_det_prod" style="display:none;">
                    <div class="spinner-border text-success" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect waves-themed" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function load_detail_prod(fav) {
        $("#mod_det_prod").modal('show');
        $("load_det_prod").show();
        $.ajax({
            url: "<?= base_url("load-detail-prod") ?>",
            type: "post",
            data: {
                prod: fav
            },
            success: function(data) {
                $("#load_det_prod").hide();
                $("#det_prod_show_here").html(data);
            },
            error: function() {
                $("#load_det_prod").hide();
                $("#det_prod_show_here").html("<div class='text-center mt-3 mb-3 text-danger'>Terjadi kesalahan.<i class='far fa-times-circle'></i></div>");
            }
        });
    }
    // var tabel = null;
    // $(document).ready(function() {
    //     tabel = $('#<?= $table_name ?>').DataTable({
    //         "order": [
    //             [0, "asc"]
    //         ],
    //         "orderData": [0, 0],
    //         "columnDefs": [{
    //             "targets": 2,
    //             "render": function(data, type, row) {
    //                 var price = parseFloat(data.replace(/\./g, '').replace(',', '.')).toFixed(2);
    //                 return 'Rp. ' + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    //             }
    //         }],
    //         "scrollX": true
    //     });
    // });
</script>