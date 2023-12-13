<script>
    function copyApiKey() {
        var apiKeyInput = document.getElementById("api_key");

        // Pilih teks di dalam input
        apiKeyInput.select();
        apiKeyInput.setSelectionRange(0, 99999); // Untuk mendukung peramban yang berbeda

        // Salin teks ke clipboard
        document.execCommand("copy");

        // Deselect input untuk menghindari tampilan yang tidak diinginkan
        apiKeyInput.setSelectionRange(0, 0);

        // Tampilkan pesan atau lakukan tindakan lain jika perlu
        Swal.fire({
            icon: 'success',
            title: 'API Key berhasil disalin!',
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>