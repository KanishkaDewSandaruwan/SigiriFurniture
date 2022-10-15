<?php 
  if (session_id() == '') {
    session_start();
  }

  if(!isset($_SESSION['admin'])){
      echo '<script>window.location.href = "login.php"; </script>';
  }


?>

<?php include '../../server/api.php'; ?>

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fas fa-couch"></i> <span>Sigiri Furniture</span></a>
        </div>

        <div class="clearfix"></div>


        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General Action</h3>
                <ul class="nav side-menu">
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</span></a></li>
                    <li><a href="customer.php"><i class="fa fa-users"></i> Customer</span></a></li>
                    <li><a href="cat.php"><i class="fa fa-table"></i> Category</span></a></li>
                    <li><a href="products.php"><i class="fab fa-product-hunt"></i> Products</span></a></li>
                    <li><a href="order.php"><i class="far fa-calendar-alt"></i> Orders</span></a></li>
                    <li><a href="message.php"><i class="fas fa-envelope-open-text"></i> Messages</span></a></li>

                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings" href="settings.php">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-users"></i> Admin
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="change_password.php"> Change Password</a></li>
                        <li>
                            <a href="settings.php">
                                <span>Settings</span>
                            </a>
                        </li>
                        <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span class="badge bg-green"><?php echo dataCountWhere('product_orders', 'order_status = 1'); ?></span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <?php 
                    $getall = getAllOrdersPending();

                    while($row=mysqli_fetch_assoc($getall)){ 
                        $order_id = $row['order_id'];
                        ?>
                        <li>
                            <a href="order.php">
                                <span>
                                    <span>#<?php echo $row['order_id']; ?></span>
                                    <span class="time"><?php echo $row['date_updated']; ?></span>
                                </span>
                                <span class="message">
                                    <?php echo $row['name']; ?><br>
                                    <?php echo $row['shipping_address']; ?><br>
                                </span>
                            </a>
                        </li>
                        <?php } ?>

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->