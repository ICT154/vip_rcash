<script>
    var tabel = null;
    $(document).ready(function() {
        tabel = $('#table-riwayat-deposit').DataTable({
            "processing": true,
            // "responsive": true,
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
                    "data": 'kode_deposit',
                    "sortable": false,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    "data": "date_depo",
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
                        return formatter.format(date);
                    }
                },
                {
                    "data": "kode_deposit"
                },
                {
                    "data": "provider"
                },
                {
                    "data": "get_saldo",
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
    });
</script>