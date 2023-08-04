<script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.1.0/autoNumeric.min.js" integrity="sha512-U0/lvRgEOjWpS5e0JqXK6psnAToLecl7pR+c7EEnndsVkWq3qGdqIGQGN2qxSjrRnCyBJhoaktKXTVceVG2fTw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(function() {
        $('.select2').select2();
    });

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

    $(document).ready(function() {
        $("#kategori_produk").change(function() {
            $("#layanan_show_here").fadeOut();

            refresh_token_csrf()
                .then((token) => {
                    var selectedOption = $(this).val();
                    return $.ajax({
                        url: "<?= base_url("get-layanan") ?>",
                        type: "post",
                        data: {
                            selected_option: selectedOption,
                            "<?= $this->security->get_csrf_token_name(); ?>": token
                        }
                    });
                })
                .then((data) => {
                    $("#layanan_show_here").fadeIn();
                    $("#layanan_show_here").html(data);
                })
                .catch((error) => {
                    $("#load_table").hide();
                    $("#layanan_show_here").html("<div class='text-center mt-3 mb-3 text-danger'>Terjadi kesalahan.<i class='far fa-times-circle'></i></div>");
                    console.error("Error getting layanan:", error);
                });
        });
    });
</script>