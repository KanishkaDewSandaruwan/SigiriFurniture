<!DOCTYPE html>
<html lang="en">
  
  <?php include 'inc/head.php'; ?>


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <?php include 'pages/navbar.php'; ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-users"></i> Total Users</span>
              <div class="count"><?php echo dataCount('customer'); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa-sharp fa-solid fa-calendar-days"></i> Total Orders</span>
              <div class="count"><?php echo dataCount('product_orders'); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa-solid fa-money-bill"></i> Today Income</span>
              <div class="count green"><?php 
                    $data =  dataforCountToday('product_orders'); 
                    if($row = mysqli_fetch_assoc($data)){
                        echo $row['sum'];
                    }
                    ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa-solid fa-money-bill"></i> Total Income</span>
              <div class="count"> <?php 
                    $data =  dataforCount('product_orders'); 
                    if($row = mysqli_fetch_assoc($data)){
                        echo $row['sum'];
                    } ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa-brands fa-product-hunt"></i> Total Products</span>
              <div class="count"><?php echo dataCount('products'); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa-brands fa-product-hunt"></i> Total Categories</span>
              <div class="count"><?php echo dataCountWhere('category', 'is_deleted = 0 '); ?></div>
            </div>
          </div>
          <!-- /top tiles -->


        </div>
        <!-- /page content -->       
        <?php include 'pages/footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>

    <?php include 'inc/script.php'; ?>
  </body>
</html>
