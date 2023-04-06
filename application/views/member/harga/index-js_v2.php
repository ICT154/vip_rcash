<script>
    $(document).ready(function() {
        $(function() {
            $('.select2').select2();
        });

        $("#tipe_harga").change(function() {
            var selectedOption = $(this).val();
            $("#table-show-here").html("<tr><td colspan='5' class='text-center'>Loading.</td><td class='text-center text-danger'><i class='far fa-times-circle'></i></td> </tr>");

            $.ajax({
                url: "<?= base_url("get-prepaid") ?>",
                type: "post",
                data: {
                    selected_option: selectedOption,
                    selected_type: "<?= $this->GZL->enkrip("prepaid") ?>"
                },
                success: function(data) {
                    $("#pricelist2").html(data);
                },
                error: function() {
                    $("#pricelist2").html("<tr><td colspan='5' class='text-center'>Terjadi kesalahan.</td><td class='text-center text-danger'><i class='far fa-times-circle'></i></td> </tr>");
                    // $("#categorypulsa").html("<option value=''>Terjadi kesalahan</option>"); // Menampilkan pesan error
                }
            });
        });
    });
</script>