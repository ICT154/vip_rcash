<input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
<script>
    function refresh_token_csrf() {
        $.ajax({
            url: "<?= base_url("refresh-csrf-token") ?>",
            type: "GET",
            dataType: "json",
            success: function(data) {
                $("#" + "<?php echo $this->security->get_csrf_token_name(); ?>").val(data.token);
            }
        });
    }
    $(document).ready(function() {
        refresh_token_csrf();
        var token_data = $("#<?php echo $this->security->get_csrf_token_name(); ?>").val();
        var dt = $('#table-monitoring-layanan').DataTable({
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
            // "order": [],
            // Load data from an Ajax source
            "ajax": {
                "url": "<?php echo base_url("monitoring-layanan/tabel") ?>",
                "type": "POST",
                "data": {
                    "<?= $this->security->get_csrf_token_name(); ?>": token_data
                },
                "aftersend": function() {
                    refresh_token_csrf();
                },
            },
            //Set column definition initialisation properties
            // "columnDefs": [{
            //     "targets": [0],
            //     "orderable": false
            // }],
        });

    });
</script>