<?php $table_name = "table-harga" . rand() ?>
<div class="container">
    <div class="table-responsive mt-3 mb-3">
        <table class="table table-bordered table-hover table-striped" id="<?= $table_name ?>">
            <thead class="bg-warning">
                <tr>
                    <!-- <th class="">No</th> -->
                    <th class="">Nama</th>
                    <th class="">Harga</th>
                    <th class="">Min Pesan</th>
                    <th class="">Max Pesan</th>
                    <th class="">Keterangan</th>
                    <th class="">Waktu Proses</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($harga as $key) {
                ?>
                    <tr>
                        <!-- <td class=""><?= $no++ ?></td> -->
                        <td class=""><?= $key->name ?></td>
                        <td class=""><?= $key->price_sell ?></td>
                        <td class=""><?= $this->GZL->number_format($key->min, 0, "", ".") ?></td>
                        <td class=""><?= $this->GZL->number_format($key->max, 0, "", ".") ?></td>
                        <td class=""><?= $key->description ?></td>
                        <td class="">
                            <?= $key->average_time ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    var tabel = null;
    $(document).ready(function() {
        tabel = $('#<?= $table_name ?>').DataTable({
            "order": [
                [1, "asc"]
            ],
            "orderData": [1, 0],
            "columnDefs": [{
                "targets": 1,
                "render": function(data, type, row) {
                    var price = parseFloat(data.replace(/\./g, '').replace(',', '.')).toFixed(2);
                    return 'Rp. ' + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                }
            }],
            "scrollX": true
        });
    });
</script>