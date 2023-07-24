<script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.1.0/autoNumeric.min.js" integrity="sha512-U0/lvRgEOjWpS5e0JqXK6psnAToLecl7pR+c7EEnndsVkWq3qGdqIGQGN2qxSjrRnCyBJhoaktKXTVceVG2fTw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  new AutoNumeric('#nominal_deposit', {
    decimalPlaces: 0,
    digitGroupSeparator: '.',
    decimalCharacter: ',',
    minimumValue: '0',
    maximumValue: '9999999999'
  });


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

    $("#tipe_deposit").change(function() {
      var tipe_deposit = $(this).val();
      var metode_pembayaran = $("#metode_pembayaran").val();
      if (tipe_deposit == '') {
        Swal.fire({
          title: "Gagal!",
          text: "Silahkan pilih tipe deposit terlebih dahulu !",
          icon: "error",
          showCancelButton: false,
          confirmButtonText: "OK",
        });
        return false;
      }

      if (metode_pembayaran == '') {
        Swal.fire({
          title: "Gagal!",
          text: "Silahkan pilih metode pembayaran terlebih dahulu !",
          icon: "error",
          showCancelButton: false,
          confirmButtonText: "OK",
        });
        return false;
      }
      $.ajax({
        url: "<?= base_url("refresh-csrf-token") ?>",
        type: "GET",
        dataType: "json",
        success: function(data) {
          $.ajax({
            url: "<?= base_url("get-deposit-bonus") ?>",
            type: "POST",
            data: {
              tipe_deposit: tipe_deposit,
              metode_pembayaran: metode_pembayaran,
              <?php echo $this->security->get_csrf_token_name(); ?>: data.token
            },
            success: function(data) {
              $("#bonus_deposit").val(data);
              new AutoNumeric('#bonus_deposit', {
                decimalPlaces: 0,
                digitGroupSeparator: '.',
                decimalCharacter: ',',
                minimumValue: '0',
                maximumValue: '9999999999'
              });
              refresh_token_csrf();
            },
            error: function(xhr, ajaxOptions, thrownError) {
              Swal.fire({
                title: "Gagal!",
                text: "Terjadi kesalahan saat mengambil rate deposit !",
                icon: "error",
                showCancelButton: false,
                confirmButtonText: "OK",
              });
            }
          });
        }
      });
    });



    $("#metode_pembayaran").change(function() {
      var metode_pembayaran = $(this).val();
      if (metode_pembayaran == '') {
        Swal.fire({
          title: "Gagal!",
          text: "Silahkan pilih metode pembayaran terlebih dahulu !",
          icon: "error",
          showCancelButton: false,
          confirmButtonText: "OK",
        });
        return false;
      }
      $.ajax({
        url: "<?= base_url("refresh-csrf-token") ?>",
        type: "GET",
        dataType: "json",
        success: function(data) {
          $.ajax({
            url: "<?= base_url("get-deposit-rate") ?>",
            type: "POST",
            data: {
              metode_pembayaran: metode_pembayaran,
              <?php echo $this->security->get_csrf_token_name(); ?>: data.token
            },
            success: function(data) {
              $("#minimal_deposit").val(data);
              new AutoNumeric('#minimal_deposit', {
                decimalPlaces: 0,
                digitGroupSeparator: '.',
                decimalCharacter: ',',
                minimumValue: '0',
                maximumValue: '9999999999'
              });
              refresh_token_csrf();
            },
            error: function(xhr, ajaxOptions, thrownError) {
              Swal.fire({
                title: "Gagal!",
                text: "Terjadi kesalahan saat mengambil rate deposit !",
                icon: "error",
                showCancelButton: false,
                confirmButtonText: "OK",
              });
            }
          });
        }
      });
    });

    $("#nominal_deposit").keyup(function() {
      var metode_pembayaran = $("#metode_pembayaran").val();
      var tipe_deposit = $("#tipe_deposit").val();
      if (metode_pembayaran == '') {
        Swal.fire({
          title: "Gagal!",
          text: "Silahkan pilih metode pembayaran terlebih dahulu !",
          icon: "error",
          showCancelButton: false,
          confirmButtonText: "OK",
        });
        return false;
      }

      if (tipe_deposit == '') {
        Swal.fire({
          title: "Gagal!",
          text: "Silahkan pilih tipe deposit terlebih dahulu !",
          icon: "error",
          showCancelButton: false,
          confirmButtonText: "OK",
        });
        return false;
      }

      var x = $(this).val();
      $.ajax({
        url: "<?= base_url("refresh-csrf-token") ?>",
        type: "GET",
        dataType: "json",
        success: function(data) {
          $.ajax({
            url: "<?= base_url("hit-depo-bonus-rate") ?>",
            type: "POST",
            data: {
              nominal: x,
              mmetode_pembayaran: $("#metode_pembayaran").val(),
              tipe_deposit: $("#tipe_deposit").val(),
              <?php echo $this->security->get_csrf_token_name(); ?>: data.token
            },
            success: function(data) {
              $("#saldo_diterima").val(data);
              new AutoNumeric('#saldo_diterima', {
                decimalPlaces: 0,
                digitGroupSeparator: '.',
                decimalCharacter: ',',
                minimumValue: '0',
                maximumValue: '9999999999'
              });
              refresh_token_csrf();
            },
            error: function(xhr, ajaxOptions, thrownError) {
              Swal.fire({
                title: "Gagal!",
                text: "Terjadi kesalahan saat menghitung rate deposit !",
                icon: "error",
                showCancelButton: false,
                confirmButtonText: "OK",
              });
            }
          });
        }
      });
    });
  });
</script>

<!-- <script src="<?= base_url("assets/") ?>js/datagrid/datatables/datatables.bundle.js"></script> -->
<input type="hidden" id="indikator_form" value="0">