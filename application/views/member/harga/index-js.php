<script>
    $(document).ready(function() {
        $(function() {
            $('.select2').select2();
        });

        $("#provpulsa").change(function() {
            var selectedOption = $(this).val();
            $("#pricelist2").html("<tr><td colspan='5' class='text-center'>Loading.</td><td class='text-center text-danger'><i class='far fa-times-circle'></i></td> </tr>");

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
        $("#categorygames").change(function() {
            var selectedOption = $(this).val();
            $("#pricelist3").html("<tr><td colspan='4' class='text-center'>Loading.</td><td class='text-center text-danger'><i class='far fa-times-circle'></i></td> </tr>");

            $.ajax({
                url: "<?= base_url("get-prepaid") ?>",
                type: "post",
                data: {
                    selected_option: selectedOption,
                    selected_type: "<?= $this->GZL->enkrip("game") ?>"
                },
                success: function(data) {
                    $("#pricelist3").html(data);
                },
                error: function() {
                    $("#pricelist3").html("<tr><td colspan='5' class='text-center'>Terjadi kesalahan.</td><td class='text-center text-danger'><i class='far fa-times-circle'></i></td> </tr>");
                    // $("#categorypulsa").html("<option value=''>Terjadi kesalahan</option>"); // Menampilkan pesan error
                }
            });
        });

        $("#categorysosmed").change(function() {
            var selectedOption = $(this).val();
            $("#pricelist3").html("<tr><td colspan='5' class='text-center'>Loading.</td><td class='text-center text-danger'><i class='far fa-times-circle'></i></td> </tr>");

            $.ajax({
                url: "<?= base_url("get-prepaid") ?>",
                type: "post",
                data: {
                    selected_option: selectedOption,
                    selected_type: "<?= $this->GZL->enkrip("sosmed") ?>"
                },
                success: function(data) {
                    $("#pricelist1").html(data);
                },
                error: function() {
                    $("#pricelist1").html("<tr><td colspan='5' class='text-center'>Terjadi kesalahan.</td><td class='text-center text-danger'><i class='far fa-times-circle'></i></td> </tr>");
                    // $("#categorypulsa").html("<option value=''>Terjadi kesalahan</option>"); // Menampilkan pesan error
                }
            });
        });
    });
</script>