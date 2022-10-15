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
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="shop.php" class="nav-item nav-link">Products</a>
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
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
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Profile</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
    <?php 
$getall = getAllcustomerById($_SESSION['customer']);
$row=mysqli_fetch_assoc($getall);
$customer_id = $row['customer_id']; ?>

    <!-- Contact Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                        <div class="d-inline-flex border border-secondary p-2 mb-4">
                            <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Full Name</h4>
                                <p class="m-0 text-white"><?php echo $row['name']; ?></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-2 mb-4">
                            <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Email</h4>
                                <p class="m-0 text-white"><?php echo $row['email']; ?></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-2 mb-4">
                            <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Phone Number</h4>
                                <p class="m-0 text-white"><?php echo $row['phone']; ?></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-2 mb-4">
                            <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Address</h4>
                                <p class="m-0 text-white"><?php echo $row['address']; ?></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-2 mb-4">
                            <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>NIC</h4>
                                <p class="m-0 text-white"><?php echo $row['nic']; ?></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-2 mb-4">
                            <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Gender</h4>
                                <p class="m-0 text-white"><?php if ($row['gender']=="1") echo "Male"; else echo "Female"; ?></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <div class="col-md-12 border-right">
                                            <div class="p-3 py-5">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <h4 class="text-right">Profile Settings</h4>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center experience">
                                                    <a class="border px-3 p-1 add-experience" id="change" href="change_email.php"><i
                                                            class="fa fa-lock"></i>&nbsp;Change Email</a>
                                                    <a href="change_password.php" class="border px-3 p-1 add-experience"><i
                                                            class="fa fa-lock"></i>&nbsp;Change Password</a>
                                                    <button class="border px-3 p-1 add-experience"
                                                        onclick="deleteDataFromHome(<?php echo $row['customer_id']; ?>, 'customer', 'customer_id')"><i
                                                            class="fa fa-trash"></i>&nbsp;Delete</button>
                                                </div><br>
                                                <div class="row mt-2">
                                                    <div class="col-md-12"><label class="labels">Name</label>
                                                        <input type="text"
                                                            onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","name", "customer", "customer_id")'
                                                            class="form-control" id="name" placeholder="Your name"
                                                            value="<?php echo $row['name']; ?>">
                                                    </div>

                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-12"><label class="labels">Mobile Number</label>
                                                        <input type="text"
                                                            onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","phone", "customer", "customer_id")'
                                                            class="form-control" id="phone"
                                                            placeholder="enter phone number"
                                                            value="<?php echo $row['phone']; ?>">
                                                    </div>


                                                    <div class="col-md-12"><label class="labels">Address </label><input
                                                            type="text"
                                                            onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","address", "customer", "customer_id")'
                                                            class="form-control" id="address"
                                                            placeholder="enter address"
                                                            value="<?php echo $row['address']; ?>"></div>

                                                    <div class="col-md-12"><label class="labels">NIC</label>
                                                        <input type="text" disabled
                                                            onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","nic", "customer", "customer_id")'
                                                            id="nic" class="form-control" placeholder="Enter NIC"
                                                            value="<?php echo $row['nic']; ?>">
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label class="labels">Email ID</label>
                                                        <input type="email"
                                                            onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","email", "customer", "customer_id")'
                                                            id="email" class="form-control"
                                                            placeholder="Enter Email Address"
                                                            value="<?php echo $row['email']; ?>">
                                                    </div>

                                                </div>
                                                <div class="row mt-12">
                                                    <div class="col-md-12"><label class="labels">Gender</label>
                                                        <select
                                                            onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","gender", "customer", "customer_id")'
                                                            id="gender <?php echo $customer_id; ?>"
                                                            class='form-control norad tx12' name="gender" type='text'>
                                                            <option value="1"
                                                                <?php if ($row['gender']=="1") echo "selected"; ?>>
                                                                Male</option>
                                                            <option value="0"
                                                                <?php if ($row['gender']=="0") echo "selected"; ?>>
                                                                Female</option>
                                                        </select>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header  bg-dark">
                    <h5 class="modal-title text-primary" id="exampleModalLabel">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark">
                    <form method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                        <div class="col-md-12">
                            <label for="current_password" class="form-label">Current Password Name</label>
                            <input type="password" class="form-control" name="current_password" id="current_password"
                                placeholder="Current Password Name" required>
                        </div>

                        <div class="col-md-12">
                            <label for="new_password" class="form-label">New Password</label>
                            <input type="password" class="form-control" name="new_password" id="new_password"
                                placeholder="New Password" required>
                        </div>

                        <div class="col-md-12">
                            <label for="confirm_new_password" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password"
                                placeholder="Confirm New Password" required>
                        </div>

                        <div class="col-md-12">
                            <input type="hidden" class="form-control" name="customer_id" value="<?php echo $_SESSION['customer']; ?>" id="customer_id">
                        </div>


                </div>
                <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="changePassword(this.form)" class="btn btn-primary">Save
                        changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>


     <!-- Modal -->
  <div class="modal fade" id="ChangeEmail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-primary" id="exampleModalLabel">Change Email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark">
                    <form method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                        <div class="col-md-12">
                            <label for="current_email" class="form-label">Current Email Address</label>
                            <input type="email" class="form-control" name="current_email" id="current_email"
                                placeholder="Current Email Address" required>
                        </div>

                        <div class="col-md-12">
                            <label for="new_email" class="form-label">New Email Address</label>
                            <input type="email" class="form-control" name="new_email" id="new_email"
                                placeholder="New Email Address" required>
                        </div>

                        <div class="col-md-12">
                            <input type="hidden" class="form-control" name="customer_id" value="<?php echo $_SESSION['customer']; ?>" id="customer_id">
                        </div>
                        
                </div>
                <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="changeEmail(this.form)" class="btn btn-primary">Save
                        changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <?php include 'pages/footersec.php'; ?>
    <?php include 'pages/script.php'; ?>
</body>

</html>