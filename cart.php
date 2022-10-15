<!DOCTYPE html>
<html lang="en">

<?php include 'admin/production/inc/head.php'; ?>
<?php include 'pages/auth.php'; ?>

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
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Cart</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="cart.php">Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
           
<!-- Navbar & Hero End -->
<section class="py-5">
        <div class="container">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $getall = getAllCart($_SESSION['customer']);
                    $count = mysqli_num_rows($getall);
                    $total = 0;

                    if($count > 0){

                    while ($row = mysqli_fetch_assoc($getall)) {
                        $pid = $row['pid'];
                        $sub_total = $row['qty'] * $row['price'];
                        $total = $total + $sub_total;
                        $img = $row['product_image'];
                        $img_src = "server/uploads/products/" . $img; ?>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs"><img width="100%" src="<?php echo $img_src; ?>" alt="..."
                                        class="img-responsive" /></div>
                                <div class="col-sm-10">
                                    <h4 class="nomargin"><?php echo $row['product_name']; ?></h4>
                                    <p><?php echo $row['product_highlight']; ?></p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">Rs. <?php echo $row['product_price']; ?></td>
                        <td data-th="Quantity">
                            <input type="number" name="qty" id="qty <?php echo $row['cart_id']; ?>"  onchange="qtryChange(this, '<?php echo $row['cart_id']; ?>', 'qty');"value="<?php echo $row['qty']; ?>" class="form-control text-center">
                        </td>
                        <td data-th="Subtotal" class="text-center">Rs. <?php echo $sub_total; ?></td>
                        <td class="actions" data-th="">
                            <button 
                            onclick="cartDelete(<?php echo $row['cart_id']; ?>, 'cart', 'cart_id')"
                            class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php } }else{ ?>
                        <h1>Cart is empty</h1>
                    <?php } ?>
                </tbody>
                <tfoot>
                
                    <tr>
                        <td><a href="shop.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Shop More</a>
                        </td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong>Total Rs. <?php echo $total; ?></strong></td>
                        <td><a href="checkout.php?total=<?php echo $total; ?>" class="btn btn-success btn-block">Checkout</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>



            </div>
        </div>
    </div>
    <!-- Products End -->
    <?php include 'pages/footersec.php'; ?>
    <?php include 'pages/script.php'; ?>
</body>

</html>