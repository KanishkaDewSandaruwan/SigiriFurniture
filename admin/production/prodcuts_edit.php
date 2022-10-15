<!DOCTYPE html>
<html lang="en">

<?php include 'inc/head.php'; ?>


<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <?php include 'pages/navbar.php'; ?>

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Products <small>Edit</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?php 
                    if (isset($_REQUEST['pid'])) {
                        $getall = getAllItemsByID($_REQUEST['pid']);
                        $row = mysqli_fetch_assoc($getall);
                        $pid = $row['pid'];
                        $img = $row['product_image'];
                        $img_src = "../../server/uploads/products/" . $img;
                            ?>
                            <form class="form-horizontal form-label-left" novalidate>
                                <span class="section">Single Product Info</span>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="product_name" class="form-control col-md-7 col-xs-12"
                                            data-validate-length-range="6" data-validate-words="2" name="product_name"
                                            onchange="updateData(this, '<?php echo $pid; ?>', 'product_name', 'products', 'pid');"
                                            value="<?php echo $row['product_name']; ?>" required="required"
                                            placeholder="Product Name e.g Table" type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                        for="product_description">Product Description
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="product_description" name="product_description"
                                            onchange="updateData(this, '<?php echo $pid; ?>', 'product_description', 'products', 'pid');"
                                            value="<?php echo $row['product_description']; ?>"
                                            required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                        for="product_highlight">Product Highlight
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="product_highlight" name="product_highlight"
                                            onchange="updateData(this, '<?php echo $pid; ?>', 'product_highlight', 'products', 'pid');"
                                            value="<?php echo $row['product_highlight']; ?>" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_price">Product
                                        Price
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" id="product_price" name="product_price" required="required"
                                            onchange="updateData(this, '<?php echo $pid; ?>', 'product_price', 'products', 'pid');"
                                            value="<?php echo $row['product_price']; ?>" data-validate-minmax="10,100"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Quntity
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" id="product_qty" name="product_qty" required="required"
                                            onchange="updateData(this, '<?php echo $pid; ?>', 'product_qty', 'products', 'pid');"
                                            value="<?php echo $row['product_qty']; ?>"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_active">Active
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select
                                            onchange="updateData(this, '<?php echo $pid; ?>', 'product_active', 'products', 'pid');"
                                            id="product_active <?php echo $pid; ?>" class='form-control norad tx12'
                                            name="product_active" type='text'>
                                            <option value="1"
                                                <?php if ($row['product_active'] == "1" ) echo "selected" ; ?>> Active
                                            </option>
                                            <option value="0"
                                                <?php if ($row['product_active'] == "0" ) echo "selected" ; ?>>
                                                Deactive
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_id">Category
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select
                                            onchange='updateData(this, "<?php echo $pid; ?>","cat_id", "products", "pid")'
                                            id="cat_id <?php echo $pid; ?>" class='form-control norad tx12'
                                            name="cat_id" type='text'>
                                            <?php 
                                        $getallCat = getAllCategory();
                                        while($row2=mysqli_fetch_assoc($getallCat)){ ?>

                                            <option value="<?php echo $row2['cat_id']; ?>"
                                                <?php if ($row['cat_id']== $row2['cat_id']) echo "selected"; ?>>
                                                <?php echo $row2['cat_name']; ?></option>
                                            <?php } ?>
                                            </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="password2"
                                        class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <form enctype="multipart/form-data" method="POST">
                                            <div class="mb-3">
                                                <input class="form-control" value="<?php echo $row['pid'] ?>" name="id"
                                                    type="hidden" id="id">
                                                <input class="form-control" value="pid" name="id_fild" type="hidden"
                                                    id="id_fild">
                                                <input class="form-control" value="products" name="table" type="hidden"
                                                    id="table">
                                                <input class="form-control" value="product_image" name="field"
                                                    type="hidden" id="field">
                                                <input onchange="uploadImageProducts(this.form);" class="form-control"
                                                    name="file" type="file" id="formFile">
                                            </div>

                                            <img width="100px" src='<?php echo $img_src; ?>'>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="products.php" class="btn btn-primary">Back</a>
                                        <a href="products_add.php" class="btn btn-success">Add New Product</a>
                                    </div>
                                </div>
                            </form>
                            <?php } ?>


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