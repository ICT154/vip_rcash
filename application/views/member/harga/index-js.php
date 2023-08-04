<input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
<script>
    function refresh_token_csrf() {
        $.ajax({
            url: "<?= base_url("refresh-csrf-token") ?>",
            type: "GET",
            dataType: "json",
            success: function(data) {
                return data.token;
                // $("#" + "<?php echo $this->security->get_csrf_token_name(); ?>").val(data.token);
            }
        });
    }
    $(document).ready(function() {
        $(function() {
            $('.select2').select2();
        });

        $("#provpulsa").change(function() {
            refresh_token_csrf();
            var toket = $("#<?php echo $this->security->get_csrf_token_name(); ?>").val();
            var selectedOption = $(this).val();
            $("#pricelist2").html("<tr><td colspan='5' class='text-center'>Loading.</td><td class='text-center text-danger'><i class='far fa-times-circle'></i></td> </tr>");
            $.ajax({
                url: "<?= base_url("get-prepaid") ?>",
                type: "post",
                data: {
                    selected_option: selectedOption,
                    selected_type: "<?= $this->GZL->enkrip("prepaid") ?>",
                    "<?= $this->security->get_csrf_token_name(); ?>": toket
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
            refresh_token_csrf();
            var toket = $("#<?php echo $this->security->get_csrf_token_name(); ?>").val();
            $("#pricelist3").html("<tr><td colspan='4' class='text-center'>Loading.</td><td class='text-center text-danger'><i class='far fa-times-circle'></i></td> </tr>");

            $.ajax({
                url: "<?= base_url("get-prepaid") ?>",
                type: "post",
                data: {
                    selected_option: selectedOption,
                    selected_type: "<?= $this->GZL->enkrip("game") ?>",
                    "<?= $this->security->get_csrf_token_name(); ?>": toket
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
            refresh_token_csrf();
            var toket = $("#<?php echo $this->security->get_csrf_token_name(); ?>").val();
            $("#pricelist3").html("<tr><td colspan='5' class='text-center'>Loading.</td><td class='text-center text-danger'><i class='far fa-times-circle'></i></td> </tr>");

            $.ajax({
                url: "<?= base_url("get-prepaid") ?>",
                type: "post",
                data: {
                    selected_option: selectedOption,
                    selected_type: "<?= $this->GZL->enkrip("sosmed") ?>",
                    "<?= $this->security->get_csrf_token_name(); ?>": toket
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