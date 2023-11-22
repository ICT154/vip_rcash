<link href="<?= base_url("assets/plugin/summer_note/") ?>summernote-bs4.css" rel="stylesheet">
<script src="<?= base_url("assets/plugin/summer_note/") ?>summernote-bs4.js"></script>

<div class="panel-tag">
    Kenapa sama pesanan ini ? ceritain dibawah
</div>
<?php

if (isset($data_tiket)) {
?>
    <div class="panel-tag">
        Kamu udah buat komplain sebelumnya, ini komplain kamu sebelumnya <a class="" href="<?= base_url("tiket/p/" . $this->GZL->enkrip($data_tiket['transaction_id'])) ?>">lihat disini</a>
    </div>
<?php } else { ?>

    <input type="hidden" name="id_pesanan" id="id_pesanan" value="<?= $this->gzl->enkrip($datax['transaction_id']) ?>">
    <textarea name="komplain_teks" id="komplain_teks" class="form-control" cols="30" rows="10"></textarea>
    <script>
        refresh_token_csrf();
        $('#komplain_teks').summernote({});
        $("#btn-komplain").on("click", function() {
            // console.log("ok");

            var id_pesanan = $("#id_pesanan").val();
            var komplain_teks = $("#komplain_teks").val();
            var token_data = $("#<?php echo $this->security->get_csrf_token_name(); ?>").val();
            if (komplain_teks == "") {
                $("#mod_komplain").modal("hide");
                Swal.fire({
                    title: "Gagal!",
                    text: "Komplain Tidak Boleh Kosong",
                    icon: "error",
                    showCancelButton: false,
                    confirmButtonText: "OK",
                });
                return false;
            }

            $.ajax({
                url: "<?= base_url("komplain-smm") ?>",
                type: "POST",
                data: {
                    id_pesanan: id_pesanan,
                    komplain_teks: komplain_teks,
                    "<?= $this->security->get_csrf_token_name(); ?>": token_data
                },
                success: function(response) {
                    refresh_token_csrf();
                    $("#mod_komplain").modal("hide");
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Komplain Berhasil Dikirim",
                        icon: "success",
                        showCancelButton: false,
                        confirmButtonText: "OK",
                    }).then(function(result) {
                        if (result.value) {
                            location.reload();
                        }
                    });
                },
                error: function(xhr, status, error) {
                    $("#mod_komplain").modal("hide");
                    refresh_token_csrf();
                    Swal.fire({
                        title: "Gagal!",
                        text: "Komplain Gagal Dikirim",
                        icon: "error",
                        showCancelButton: false,
                        confirmButtonText: "OK",
                    });
                }
            });
        });
    </script>
<?php }
?>