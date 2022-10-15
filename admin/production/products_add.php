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
                            <h2>Products <small>Add</small></h2>
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

                            <form class="form-horizontal form-label-left" novalidate>
                                <span class="section">Create New Product</span>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="product_name" class="form-control col-md-7 col-xs-12"
                                            data-validate-length-range="6" data-validate-words="2" name="product_name"
                                            required="required" placeholder="Product Name e.g Table" type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                        for="product_description">Product Description
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="product_description" name="product_description"
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
                                            required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_price">Product
                                        Price
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" id="product_price" name="product_price" required="required"
                                            data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Quntity
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" id="product_qty" name="product_qty" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_active">Active
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="product_active" class='form-control norad tx12'
                                            name="product_active" type='text'>
                                            <option value="1"> Active</option>
                                            <option value="0"> Deactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_id">Category
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="cat_id" class='form-control norad tx12'
                                            name="cat_id" type='text'>
                                            <?php $getall = getAllCategory();
                                                while($row=mysqli_fetch_assoc($getall)){ ?>
                                           <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control" required name="file" type="file" id="file">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="products.php" class="btn btn-primary">Back</a>
                                        <button id="send" type="button" onclick="addItems(this.form)" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>


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