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


    <!-- Page Header Start -->
    <div class="container-fluid py-5" style="background-image: url('<?php echo $subheader_src; ?>'); background-size: 100%; background-repeat: no-repeat;">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Our Products</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="shop.php">Our Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Products</h6>
                </div>
            </div>

            <div class="row mx-1 portfolio-container">
            <?php
                if(isset($_REQUEST['cat_id']) && $_REQUEST['cat_id'] != ""){
                    $getallCp = getAllProductItemsByCategory($_REQUEST['cat_id']);
                }else{
                    $getallCp = getAllProductItems();
                }

                while ($row2 = mysqli_fetch_assoc($getallCp)) {
                    $pid = $row2['pid'];
                    $img = $row2['product_image'];
                    $img_src = "server/uploads/products/" . $img;?>

                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" style="height: 300px;"  src="<?php echo $img_src; ?>" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4"><?php echo $row2['product_name']; ?></h4>
                            <h4 class="text-white mb-4">Rs.<?php echo $row2['product_price']; ?>.00</h4>
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
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- Products End -->
    <?php include 'pages/footersec.php'; ?>
    <?php include 'pages/script.php'; ?>
</body>

</html>