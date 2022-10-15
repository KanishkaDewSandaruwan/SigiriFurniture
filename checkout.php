<!DOCTYPE html>
<html lang="en">

<?php include 'admin/production/inc/head.php'; ?>

<head>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap"
        rel="stylesheet">

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
    <div class="container-fluid py-5"
        style="background-image: url('<?php echo $subheader_src; ?>'); background-size: 100%; background-repeat: no-repeat;">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Check Out</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary " href="cart.php">Cart</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="checkout.php">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="container px-4 py-5 mx-auto">

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="" method="post">
                              <?php $total = $_REQUEST['total'] + $res['delivery_fee']; ?>
                                <div class="row">
                                    <div class="col-lg-3 radio-group">
                                        <div class="row d-flex px-3 radio">
                                            <img class="pay" src="https://i.imgur.com/WIAP9Ku.jpg">
                                            <p class="my-auto">Credit Card</p>
                                        </div>
                                        <div class="row d-flex px-3 radio gray">
                                            <img class="pay" src="https://i.imgur.com/OdxcctP.jpg">
                                            <p class="my-auto">Debit Card</p>
                                        </div>
                                        <div class="row d-flex px-3 radio gray mb-3">
                                            <img class="pay" src="https://i.imgur.com/cMk1MtK.jpg">
                                            <p class="my-auto">PayPal</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="row px-2">
                                            <div class="form-group col-md-6">
                                                <label class="form-control-label">Name on Card</label>
                                                <input type="text" id="holder_name" name="holder_name" placeholder="D.P Samarasingha">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-control-label">Card Number</label>
                                                <input type="text" id="card_num" name="card_num"
                                                    placeholder="1111 2222 3333 4444">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="hidden" id="total" name="total" value="<?php echo $total; ?>">
                                                <input type="hidden" id="customer_id" name="customer_id" value="<?php echo $_SESSION['customer']; ?>">
                                            </div>
                                        </div>
                                        <div class="row px-2">
                                            <div class="form-group col-md-6">
                                                <label class="form-control-label">Expiration Date</label>
                                                <input type="text" id="expire" name="expire" placeholder="MM/YYYY">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-control-label">CVV</label>
                                                <input type="text" id="cvv" name="cvv" placeholder="***">
                                            </div>
                                        </div>
                                        <div class="row px-2 mt-5">
                                          <h6 class="text-primary ml-3">Delivery Information</h6>
                                        </div>
                                        <div class="row px-2 ">
                                          <div class="form-group col-md-12">
                                            <label class="form-control-label">Shipping Address</label>
                                            <textarea name="shipping_address" id="shipping_address" cols="30" rows="3"></textarea>
                                          </div>
                                        </div>
                                        <div class="row px-2">
                                            <div class="form-group col-md-12">
                                                <label class="form-control-abel">Billing Address</label>
                                                <textarea name="billing_address" id="billing_address" cols="30" rows="3"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-2">
                                        <div class="row d-flex justify-content-between px-4">
                                            <p class="mb-1 text-left">Subtotal</p>
                                            <h6 class="mb-1 text-right">Rs. <?php echo $_REQUEST['total']; ?></h6>
                                        </div>
                                        <div class="row d-flex justify-content-between px-4">
                                            <p class="mb-1 text-left">Shipping</p>
                                            <h6 class="mb-1 text-right">Rs. <?php echo $res['delivery_fee']; ?></h6>
                                        </div>
                                        <div class="row d-flex justify-content-between px-4" id="tax">
                                            <p class="mb-1 text-left">Total (tax included)</p>
                                            <h6 class="mb-1 text-right">Rs.
                                                <?php echo $total; ?></h6>
                                        </div>
                                        <button class="btn-block btn-blue" type="button" onclick="checkOut(this.form)">
                                            <span>
                                                <span id="checkout">Checkout</span>
                                                <span id="check-amt">Rs.
                                                    <?php echo $total; ?></span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <style>
    body {}

    .plus-minus {
        position: relative;
    }

    .plus {
        position: absolute;
        top: -4px;
        left: 2px;
        cursor: pointer;
    }

    .minus {
        position: absolute;
        top: 8px;
        left: 5px;
        cursor: pointer;
    }

    .vsm-text:hover {
        color: #FF5252;
    }

    .book,
    .book-img {
        width: 120px;
        height: 180px;
        border-radius: 5px;
    }

    .book {
        margin: 20px 15px 5px 15px;
    }

    .border-top {
        border-top: 1px solid #EEEEEE !important;
        margin-top: 20px;
        padding-top: 15px;
    }

    .card {
        margin: 40px 0px;
        padding: 40px 50px;
        border-radius: 20px;
        border: none;
        box-shadow: 1px 5px 10px 1px rgba(0, 0, 0, 0.2);
    }

    input,
    textarea {
        background-color: #F3E5F5;
        padding: 8px 15px 8px 15px;
        width: 100%;
        border-radius: 5px !important;
        box-sizing: border-box;
        border: 1px solid #F3E5F5;
        font-size: 15px !important;
        color: #000 !important;
        font-weight: 300;
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #9FA8DA;
        outline-width: 0;
        font-weight: 400;
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0;
    }

    .pay {
        width: 80px;
        height: 40px;
        border-radius: 5px;
        border: 1px solid #673AB7;
        margin: 10px 20px 10px 0px;
        cursor: pointer;
        box-shadow: 1px 5px 10px 1px rgba(0, 0, 0, 0.2);
    }

    .gray {
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        filter: grayscale(100%);
        color: #E0E0E0;
    }

    .gray .pay {
        box-shadow: none;
    }

    #tax {
        border-top: 1px lightgray solid;
        margin-top: 10px;
        padding-top: 10px;
    }

    .btn-blue {
        border: none;
        border-radius: 10px;
        background-color: #673AB7;
        color: #fff;
        padding: 8px 15px;
        margin: 20px 0px;
        cursor: pointer;
    }

    .btn-blue:hover {
        background-color: #311B92;
        color: #fff;
    }

    #checkout {
        float: left;
    }

    #check-amt {
        float: right;
    }

    @media screen and (max-width: 768px) {

        .book,
        .book-img {
            width: 100px;
            height: 150px;
        }

        .card {
            padding-left: 15px;
            padding-right: 15px;
        }

        .mob-text {
            font-size: 13px;
        }

        .pad-left {
            padding-left: 20px;
        }
    }
    </style>

    <!-- Products End -->
    <?php include 'pages/footersec.php'; ?>
    <?php include 'pages/script.php'; ?>
</body>

</html>