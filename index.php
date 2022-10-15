<!DOCTYPE html>
<html lang="en">

<?php include 'admin/production/inc/head.php'; ?>

<head>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    
<?php include 'pages/topBar.php'; ?>

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">Sigiri</span>Furniture</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="shop.php" class="nav-item nav-link">Products</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="cart.php" class="nav-item nav-link">Cart</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

<?php include 'pages/header.php'; ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo $header_src; ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3"> <?php echo $res['header_desc']; ?></h4>
                            <h3 class="display-3 text-white mb-md-4"> <?php echo $res['header_title']; ?></h3>
                            <a href="shop.php" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                        <h4 class="display-3 mb-3"><?php echo $res['about_experience']; ?></h4>
                        <h1 class="m-0">Years of Experience</h1>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Learn About Us</h6>
                    <h1 class="mb-4 section-title"><?php echo $res['about_title']; ?></h1>
                    <p><?php echo $res['about_desc']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Features Start -->
    <!-- <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                    <h1 class="mb-4 section-title">25+ Years Experience In The Interior Design Industry</h1>
                    <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <ul class="list-inline">
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>25+ Years Experience</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Best Interior Design</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Customer Satisfaction</h5></li>
                    </ul>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="img/feature.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Features End -->

    
  


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Products</h6>
                    <h1 class="mb-4">Some Of Our Latest Products</h1>
                </div>
            </div>

            <div class="row mx-1 portfolio-container">
            <?php
                $getallCp = getAllProductItems();
                $count = 0;
                while ($row2 = mysqli_fetch_assoc($getallCp)) {
                    $pid = $row2['pid'];
                    $img = $row2['product_image'];
                    $img_src = "server/uploads/products/" . $img;
                    if($count < 6){ ?>

                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" style="height: 300px;"  src="<?php echo $img_src; ?>" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4"><?php echo $row2['product_name']; ?></h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn btn-outline-primary m-1" type="button" onclick="addtoCartProduct(<?php echo $pid; ?>, <?php echo $row2['product_price']; ?>)">
                                    <i class="fa fa-cart-shopping"></i>
                                </button>
                                <a class="btn btn-outline-primary m-1" href="<?php echo $img_src; ?>" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } $count++; } ?>

            </div>
        </div>
    </div>
    <!-- Products End -->

      <!-- Category Start -->
      <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white font-weight-normal text-uppercase mb-3">Product Category</h6>
                        <h1 class="mb-0 text-center">Our Catrgories</h1>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 p-0 py-sm-5">
                    <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">
                    <?php 
                        $getall = getAllCategories();

                        while($row=mysqli_fetch_assoc($getall)){ 
                            $cat_id = $row['cat_id'];
                            $img = $row['cat_image'];
                            $img_src = "server/uploads/category/".$img;

                        $getallCp2 = getAllProductItemsByCategory($cat_id);
                        if ($row2 = mysqli_fetch_assoc($getallCp2)) {
                            ?>

                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" style="height: 200px;" src="<?php echo $img_src; ?>" alt="">
                  
                            </div>
                            <a href="shop.php?cat_id=<?php echo $row['cat_id']; ?>">
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white"><?php echo $row['cat_name']; ?></h5>
                                <p class="m-0">Show More</p>
                            </div>
                            </a>
                        </div>
                        <?php } } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->



    <?php include 'pages/footersec.php'; ?>
    <?php include 'pages/script.php'; ?>
</body>

</html>