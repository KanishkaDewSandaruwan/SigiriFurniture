<!DOCTYPE html>
<html lang="en">
<?php include '../../server/api.php'; 

?>

<?php include 'inc/head.php'; ?>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form>
                        <h1>Register Sigiri Furniture</h1>
                        <div>
                            <input type="text" class="form-control" id="floatingText" name="name" placeholder="jhondoe">
                        </div>
                        <div>
                            <input type="email" class="form-control" id="floatingInput" name="email"
                                placeholder="name@example.com">
                        </div>
                        <div>
                            <input type="text" class="form-control" id="floatingText" name="phone"
                                placeholder="0753664078">
                        </div>
                        <div>
                            <input type="text" class="form-control" id="floatingText" name="nic"
                                placeholder="862545789V">
                        </div>
                        <div>
                            <input type="text" class="form-control" id="floatingText" name="address"
                                placeholder="24/2 Flower Rd, Colombo 7">
                        </div>
                        <div>
                            <select class="form-control" name="gender" id="gender" aria-label="Default select example">
                                <option value="1" selected>Male</option>
                                <option value="0">Female</option>
                            </select>
                        </div>
                        <div style="margin-top: 30px;">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password">
                        </div>
                        <div>
                            <input type="password" class="form-control" name="conf_password" id="conf_password"
                                placeholder="Password">

                        </div>
                        <div class="col-md-12">
                            <button type="button" onclick="addCustomer(this.form)" class="btn btn-default w-100">Log
                                in</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Do You have Account?
                                <a href="login.php" class="to_register"> Login </a>
                            </p>

                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <?php include 'inc/script.php'; ?>
</body>

</html>