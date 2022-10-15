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
              <h1>Login Sigiri Furniture</h1>
              <div>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="" />
              </div>
              <div>
                <button type="button" onclick="login(this.form)"  class="btn btn-default submit">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="register.php" class="to_register"> Create Account </a>
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
