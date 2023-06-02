<div class="form-group row">
    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">LAYANAN </label>
    <div class="col-12 col-lg-6">
        <select name="layanan" id="layanan" class="form-control select2">
            <option value="">Pilih Layanan</option>
            <?php foreach ($harga as $key) { ?>
                <option value="<?= $this->GZL->enkrip($key->id) ?>"><?= $key->name ?></option>
            <?php } ?>
        </select>
    </div>
</div>

<div id="detail_form"></div>

<script>
    $(document).ready(function() {
        $("#layanan").change(function() {
            $("#detail_form").fadeOut();
            var selectedOption = $(this).val();
            $.ajax({
                url: "<?= base_url("get-layanan-detail") ?>",
                type: "post",
                data: {
                    selected_option: selectedOption,
                },
                success: function(data) {
                    $("#detail_form").fadeIn();
                    $("#detail_form").html(data);
                },
                error: function() {
                    // $("#detail_form").hide();
                    $("#detail_form").html("<div class='text-center mt-3 mb-3 text-danger'>Terjadi kesalahan.<i class='far fa-times-circle'></i></div>");
                }
            });
        });
    });
</script>