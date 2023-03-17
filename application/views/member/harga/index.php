<div class="col-xl-12">
    <div id="panel-1" class="panel">
        <div class="panel-hdr">
            <h2>
                Daftar <span class="fw-300"><i>Harga</i></span>
            </h2>
            <div class="panel-toolbar">
                <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
            </div>
        </div>
        <div class="panel-container show">
            <div class="panel-content table-responsive">
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab-fill" data-toggle="tab" href="#pulsa" role="tab" aria-controls="pulsa" aria-selected="false">Pulsa &amp; PPOB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab-fill" data-toggle="tab" href="#games" role="tab" aria-controls="games" aria-selected="false">Games &amp; Streaming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab-fill" data-toggle="tab" href="#sosmed" role="tab" aria-controls="sosmed" aria-selected="false">Sosmed</a>
                    </li>
                </ul>

                <div class="tab-content mt-3">
                    <div class="tab-pane show active" id="pulsa">
                        <form role="form" method="POST">
                            <input type="hidden" id="subpulsa" name="subpulsa" value="false">
                            <div class="row">
                                <div class="form-group col-12 col-md-6" id="mpulsa1">
                                    <select class="form-control" id="provpulsa" name="provpulsa">
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-6" id="mpulsa2">
                                    <select class="form-control" id="categorypulsa" name="categorypulsa">
                                        <option value="0" selected="" disabled="">- Pilih Satu -</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-4 d-none" id="mpulsa3">
                                    <select class="form-control" id="subcategorypulsa" name="subcategorypulsa">
                                        <option value="0" selected="" disabled="">- Pilih Satu -</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped mb-0 ">
                                    <thead class="bg-warning-500">
                                        <tr>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">ID</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Produk</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle;width:30%">Catatan</th>
                                            <th class="text-center" colspan="2" style="vertical-align:middle">Harga</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Status</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Member</th>
                                            <th class="text-center">Reseller</th>
                                        </tr>
                                    </thead>
                                    <tbody id="pricelist2">
                                        <tr>
                                            <td colspan="5" class="text-center">Silakan pilih kategori.</td>
                                            <td class="text-center text-danger"><i class="far fa-times-circle"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="sosmed">
                        <form role="form" method="POST">
                            <div class="row">
                                <div class="form-group col-12">
                                    <select class="form-control" id="categorysosmed" name="categorysosmed">
                                        <option value="0" selected="" disabled="">- Pilih Satu -</option>
                                        <option value="Instagram Followers Asing EXCLUSIVE [ Refill / Garansi ]">Instagram Followers Asing EXCLUSIVE [ Refill / Garansi ]</option>
                                        <option value="Instagram Followers Asing S1 [ No Refill - Low Quality ]">Instagram Followers Asing S1 [ No Refill - Low Quality ]</option>
                                        <option value="Instagram Followers Asing S1 [ Refill / Garansi ]">Instagram Followers Asing S1 [ Refill / Garansi ]</option>
                                        <option value="Instagram Followers Asing S2 [ No Refill - Low Quality ]">Instagram Followers Asing S2 [ No Refill - Low Quality ]</option>
                                        <option value="Instagram Followers Asing S2 [ Refill / Garansi ]">Instagram Followers Asing S2 [ Refill / Garansi ]</option>
                                        <option value="Instagram Followers Indonesia">Instagram Followers Indonesia</option>
                                        <option value="Instagram Followers Indonesia [ Kota/Daerah ]">Instagram Followers Indonesia [ Kota/Daerah ]</option>
                                        <option value="Instagram Likes Asing S1">Instagram Likes Asing S1</option>
                                        <option value="Instagram Likes Asing S2">Instagram Likes Asing S2</option>
                                        <option value="Instagram Likes Indonesia">Instagram Likes Indonesia</option>
                                        <option value="Instagram Live Video">Instagram Live Video</option>
                                        <option value="Shopee / Bukalapak / Tokopedia">Shopee / Bukalapak / Tokopedia</option>
                                        <option value="Tiktok Comments">Tiktok Comments</option>
                                        <option value="TikTok Followers">TikTok Followers</option>
                                        <option value="TikTok Likes">TikTok Likes</option>
                                        <option value="TikTok Share">TikTok Share</option>
                                        <option value="TikTok Views">TikTok Views</option>
                                        <option value="TikTok Views Targeted Country">TikTok Views Targeted Country</option>
                                        <option value="Youtube Likes / Dislikes">Youtube Likes / Dislikes</option>
                                        <option value="Youtube Views">Youtube Views</option>
                                        <option value="Youtube Views Adwords">Youtube Views Adwords</option>
                                        <option value="Youtube Watch Time [ Jam Tayang ]">Youtube Watch Time [ Jam Tayang ]</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped zero-configuration mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">ID</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Produk</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Min</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Max</th>
                                            <th class="text-center" colspan="2" style="vertical-align:middle">Harga/1000</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Status</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Member</th>
                                            <th class="text-center">Reseller</th>
                                        </tr>
                                    </thead>
                                    <tbody id="pricelist1">
                                        <tr>
                                            <td colspan="6" class="text-center">Silakan pilih kategori.</td>
                                            <td class="text-center text-danger"><i class="far fa-times-circle"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="games">
                        <form role="form" method="POST">
                            <div class="row">
                                <div class="form-group col-12">
                                    <select class="form-control" id="categorygames" name="categorygames">
                                        <option value="0" selected="" disabled="">- Pilih Satu -</option>
                                        <option value="Amazon Prime Video">Amazon Prime Video</option>
                                        <option value="Arena of Valor">Arena of Valor</option>
                                        <option value="Be The King">Be The King</option>
                                        <option value="Canva Pro">Canva Pro</option>
                                        <option value="Chimeraland">Chimeraland</option>
                                        <option value="Disney Hotstar">Disney Hotstar</option>
                                        <option value="Dragon Raja">Dragon Raja</option>
                                        <option value="Free Fire">Free Fire</option>
                                        <option value="Free Fire Max">Free Fire Max</option>
                                        <option value="Genshin Impact">Genshin Impact</option>
                                        <option value="Honkai Impact 3">Honkai Impact 3</option>
                                        <option value="Hyper Front">Hyper Front</option>
                                        <option value="iQIYI Premium">iQIYI Premium</option>
                                        <option value="League of Legends">League of Legends</option>
                                        <option value="LifeAfter">LifeAfter</option>
                                        <option value="Light of Thel">Light of Thel</option>
                                        <option value="Lita">Lita</option>
                                        <option value="Lords Mobile">Lords Mobile</option>
                                        <option value="Marvel Snap">Marvel Snap</option>
                                        <option value="Marvel Super War">Marvel Super War</option>
                                        <option value="Mobile Legends A">Mobile Legends A</option>
                                        <option value="Mobile Legends B">Mobile Legends B</option>
                                        <option value="Mobile Legends Gift">Mobile Legends Gift</option>
                                        <option value="Mobile Legends Joki Rank">Mobile Legends Joki Rank</option>
                                        <option value="Mobile Legends Promo">Mobile Legends Promo</option>
                                        <option value="Mobile Legends Vilog">Mobile Legends Vilog</option>
                                        <option value="Omega Legends">Omega Legends</option>
                                        <option value="One Punch Man">One Punch Man</option>
                                        <option value="PUBGM GLOBAL">PUBGM GLOBAL</option>
                                        <option value="PUBGM INDO A">PUBGM INDO A</option>
                                        <option value="PUBGM INDO B">PUBGM INDO B</option>
                                        <option value="Ragnarok M Eternal Love">Ragnarok M Eternal Love</option>
                                        <option value="RagnaroK X Next Generation">RagnaroK X Next Generation</option>
                                        <option value="Sausage Man">Sausage Man</option>
                                        <option value="Spotify Premium">Spotify Premium</option>
                                        <option value="Steam Wallet Code">Steam Wallet Code</option>
                                        <option value="Super Sus">Super Sus</option>
                                        <option value="Tom and Jerry Chase">Tom and Jerry Chase</option>
                                        <option value="Tower of Fantasy">Tower of Fantasy</option>
                                        <option value="Valorant">Valorant</option>
                                        <option value="Vidio Premier">Vidio Premier</option>
                                        <option value="Viu Premium">Viu Premium</option>
                                        <option value="Voucher PB Zepetto">Voucher PB Zepetto</option>
                                        <option value="Voucher PSN">Voucher PSN</option>
                                        <option value="Voucher Razer Gold">Voucher Razer Gold</option>
                                        <option value="Voucher Roblox">Voucher Roblox</option>
                                        <option value="WeTV Premium">WeTV Premium</option>
                                        <option value="Youtube Premium">Youtube Premium</option>
                                        <option value="Zepeto">Zepeto</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped zero-configuration mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">ID</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Produk</th>
                                            <th class="text-center" colspan="3" style="vertical-align:middle">Harga</th>
                                            <th class="text-center" rowspan="2" style="vertical-align:middle">Status</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Member</th>
                                            <th class="text-center">Reseller</th>
                                            <th class="text-center">H2H</th>
                                        </tr>
                                    </thead>
                                    <tbody id="pricelist3">
                                        <tr>
                                            <td colspan="5" class="text-center">Silakan pilih kategori.</td>
                                            <td class="text-center text-danger"><i class="far fa-times-circle"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- datatable start -->
                <!-- datatable end -->
            </div>
        </div>
    </div>
</div>