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
                            <h2>Password <small>Change</small></h2>
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

                            <form method="post" class="form-horizontal form-label-left" novalidate>
                                <span class="section">Create New Password</span>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="current_password">Current Password
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="current_password" class="form-control col-md-7 col-xs-12"
                                            data-validate-length-range="6" data-validate-words="2"
                                            name="current_password" required="required" placeholder="Current Password"
                                            type="password">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="new_password">New
                                        Password
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" id="new_password" name="new_password"
                                            placeholder="New Password" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                        for="confirm_new_password">Confirm New Password
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" id="confirm_new_password" name="confirm_new_password"
                                            placeholder="Confirm New Password" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="hidden" class="form-control" name="email"
                                        value="<?php echo $_SESSION['admin']; ?>" id="email">
                                </div>


                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="products.php" class="btn btn-primary">Back</a>
                                        <button type="button" onclick="changePasswordAdmin(this.form)"
                                            class="btn btn-success">Submit</button>
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