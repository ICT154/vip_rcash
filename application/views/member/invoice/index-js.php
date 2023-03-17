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
                        id: "<?= $this->GZL->enkrip($data_depo['kode_deposit']); ?>"
                    },
                    success: function(response) {
                        location.reload();
                    }
                });
            }
        });
    });
</script>