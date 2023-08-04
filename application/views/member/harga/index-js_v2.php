<script>
    function refresh_token_csrf() {
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

    function load_kategori_fav(fav) {
        refresh_token_csrf()
            .then((token) => {
                $("#load_kategori").show();
                return $.ajax({
                    url: "<?= base_url("load_kategori") ?>",
                    type: "post",
                    data: {
                        fav: fav,
                        "<?= $this->security->get_csrf_token_name(); ?>": token
                    }
                });
            })
            .then((data) => {
                $("#load_kategori").hide();
                $(".kategori_show").html(data);
            })
            .catch((error) => {
                $("#load_kategori").hide();
                $(".kategori_show").html("<div class='text-center mt-3 mb-3 text-danger'>Terjadi kesalahan.<i class='far fa-times-circle'></i></div>");
                console.error("Error loading kategori:", error);
            });
    }

    $(document).ready(function() {
        load_kategori();

        $(function() {
            $('.select2').select2();
        });

        $("#tipe_harga").change(function() {
            refresh_token_csrf()
                .then((token) => {
                    var selectedOption = $(this).val();
                    $("#table-show-here").html("<tr><td colspan='5' class='text-center'>Loading.</td><td class='text-center text-danger'><i class='far fa-times-circle'></i></td> </tr>");

                    return $.ajax({
                        url: "<?= base_url("get-prepaid") ?>",
                        type: "post",
                        data: {
                            selected_option: selectedOption,
                            selected_type: "<?= $this->GZL->enkrip("prepaid") ?>",
                            "<?= $this->security->get_csrf_token_name(); ?>": token
                        }
                    });
                })
                .then((data) => {
                    $("#pricelist2").html(data);
                })
                .catch((error) => {
                    $("#pricelist2").html("<tr><td colspan='5' class='text-center'>Terjadi kesalahan.</td><td class='text-center text-danger'><i class='far fa-times-circle'></i></td> </tr>");
                    console.error("Error getting prepaid data:", error);
                });
        });

        function load_kategori() {
            refresh_token_csrf()
                .then((token) => {
                    $("#load_kategori").show();
                    return $.ajax({
                        url: "<?= base_url("load_kategori") ?>",
                        type: "post",
                        data: {
                            "<?= $this->security->get_csrf_token_name(); ?>": token
                        }
                    });
                })
                .then((data) => {
                    $("#load_kategori").hide();
                    $(".kategori_show").html(data);
                })
                .catch((error) => {
                    $("#load_kategori").hide();
                    $(".kategori_show").html("<div class='text-center mt-3 mb-3 text-danger'>Terjadi kesalahan.<i class='far fa-times-circle'></i></div>");
                    console.error("Error loading kategori:", error);
                });
        }
    });
</script>