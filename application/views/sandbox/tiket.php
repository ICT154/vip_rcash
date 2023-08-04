<!DOCTYPE html>
<html>

<head>
    <title>TIKET OFFBOYS</title>
    <style>
        /* Mengatur lebar dan tinggi elemen div dalam satuan cm */
        .kotak {
            /* width: 210mm; */
            /* height: 25mm; */
            width: 23cm;
            height: 2cm;
            background-color: #f0f0f0;
            /* Untuk mengubah satuan ukuran menjadi cm */
            /* 1cm ≈ 37.8px (pada kebanyakan tampilan monitor) */
            /* Sesuaikan dengan pengaturan layar perangkat Anda jika perlu */
            font-size: 37.8px;
            border: 1px solid #333;
        }
    </style>
</head>

<body>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script> -->
    <!-- <script src="<?= base_url("assets/plugin/qrcodejsv_2/") ?>dist/jquery-qrcode.js"></script> -->
    <script src="<?= base_url("assets/plugin/qrcodejs/qrcode.min.js") ?>"></script>

    <?php
    for ($i = 0; $i < 15; $i++) { ?>
        <img src="<?= base_url("assets/img/tiket_v4.svg") ?>" alt="" class="kotak" style='margin-top: 40px;'>
        <div id="qrcode<?= $i ?>" style='margin-left:340px; margin-top: -77px;'></div>
        <script type="text/javascript">
            // $("#qrcode<?= $i ?>").qrcode({
            //     mode: 1,
            //     label: 'OFFENDER BOYS 12',
            //     fontname: 'sans',
            //     fontcolor: '#000'
            //     // 0: normal
            //     // 3: image strip
            //     // 4: image box
            //     // mode: 4,
            //     // image: "<?= base_url("assets/img/ofb12.png") ?>"

            // });
            var qrcode = new QRCode("qrcode<?= $i ?>", {
                text: "https://rcash.me/r/R<?= $i . "" . rand(999, 9999) . "" ?>",
                width: 70,
                height: 70,
                colorDark: "#000000",
                colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H
            });
        </script>
    <?php }
    ?>
    <!-- Elemen div dengan class "kotak" akan menjadi kotak berukuran 210cm x 25cm -->
    <!-- <div class="kotak"> -->
    <!-- <div id="qrcode"></div> -->

    <!-- </div> -->
</body>

</html>