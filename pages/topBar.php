<?php 
include 'server/api.php';  

$setting = getAllSettings();
$res = mysqli_fetch_assoc($setting);

$header = $res['header_image'];
$header_src = "server/uploads/settings/".$header;

$subheader = $res['sub_image'];
$subheader_src = "server/uploads/settings/".$subheader;

$about = $res['about_image'];
$about_src = "server/uploads/settings/".$about;


?>


 <!-- Topbar Start -->
 <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="index.php">Home</a>
                        <span class="text-white">|</span>
                        <?php if(isset($_SESSION['customer'])) :?>
                        <a class="text-white px-3" href="orders.php">Orders</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="profile.php">Profile</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="admin/production/logout.php">Logout</a>
                        <?php else :?>
                        <a class="text-white px-3" href="admin/production/login.php">Login</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="admin/production/register.php">Register</a>
                        <?php endif;?>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="<?php echo $res['link_facebook']; ?>">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="<?php echo $res['link_twiiter']; ?>">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="<?php echo $res['link_instragram']; ?>">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->