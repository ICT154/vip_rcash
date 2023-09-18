<link href="<?= base_url("assets/plugin/summer_note/") ?>summernote-bs4.css" rel="stylesheet">
<script src="<?= base_url("assets/plugin/summer_note/") ?>summernote-bs4.js"></script>
<script>
    $('#pesan_tiket').summernote({});

    $(document).ready(function() {
        var dt = $('#table-data-tiket').DataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ],
            "responsive": true,
            // Processing indicator
            "processing": true,
            // DataTables server-side processing mode
            "serverSide": true,
            // Initial no order.
            "order": [],
            // Load data from an Ajax source
            "ajax": {
                "url": "<?php echo base_url("data-tiket/tabel") ?>",
                "type": "POST",
                "data": {}
            },
            //Set column definition initialisation properties
            "columnDefs": [{
                "targets": [0],
                "orderable": false
            }],
        });

    });
</script>