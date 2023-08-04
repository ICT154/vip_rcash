<div class="container">
    <div class="form-group row">
        <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Kategori</label>
        <div class="col-12 col-lg-6 ">
            <select name="kategori_produk" id="kategori_produk" class="form-control select2">
                <option value="">Pilih Kategori</option>
                <?php foreach ($kategori as $key) { ?>
                    <option value="<?= $this->GZL->enkrip($key->category) ?>"><?= $key->category ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<div class="load_table text-center mb-3 mt-3" id="load_table" style="display:none;">
    <div class="spinner-border text-success" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<div class="table_daftar_harga">

</div>

<script>
    $(function() {
        $('.select2').select2();
    });
    $(document).ready(function() {
        $("#kategori_produk").change(function() {
            refresh_token_csrf()
                .then((token) => {
                    var selectedOption = $(this).val();
                    $("#load_table").show();

                    return $.ajax({
                        url: "<?= base_url("get-harga") ?>",
                        type: "post",
                        data: {
                            selected_option: selectedOption,
                            "<?= $this->security->get_csrf_token_name(); ?>": token
                        }
                    });
                })
                .then((data) => {
                    $("#load_table").hide();
                    $(".table_daftar_harga").html(data);
                })
                .catch((error) => {
                    $("#load_table").hide();
                    $(".table_daftar_harga").html("<div class='text-center mt-3 mb-3 text-danger'>Terjadi kesalahan.<i class='far fa-times-circle'></i></div>");
                    console.error("Error getting harga:", error);
                });
        });
    });
</script>