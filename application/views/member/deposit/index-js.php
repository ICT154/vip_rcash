<script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.1.0/autoNumeric.min.js" integrity="sha512-U0/lvRgEOjWpS5e0JqXK6psnAToLecl7pR+c7EEnndsVkWq3qGdqIGQGN2qxSjrRnCyBJhoaktKXTVceVG2fTw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  new AutoNumeric('#nominal_deposit', {
    decimalPlaces: 0,
    digitGroupSeparator: '.',
    decimalCharacter: ',',
    minimumValue: '0',
    maximumValue: '9999999999'
  });
</script>

<!-- <script src="<?= base_url("assets/") ?>js/datagrid/datatables/datatables.bundle.js"></script> -->
<input type="hidden" id="indikator_form" value="0">