<?php include('includes/header.php'); ?>
<div class="container">
<h1 class="stylish-heading">Welcome to Shopify Fashion</h1>
    <link href="assets/css/style.css" rel="stylesheet"
    
    <!-- Image Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/slider1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/slider2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/slider3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <h2>Our Collections</h2>
    <!-- Profile Cards Section -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg hover-effect">
                <img src="assets/images/profile1.jpg" class="card-img-top" alt="Men Collections">
                <div class="card-body">
                    <h5 class="card-title text-center">Men Collections</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg hover-effect">
                <img src="assets/images/profile2.jpg" class="card-img-top" alt="Women Collections">
                <div class="card-body">
                    <h5 class="card-title text-center">Women Collections</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg hover-effect">
                <img src="assets/images/profile3.jpg" class="card-img-top" alt="Kids Collections">
                <div class="card-body">
                    <h5 class="card-title text-center">Kids Collections</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
