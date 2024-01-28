<div id="PriceHistory">
    <h3>Riwayat Perubahan Harga ( 20 Perubahan Terakhir )</h3>
    <canvas style="width:100%; height:300px;"></canvas>
</div>


<div class="table-responsive mt-3">
    <table class="table table-bordered table-hover table-striped">
        <tbody>
            <tr>
                <td class="alert alert-warning" width="25%"><strong>ID</strong></td>
                <td><?= $detail['product_id'] ?></td>
            </tr>
            <tr>
                <td class="alert alert-warning"><strong>Kategori</strong></td>
                <td><?= $detail['category'] ?></td>
            </tr>
            <tr>
                <td class="alert alert-warning"><strong>Layanan</strong></td>
                <td><?= $detail['product_name'] ?></td>
            </tr>
            <tr>
                <td class="alert alert-warning"><strong>Description</strong></td>
                <td><?= $detail['note'] ?></td>
            </tr>

            <tr>
                <td class="alert alert-warning"><strong>Min</strong></td>
                <td><?= $detail['min_quantity'] ?></td>
            </tr>

            <tr>
                <td class="alert alert-warning"><strong>Max</strong></td>
                <td><?= $detail['max_quantity'] ?></td>
            </tr>
            <tr>
                <td class="alert alert-warning"><strong>AVERAGE TIME <span class="ml-1 mr-1 fa fa-exclamation-circle" data-toggle="tooltip" data-placement="top" title="Waktu rata-rata didasarkan pada 10 pesanan terakhir."></span></strong></td>
                <td><?= $detail['average_time'] ?></td>
            </tr>
            <tr>
                <td class="alert alert-warning"><strong>Last Update Harga</strong></td>
                <td><?= $this->GZL->format_tanggal($detail['date_registered']) ?></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    /* area chart */
    var PriceHistory = function() {
        var config = {
            type: 'line',
            data: {
                labels: [
                    <?php
                    foreach ($price_history as $key) {
                        echo "'" . $this->GZL->format_tanggal($key->change_date) . "',";
                    }
                    ?>
                ],
                datasets: [{
                        label: "Basic Price",
                        // backgroundColor: 'rgba(136,106,181, 0.2)',
                        borderColor: color.danger._500,
                        pointBackgroundColor: color.danger._700,
                        // pointBorderColor: 'rgba(0, 0, 0, 0)',
                        pointBorderWidth: 1,
                        borderWidth: 1,
                        pointRadius: 3,
                        pointHoverRadius: 4,
                        data: [
                            <?php
                            foreach ($price_history as $key) {
                                echo "" . $key->basic_price . ",";
                            }
                            ?>
                        ],
                        fill: true
                    },
                    {
                        label: "Premium Price",
                        // backgroundColor: 'rgba(29,201,183, 0.2)',
                        borderColor: color.warning._500,
                        pointBackgroundColor: color.warning._700,
                        // pointBorderColor: 'rgba(0, 0, 0, 0)',
                        pointBorderWidth: 1,
                        borderWidth: 1,
                        pointRadius: 3,
                        pointHoverRadius: 4,
                        data: [<?php
                                foreach ($price_history as $key) {
                                    echo "" . $key->premium_price . ",";
                                }
                                ?>],
                        fill: true
                    }, {
                        label: "Special Price",
                        // backgroundColor: 'rgba(29,201,183, 0.2)',
                        borderColor: color.success._500,
                        pointBackgroundColor: color.success._700,
                        // pointBorderColor: 'rgba(0, 0, 0, 0)',
                        pointBorderWidth: 1,
                        borderWidth: 1,
                        pointRadius: 3,
                        pointHoverRadius: 4,
                        data: [<?php
                                foreach ($price_history as $key) {
                                    echo "" . $key->special_price . ",";
                                }
                                ?>],
                        fill: true
                    }
                ]
            },
            options: {
                responsive: true,
                title: {
                    display: false,
                    text: 'Price History'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                            labelString: '10 Perubahan Harga Terakhir'
                        },
                        gridLines: {
                            display: true,
                            color: "#f2f2f2"
                        },
                        ticks: {
                            beginAtZero: true,
                            fontSize: 11
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Profit margin (approx)'
                        },
                        gridLines: {
                            display: true,
                            color: "#f2f2f2"
                        },
                        ticks: {
                            beginAtZero: true,
                            fontSize: 11
                        }
                    }]
                }
            }
        };
        new Chart($("#PriceHistory > canvas").get(0).getContext("2d"), config);
    };

    $(document).ready(function() {
        PriceHistory();
    });
</script>