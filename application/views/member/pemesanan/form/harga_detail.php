<?php

// echo "<pre>";
// print_r($harga);
// echo "</pre>";

?>
<div class="form-group row">
    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">HARGA/K </label>
    <div class="col-12 col-lg-2">
        <input type="text" class="form-control" name="harga" value="Rp. <?= $this->GZL->number_format($harga['basic_price'], 0, ",", ".") ?>" readonly>
    </div>
    <label class="col-form-label col-12 col-lg-1 form-label text-lg-right">MIN </label>
    <div class="col-12 col-lg-2">
        <input type="text" class="form-control" name="harga" value="<?= $this->GZL->number_format($harga['min_quantity'], 0, ",", ".") ?>" readonly>
    </div>
    <label class="col-form-label col-10 col-lg-1 form-label text-lg-right">MAX </label>
    <div class="col-12 col-lg-2">
        <input type="text" class="form-control" name="harga" value="<?= $this->GZL->number_format($harga['max_quantity'], 0, ",", ".") ?>" readonly>
    </div>
</div>


<div class="form-group row">
    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">KETERANGAN </label>
    <div class="col-12 col-lg-7">
        <textarea name="" id="" class="form-control" readonly><?= $harga['note'] ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">RATA RATA WAKTU PESANAN MASUK </label>
    <div class="col-12 col-lg-7">
        <textarea name="" id="" class="form-control" readonly><?= $harga['average_time'] ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">JUMLAH PESAN</label>
    <div class="col-12 col-lg-2">
        <input type="text" class="form-control" name="jumlah_pemesanan" id="jumlah_pemesanan<?= $harga['product_id'] ?>" required autocomplete="off">
    </div>

    <label class="col-form-label col-12 col-lg-2 form-label text-lg-right">TOTAL HARGA </label>
    <div class="col-12 col-lg-3">
        <input type="text" class="form-control" name="total_harga" id="total_harga" readonly autocomplete="off">
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">TARGET </label>
    <div class="col-12 col-lg-7">
        <input type="text" class="form-control" name="target" id="target" required autocomplete="off">
    </div>
</div>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.1.0/autoNumeric.min.js" integrity="sha512-U0/lvRgEOjWpS5e0JqXK6psnAToLecl7pR+c7EEnndsVkWq3qGdqIGQGN2qxSjrRnCyBJhoaktKXTVceVG2fTw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    new AutoNumeric('#jumlah_pemesanan', {
        decimalPlaces: 0,
        digitGroupSeparator: '.',
        decimalCharacter: ',',
        minimumValue: '<?= $harga['min_quantity'] ?>',
        maximumValue: '<?= $harga['max_quantity'] ?>'
    });
</script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.1.0/autoNumeric.min.js" integrity="sha512-U0/lvRgEOjWpS5e0JqXK6psnAToLecl7pR+c7EEnndsVkWq3qGdqIGQGN2qxSjrRnCyBJhoaktKXTVceVG2fTw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    new AutoNumeric('#jumlah_pemesanan<?= $harga['product_id'] ?>', {
        decimalPlaces: 0,
        digitGroupSeparator: '.',
        decimalCharacter: ',',
    });

    // function HitTotalPesanan(){
    //     var jumlahPesanan = 
    // }

    $(document).ready(function() {
        var jumlahPemesanan = $("#jumlah_pemesanan<?= $harga['product_id'] ?>");
        var hitTotalPesananUrl = "<?= base_url("hit-total-pesanan") ?>";
        var selectedOption = $("#layanan").val();
        jumlahPemesanan.keyup(function() {
            refresh_token_csrf()
                .then((token) => {
                    return $.ajax({
                        url: hitTotalPesananUrl,
                        type: "post",
                        data: {
                            selected_option: selectedOption,
                            total: jumlahPemesanan.val(),
                            "<?= $this->security->get_csrf_token_name(); ?>": token
                        }
                    });
                })
                .then((data) => {
                    refresh_token_crsf_link();
                    $("#total_harga").val(data);
                })
                .catch((error) => {
                    // $("#detail_form").hide();
                    $("#detail_form").html("<div class='text-center mt-3 mb-3 text-danger'>Terjadi kesalahan.<i class='far fa-times-circle'></i></div>");
                    // console.error("Error getting layanan detail:", error);
                });
        });
    });
</script>