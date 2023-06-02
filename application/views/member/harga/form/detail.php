<div class="table-responsive">

    <table class="table table-bordered table-hover table-striped">
        <tbody>
            <tr>
                <td class="alert alert-warning" width="25%"><strong>ID</strong></td>
                <td><?= $detail['id'] ?></td>
            </tr>
            <tr>
                <td class="alert alert-warning"><strong>Kategori</strong></td>
                <td><?= $detail['category'] ?></td>
            </tr>
            <tr>
                <td class="alert alert-warning"><strong>Layanan</strong></td>
                <td><?= $detail['name'] ?></td>
            </tr>
            <tr>
                <td class="alert alert-warning"><strong>Description</strong></td>
                <td><?= $detail['description'] ?></td>
            </tr>

            <tr>
                <td class="alert alert-warning"><strong>Min</strong></td>
                <td><?= $detail['min'] ?></td>
            </tr>

            <tr>
                <td class="alert alert-warning"><strong>Max</strong></td>
                <td><?= $detail['max'] ?></td>
            </tr>
            <tr>
                <td class="alert alert-warning"><strong>AVERAGE TIME <span class="ml-1 mr-1 fa fa-exclamation-circle" data-toggle="tooltip" data-placement="top" title="Waktu rata-rata didasarkan pada 10 pesanan terakhir."></span></strong></td>
                <td><?= $detail['average_time'] ?></td>
            </tr>
            <tr>
                <td class="alert alert-warning"><strong>Last Update Harga</strong></td>
                <td><?= $detail['date_g'] ?></td>
            </tr>
        </tbody>
    </table>
</div>