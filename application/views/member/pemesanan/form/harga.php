<div class="form-group row">
    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">LAYANAN </label>
    <div class="col-12 col-lg-6">
        <select name="layanan" id="layanan" class="form-control select2">
            <option value="">Pilih Layanan</option>
            <?php foreach ($harga as $key) { ?>
                <option value="<?= $this->GZL->enkrip($key->product_id) ?>"><?= $key->product_name ?> -- Rp. <?= $this->GZL->number_format($key->basic_price, 0, ",", ".") ?> / K</option>
            <?php } ?>
        </select>
    </div>
</div>

<div id="detail_form"></div>

<script>
    $(document).ready(function() {
        $("#layanan").change(function() {
            $("#detail_form").fadeOut();

            refresh_token_csrf()
                .then((token) => {
                    var selectedOption = $(this).val();
                    return $.ajax({
                        url: "<?= base_url("get-layanan-detail") ?>",
                        type: "post",
                        data: {
                            selected_option: selectedOption,
                            "<?= $this->security->get_csrf_token_name(); ?>": token
                        }
                    });
                })
                .then((data) => {
                    $("#detail_form").fadeIn();
                    $("#detail_form").html(data);
                })
                .catch((error) => {
                    // $("#detail_form").hide();
                    $("#detail_form").html("<div class='text-center mt-3 mb-3 text-danger'>Terjadi kesalahan.<i class='far fa-times-circle'></i></div>");
                    console.error("Error getting layanan detail:", error);
                });
        });
    });
</script>