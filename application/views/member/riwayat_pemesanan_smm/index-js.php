<input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

<div class="modal fade default-example-modal-right-lg" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true" id="mod_det_prod">
    <div class="modal-dialog modal-dialog-right modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4">Lacak Status Pemesanan</h5>
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




<div class="modal fade show" id="mod_komplain" tabindex="-1" role="dialog" aria-modal="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Komplain Pesanan Ini</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div id="komplain_show_here"></div>
                <div class="load_komplain text-center mb-3" id="load_komplain" style="display:none;">
                    <div class="spinner-border text-success" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect waves-themed" data-dismiss="modal">Close</button>
                <button type="submit" id="btn-komplain" class="btn btn-primary waves-effect waves-themed">Kirim Komplain</button>
            </div>
        </div>
    </div>
</div>


<script>
    function refresh_token_csrf() {
        $.ajax({
            url: "<?= base_url("refresh-csrf-token") ?>",
            type: "GET",
            dataType: "json",
            success: function(data) {
                $("#" + "<?php echo $this->security->get_csrf_token_name(); ?>").val(data.token);
            }
        });
    }

    function refresh_token_csrf_V2() {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "<?= base_url("refresh-csrf-token") ?>",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    resolve(data.token);
                },
                error: function(xhr, status, error) {
                    reject(error); // Reject the promise in case of an error
                }
            });
        });
    }




    $(document).ready(function() {
        refresh_token_csrf();
        var token_data = $("#<?php echo $this->security->get_csrf_token_name(); ?>").val();
        var dt = $('#table-riwayat-smm').DataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ],
            "responsive": true,
            // Processing indicator
            "processing": true,
            // DataTables server-side processing mode
            "serverSide": true,
            // Initial no order.
            "order": [],
            // Load data from an Ajax source
            "ajax": {
                "url": "<?php echo base_url("riwayat-pesanan/tabel") ?>",
                "type": "POST",
                "data": {
                    "<?= $this->security->get_csrf_token_name(); ?>": token_data
                },
                "aftersend": function() {
                    refresh_token_csrf();
                },
            },
            //Set column definition initialisation properties
            "columnDefs": [{
                "targets": [0],
                "orderable": false
            }],
        });

    });


    function komplain(x) {
        refresh_token_csrf();
        var id_pesanan = $(x).data("id");
        var token_data = $("#<?php echo $this->security->get_csrf_token_name(); ?>").val();
        $("#mod_komplain").modal("show");
        $("#komplain_show_here").hide();
        $("#load_komplain").show();
        $("#btn-komplain").attr("disabled", true);
        $.ajax({
            url: "<?= base_url("riwayat-pesanan/komplain") ?>",
            type: "POST",
            data: {
                "id_pesanan": id_pesanan,
                "<?= $this->security->get_csrf_token_name(); ?>": token_data
            },
            success: function(data) {
                $("#komplain_show_here").html(data);
                $("#komplain_show_here").show();
                $("#load_komplain").hide();
                $("#btn-komplain").attr("disabled", false);
                refresh_token_csrf();
            },
            error: function(xhr, status, error) {
                $("#komplain_show_here").html(error);
                $("#komplain_show_here").show();
                $("#load_komplain").hide();
            }
        });
    }


    function detail(x) {
        refresh_token_csrf();
        var id_pesanan = $(x).data("id");
        var token_data = $("#<?php echo $this->security->get_csrf_token_name(); ?>").val();
        $("#mod_det_prod").modal("show");
        $("#det_prod_show_here").hide();
        $("#load_det_prod").show();
        $.ajax({
            url: "<?= base_url("riwayat-pesanan/detail") ?>",
            type: "POST",
            data: {
                "id_pesanan": id_pesanan,
                "<?= $this->security->get_csrf_token_name(); ?>": token_data
            },
            success: function(data) {
                $("#det_prod_show_here").html(data);
                $("#det_prod_show_here").show();
                $("#load_det_prod").hide();
                refresh_token_csrf();
            },
            error: function(xhr, status, error) {
                $("#det_prod_show_here").html(error);
                $("#det_prod_show_here").show();
                $("#load_det_prod").hide();
            }
        });
    }
</script>