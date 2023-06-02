<?php

// echo "<pre>";
// print_r($harga);
// echo "</pre>";

?>
<div class="form-group row">
    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">HARGA/K </label>
    <div class="col-12 col-lg-2">
        <input type="text" class="form-control" name="harga" value="Rp. <?= $this->GZL->number_format($harga['price_sell'], 0, ",", ".") ?>" readonly>
    </div>
    <label class="col-form-label col-12 col-lg-1 form-label text-lg-right">MIN </label>
    <div class="col-12 col-lg-2">
        <input type="text" class="form-control" name="harga" value="<?= $this->GZL->number_format($harga['min'], 0, ",", ".") ?>" readonly>
    </div>
    <label class="col-form-label col-10 col-lg-1 form-label text-lg-right">MAX </label>
    <div class="col-12 col-lg-2">
        <input type="text" class="form-control" name="harga" value="<?= $this->GZL->number_format($harga['max'], 0, ",", ".") ?>" readonly>
    </div>
</div>


<div class="form-group row">
    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">KETERANGAN </label>
    <div class="col-12 col-lg-7">
        <textarea name="" id="" class="form-control" readonly><?= $harga['description'] ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">RATA RATA WAKTU PESANAN MASUK </label>
    <div class="col-12 col-lg-7">
        <textarea name="" id="" class="form-control" readonly><?= $harga['average_time'] ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">TARGET </label>
    <div class="col-12 col-lg-7">
        <input type="text" class="form-control" name="target" id="target" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">TARGET </label>
    <div class="col-12 col-lg-7">
        <input type="text" class="form-control" name="target" id="target" required>
    </div>
</div>