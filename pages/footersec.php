  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i><?php echo $res['company_address']; ?></p>
                <p><i class="fa fa-phone-alt mr-2"></i><?php echo $res['company_phone']; ?></p>
                <p><i class="fa fa-envelope mr-2"></i><?php echo $res['company_email']; ?></p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="<?php echo $res['link_twiiter']; ?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="<?php echo $res['link_facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="<?php echo $res['link_instragram']; ?>"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Our Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Our Products</a>
                    <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Your Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <?php if(isset($_SESSION['customer'])) :?>
                    <a class="text-white mb-2" href="admin/production/logout.php"><i class="fa fa-angle-right mr-2"></i>Logout</a>
                    <a class="text-white mb-2" href="profile.php"><i class="fa fa-angle-right mr-2"></i>Profile</a>
                    <a class="text-white" href="orders.php"><i class="fa fa-angle-right mr-2"></i>Orders</a>
                    <?php else :?>
                    <a class="text-white mb-2" href="admin/production/login.php"><i class="fa fa-angle-right mr-2"></i>Login</a>
                    <a class="text-white" href="admin/production/register.php"><i class="fa fa-angle-right mr-2"></i>Register</a>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Shop Now</h4>
                    <div>
                        <a class="btn btn-lg btn-primary btn-block border-0" href="shop.php">Shop Now</a>
                    </div>
    
            </div>
        </div>
        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
            Sigiri Furniture</a> &copy; <script>document.write(new Date().getFullYear())</script>. All Right Reserved. 
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>