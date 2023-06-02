<script>
    $(function() {
        $('.select2').select2();
    });

    $(document).ready(function() {
        $("#kategori_produk").change(function() {
            $("#layanan_show_here").fadeOut();
            var selectedOption = $(this).val();
            $.ajax({
                url: "<?= base_url("get-layanan") ?>",
                type: "post",
                data: {
                    selected_option: selectedOption,
                },
                success: function(data) {
                    $("#layanan_show_here").fadeIn();
                    $("#layanan_show_here").html(data);
                },
                error: function() {
                    $("#load_table").hide();
                    $("#layanan_show_here").html("<div class='text-center mt-3 mb-3 text-danger'>Terjadi kesalahan.<i class='far fa-times-circle'></i></div>");
                }
            });
        });
    });
</script>