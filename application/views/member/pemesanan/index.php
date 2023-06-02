<div class="alert alert-primary alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">
            <i class="fal fa-times"></i>
        </span>
    </button>
    <div class="d-flex flex-start w-100">
        <div class="mr-2 hidden-md-down">
            <span class="icon-stack icon-stack-lg">
                <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                <i class="fal fa-info icon-stack-1x opacity-100 color-white"></i>
            </span>
        </div>
        <div class="d-flex flex-fill">
            <div class="flex-fill">
                <p class="h6">Bagaimana Caranya Memesan ?</p>
                <p>
                <ul>
                    <li>Pilih salah satu Kategori.</li>
                    <li>Pilih salah satu Layanan yang ingin dipesan.</li>
                    <li>Masukkan Target pesanan sesuai ketentuan yang diberikan layanan tersebut.</li>
                    <li>Masukkan Jumlah Pesanan yang diinginkan.</li>
                    <li>Klik Submit untuk membuat pesanan baru</li>
                </ul>
                <ul><b>Ketentuan membuat pesanan baru:</b>
                    <li>Silahkan membuat pesanan sesuai langkah-langkah diatas.</li>
                    <li>Jika ingin membuat pesanan dengan
                        Target yang sama dengan pesanan yang sudah pernah dipesan sebelumnya, mohon menunggu sampai pesanan sebelumnya selesai diproses.
                        Jika terjadi kesalahan / mendapatkan pesan gagal yang kurang jelas, silahkan hubungi Admin untuk informasi lebih lanjut.</li>
                    <li>Jangan memasukkan orderan yang sama jika orderan sebelumnya belum selesai. </li>
                    <li>Jangan memasukkan orderan yang sama di panel lain jika orderan di RCASH belum selesai. </li>
                    <li>Jangan mengganti username atau menghapus link target saat sudah order. </li>
                    <li>Orderan yang sudah masuk tidak dapat di cancel / refund manual, seluruh proses orderan dikerjakan secara otomatis oleh server. </li>
                    <li>Jika Anda memasukkan orderan di RCASH berarti Anda sudah mengerti aturan RCASH dan jangan lupa baca menu F.A.Q serta Terms </li>
                    <ul>
                        <p></p>
                    </ul>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>


<div id="panel-1" class="panel">
    <div class="panel-hdr">
        <h2>
            Form <span class="fw-300"><i>Pemesanan Sosial Media</i></span>
        </h2>

    </div>
    <div class="panel-container show">
        <div class="panel-content">
            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-group row">
                    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">KATEGORI LAYANAN </label>
                    <div class="col-12 col-lg-6">
                        <select name="kategori_produk" id="kategori_produk" class="form-control select2">
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($kategori as $key) { ?>
                                <option value="<?= $this->GZL->enkrip($key->category) ?>"><?= $key->category ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div id="layanan_show_here">

                </div>

                <div class="form-group row mt-3">
                    <label class="col-form-label col-12 col-lg-3 form-label text-lg-right"></label>
                    <div class="col-12 col-lg-4">
                        <button onclick="form_tabel()" class="btn btn-danger" type="button">KEMBALI</button>
                        <button class="btn btn-success" type="submit">SIMPAN</button>
                    </div>
                </div>



            </form>
        </div>
    </div>
</div>