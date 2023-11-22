<style>
    .modal {
        overflow-y: auto;
    }

    .swal2-container {
        z-index: 1060;
        /* Nilai ini dapat disesuaikan sesuai dengan kebutuhan Anda */
    }
</style>
<script>
    $("#btn-cancel-deposit").on("click", function() {
        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Anda akan membatalkan deposit ini!",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Ya saya yakin!",
        }).then(function(result) {
            if (result.value) {
                // Lakukan request AJAX ke server untuk menghapus data deposit
                $.ajax({
                    url: "<?= base_url('deposit-delete'); ?>",
                    type: "POST",
                    data: {
                        id: "<?= $this->GZL->enkrip($data_depo['deposit_id']); ?>",
                        <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash(); ?>"
                    },
                    success: function(response) {
                        location.reload();
                    }
                });
            }
        });
    });
</script>
<link href="<?= base_url("assets/plugin/summer_note/") ?>summernote-bs4.css" rel="stylesheet">
<script src="<?= base_url("assets/plugin/summer_note/") ?>summernote-bs4.js"></script>
<div class="modal fade" id="default-example-modal-lg-center" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">FORM PENGIRIMAN BUKTI TRANSFER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">

                <?php if ($cek_bukti > 0) { ?>
                    <div class="panel-tag">
                        Terima Kasih, Bukti Transfer Anda Sudah Kami Terima, Silahkan Tunggu Konfirmasi Dari Kami
                    </div>
                <?php } else { ?>
                    <div class="panel-tag bg-danger text-white" style="border-left: 3px solid #fd3995;">
                        Silahkan Isi Form Ini Dengan Detail Transfer Anda Seperti Yang Sudah Dicontohkan
                    </div>
                <?php } ?>

                <div id="form_bukti_tf">
                    <p><b>
                            <font color="#ff0000">HARAP PASTIKAN REKENING TUJUAN SUDAH SESUAI !</font>
                        </b></p>
                    <p><b>Bank/E-Wallet Pengirim : <br> Nama Rekening Pengirim : <br> Nomor Rekening Pengirim : <br> Screenshoot Transfer</b></p>
                    <p><b><br></b></p>
                    <p><b> </b></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect waves-themed" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-themed" id="btn-trx-send">KIRIM BUKTI</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#form_bukti_tf').summernote({});
    $("#btn-trx-send").on("click", function() {
        $("#default-example-modal-lg-center").modal("hide");
        var bukti_tf = $('#form_bukti_tf').summernote('code');
        var enkripsi = btoa(bukti_tf);
        // console.log(enkripsi);
        // console.log(bukti_tf);

        var id = "<?= $this->GZL->enkrip($data_depo['deposit_id']); ?>";
        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Anda akan mengirim bukti transfer ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Ya saya yakin!",
        }).then(function(result) {
            if (result.value) {
                // Lakukan request AJAX ke server untuk mengirim bukti transfer
                $.ajax({
                    url: "<?= base_url('deposit-send'); ?>",
                    type: "POST",
                    data: {
                        id: id,
                        bukti_tf: enkripsi,
                        <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash(); ?>"
                    },
                    success: function(response) {
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Bukti transfer berhasil dikirim!",
                            icon: "success",
                            showCancelButton: false,
                            confirmButtonText: "OK",
                        });
                        location.reload();
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        Swal.fire({
                            title: "Gagal!",
                            text: "Terjadi kesalahan saat mengirim bukti transfer!",
                            icon: "error",
                            showCancelButton: false,
                            confirmButtonText: "OK",
                        });
                    }
                });
            }
        });
    });
</script>