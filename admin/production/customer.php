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
                        <span class="count_top"><i class="fa fa-users"></i> Total Customers</span>
                        <div class="count"><?php echo dataCount('customer'); ?></div>
                    </div>

                </div>
                <!-- /top tiles -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Customer <small>List</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fas fa-times-circle"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                        <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Emp ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>NIC</th>
                                <th>Address</th>
                                <th>Gender</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Emp ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>NIC</th>
                                <th>Address</th>
                                <th>Gender</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php 
                                $getall = getAllcustomers();

                                while($row=mysqli_fetch_assoc($getall)){ 
                                  $customer_id = $row['customer_id'];
                                  ?>


                            <tr>
                                <td>#<?php echo $row['customer_id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['nic']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php if ($row['gender']=="1"){ echo "Male"; }else{ echo "Female";} ?></td>
                                <td> <button type="button" onclick="deleteData(<?php echo $row['customer_id']; ?>,'customer', 'customer_id')"
                                        class="btn btn-darkblue"> <i class="fa-solid fa-trash"></i>
                                    </button>

                                </td>
                            </tr>

                            <?php } ?>

                        </tbody>
                    </table>
                        </div>
                    </div>
                </div>


                <!-- /page content -->
                <?php include 'pages/footer.php'; ?>
                <!-- /footer content -->
            </div>
        </div>

        <?php include 'inc/script.php'; ?>
</body>

</html>