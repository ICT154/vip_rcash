<script>
    function load_kategori_fav(fav) {
        $("#load_kategori").show();
        $.ajax({
            url: "<?= base_url("load_kategori") ?>",
            type: "post",
            data: {
                fav: fav
            },
            success: function(data) {
                $("#load_kategori").hide();
                $(".kategori_show").html(data);
            },
            error: function() {
                $("#load_kategori").hide();
                $(".kategori_show").html("<div class='text-center mt-3 mb-3 text-danger'>Terjadi kesalahan.<i class='far fa-times-circle'></i></div>");
            }
        });
    }
    $(document).ready(function() {
        load_kategori();
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




        function load_kategori() {
            $("#load_kategori").show();
            $.ajax({
                url: "<?= base_url("load_kategori") ?>",
                type: "post",
                success: function(data) {
                    $("#load_kategori").hide();
                    $(".kategori_show").html(data);
                },
                error: function() {
                    $("#load_kategori").hide();
                    $(".kategori_show").html("<div class='text-center mt-3 mb-3 text-danger'>Terjadi kesalahan.<i class='far fa-times-circle'></i></div>");
                }
            });
        }
    });
</script>