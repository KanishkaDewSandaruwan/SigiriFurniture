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
                        <span class="count_top"><i class="fab fa-product-hunt"></i> Total Products</span>
                        <div class="count"><?php echo dataCount('products'); ?></div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
                        <div class="count">123.50</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last
                            Week</span>
                    </div>

                </div>
                <!-- /top tiles -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Products <small>List</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a href="products_add.php" class="btn btn-primary">Add New</a></li>
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>

                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Highlight</th>
                                        <th>Category</th>
                                        <th>Price (Rs.)</th>
                                        <th>Qty</th>
                                        <th>Available</th>
                                        <th>Date Updated</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $getall = getAllItems();
                                while ($row = mysqli_fetch_assoc($getall)) {
                                    $pid = $row['pid'];
                                    $img = $row['product_image'];
                                    $img_src = "../../server/uploads/products/" . $img; ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['product_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['product_description']; ?>
                                        </td>
                                        <td><img width="50px" src='<?php echo $img_src; ?>'></td>
                                        <td>
                                            <?php echo $row['product_highlight']; ?>
                                        </td>

                                        <td><select
                                                onchange="updateData(this, '<?php echo $pid; ?>', 'cat_id', 'products', 'pid');"
                                                id="cat_id <?php echo $pid; ?>" disabled class='form-control norad tx12'
                                                name="cat_id" type='text'>
                                                <?php 
                                                    $getallCat = getAllCategories();
                                                    while($row2=mysqli_fetch_assoc($getallCat)){ ?>

                                                <option value="<?php echo $row2['cat_id']; ?>"
                                                    <?php if ($row['cat_id']== $row2['cat_id']) echo "selected"; ?>>
                                                    <?php echo $row2['cat_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control"
                                                onchange="updateData(this, '<?php echo $pid; ?>', 'product_price', 'products', 'pid');"
                                                name="product_price" id="product_price <?php echo $pid; ?>"
                                                value="<?php echo $row['product_price']; ?>">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control"
                                                onchange="updateData(this, '<?php echo $pid; ?>', 'product_qty', 'products', 'pid');"
                                                name="product_qty" id="product_qty <?php echo $pid; ?>"
                                                value="<?php echo $row['product_qty']; ?>">
                                        </td>

                                        <td>
                                            <select
                                                onchange="updateData(this, '<?php echo $pid; ?>', 'product_active', 'products', 'pid');"
                                                id="product_active <?php echo $pid; ?>" class='form-control norad tx12'
                                                name="product_active" type='text'>
                                                <option value="1"
                                                    <?php if ($row['product_active'] == "1" ) echo "selected" ; ?>>
                                                    Active
                                                </option>
                                                <option value="0"
                                                    <?php if ($row['product_active'] == "0" ) echo "selected" ; ?>>
                                                    Deactive
                                                </option>
                                            </select>
                                        </td>
                                        <td>
                                            <?php echo $row['date_updated']; ?>
                                        </td>
                                        <td>

                                            <a href="prodcuts_edit.php?pid=<?php echo $row['pid']; ?>"
                                                class="btn btn-darkblue">
                                                <i class="fa-solid fa-pen-to-square"></i> </a>
                                            <?php if ($row['product_active']=="0"): ?>
                                            <button type="button"
                                                onclick="deleteData(<?php echo $row['pid']; ?>,'products', 'pid')"
                                                class="btn btn-darkblue"> <i class="fa-solid fa-trash"></i>
                                            </button>
                                            <?php endif ?>

                                        </td>
                                        <?php } ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>NIC</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                    </tr>
                                </tfoot>

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