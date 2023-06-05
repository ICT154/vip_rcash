<script>
    $(document).ready(function() {
        var tabel = $('#table-riwayat-deposit').DataTable({
            "processing": true,
            "responsive": true,
            "serverSide": true,
            "ordering": true,
            "fixedHeader": true,
            // "fixedColumns": true,
            // "leftColumns": 2,
            "order": [
                [1, 'asc']
            ],
            "ajax": {
                "url": "<?= base_url('riwayat-deposit/table'); ?>",
                "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [
                [5, 10, 50],
                [5, 10, 50]
            ],
            "columns": [{
                    "data": 'deposit_id',
                    "sortable": false,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    "data": "tanggal_deposit",
                    "render": function(data, type, row, meta) {
                        const date = new Date(data);
                        const options = {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric',
                            hour: 'numeric',
                            minute: 'numeric',
                            second: 'numeric',
                            timeZone: 'Asia/Jakarta'
                        };
                        const formatter = new Intl.DateTimeFormat('id-ID', options);
                        return '<td class="tanggal-deposit">' + formatter.format(date) + '</td>';
                    }
                },
                {
                    "data": "deposit_id"
                },
                {
                    "data": "provider"
                },
                {
                    "data": "jumlah_didapat",
                    "render": function(data, type, row, meta) {
                        const amount = parseInt(data);
                        return "Rp. " + amount.toLocaleString('id-ID');
                    }
                },
                {
                    "data": "status",
                    "render": function(data, type, row, meta) {
                        let statusText = "";
                        let badgeClass = "";
                        switch (data) {
                            case "Pending":
                                statusText = "Pending";
                                badgeClass = "badge-warning";
                                break;
                            case "Cancel":
                                statusText = "Cancel";
                                badgeClass = "badge-danger";
                                break;
                            case "Success":
                                statusText = "Success";
                                badgeClass = "badge-success";
                                break;
                            case "Error":
                                statusText = "Error";
                                badgeClass = "badge-danger";
                                break;
                            default:
                                statusText = "Unknown";
                                badgeClass = "badge-secondary";
                                break;
                        }
                        return "<span class='badge " + badgeClass + "'>" + statusText + "</span>";
                    }
                },
            ],
        });

        tabel.on('draw.dt', function() {
            tabel.cells('.tanggal-deposit').every(function() {
                var cell = this;
                if (cell.data()) {
                    var date = new Date(cell.data());
                    var formattedDate = formatDate(date);
                    $(cell.node()).html(formattedDate);
                }
            });
        });

        function formatDate(date) {
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var seconds = date.getSeconds();

            var formattedDate = day + ' ' + getMonthName(month) + ' ' + year + ' pukul ' + formatTime(hours, minutes, seconds);
            return formattedDate;
        }


        function getMonthName(month) {
            var monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            return monthNames[month - 1];
        }


        function formatTime(hours, minutes, seconds) {
            var formattedTime = ('0' + hours).slice(-2) + '.' + ('0' + minutes).slice(-2) + '.' + ('0' + seconds).slice(-2);
            return formattedTime;
        }

        $('#search-tanggal-deposit').on('keyup', function() {
            tabel.columns(1).search(this.value).draw();
        });
    });
</script>