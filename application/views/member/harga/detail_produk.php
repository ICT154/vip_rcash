
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    </head>

    <body>
        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Single Product Start -->
        <div class="container-fluid py-5 mt-5">
            <div class="container py-5">
                <div class="row g-4 mb-5">
                    <div class="col-lg-8 col-xl-9">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="border rounded">
                                    <a href="#">
                                    <div id="carouselExampleIndicators8" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url("storage/") ?>uploads_images_product/by.png" class="d-block w-100" alt="Slide 1" style="height: 250px; width: 10px; ">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("storage/") ?>uploads_images_product/ml.jpg" class="d-block w-100" alt="Slide 2" style="height: 250px; width: 10px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators8" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators8" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="width: 15px;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="fw-bold mb-3">Top Up Point Blank Cash</h4>
                                <h5 class="fw-bold mb-3">3,35 $</h5>
                                <div class="d-flex mb-4">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="mb-4">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                                <p class="mb-4">Susp endisse ultricies nisi vel quam suscipit. Sabertooth peacock flounder; chain pickerel hatchetfish, pencilfish snailfish</p>
                                <div class="input-group quantity mb-5" style="width: 100px;">
    <div class="input-group-btn">
        <button class="btn btn-sm btn-minus rounded-circle bg-light border" onclick="decreaseQuantity()">
            <i class="fa fa-minus"></i>
        </button>
    </div>
    <input type="text" class="form-control form-control-sm text-center border-0" value="1" id="quantityInput">
    <div class="input-group-btn">
        <button class="btn btn-sm btn-plus rounded-circle bg-light border" onclick="increaseQuantity()">
            <i class="fa fa-plus"></i>
        </button>
    </div>
</div>

<!-- Script JavaScript untuk Menambahkan dan Mengurangi Kuantitas -->
<script>
    function increaseQuantity() {
        var inputElement = document.getElementById('quantityInput');
        var currentValue = parseInt(inputElement.value, 10);
        inputElement.value = currentValue + 1;
    }

    function decreaseQuantity() {
        var inputElement = document.getElementById('quantityInput');
        var currentValue = parseInt(inputElement.value, 10);
        if (currentValue > 1) {
            inputElement.value = currentValue - 1;
        }
    }
</script>
                                <a href="#" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>  
    </body>
</html>