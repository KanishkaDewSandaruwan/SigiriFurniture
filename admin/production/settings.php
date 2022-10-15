<!DOCTYPE html>
<html lang="en">

<?php include 'inc/head.php'; ?>


<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <?php include 'pages/navbar.php'; ?>

            <!-- page content -->
            <div class="right_col" role="main">
           
                
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Settings <small>Page Settings</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <?php
$setting = getAllSettings();
if ($res = mysqli_fetch_assoc($setting)) {

    $img = $res['header_image'];
    $img_src = "../../server/uploads/settings/" . $img;

    $imgs = $res['sub_image'];
    $imgs_src = "../../server/uploads/settings/" . $imgs;

    $about = $res['about_image'];
    $about_src = "../../server/uploads/settings/".$about;
?>


                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab_content1"
                                                        id="home-tab" role="tab" data-toggle="tab"
                                                        aria-expanded="true">Header</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content2" role="tab"
                                                        id="profile-tab" data-toggle="tab" aria-expanded="false">Sub
                                                        Header</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content3" role="tab"
                                                        id="profile-tab2" data-toggle="tab" aria-expanded="false">Importent Settings</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content4" role="tab"
                                                        id="about-tab" data-toggle="tab" aria-expanded="false">About</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content5" role="tab"
                                                        id="contact-tab" data-toggle="tab"
                                                        aria-expanded="false">Contact</a>
                                                </li>
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                                    aria-labelledby="home-tab">
                                                    <div class="col-md-6 mt-3">
                                                        <label for="validationCustom01" class="form-label">Header
                                                            Title</label>
                                                        <input type="text"
                                                            onchange='settingsUpdate(this, "header_title")'
                                                            value="<?php echo $res['header_title']; ?>"
                                                            class="form-control" name="category_name"
                                                            id="validationCustom01" placeholder="Header Title" required>
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <label for="product_desc" class="form-label">Header
                                                            Description</label>
                                                        <textarea onchange='settingsUpdate(this, "header_desc")'
                                                            class="form-control" id="header_desc" required
                                                            rows="3"><?php echo $res['header_desc']; ?></textarea>
                                                    </div>
                                                    <form class="mt-3 col-md-6 mt-2" method="POST"
                                                        enctype="multipart/form-data">
                                                        <div class="mb-3">
                                                            <input type="hidden" name="field" id="field"
                                                                value="header_image">
                                                            <label for="formFile" class="form-label">Header Image
                                                                file</label>
                                                            <input class="form-control"
                                                                onchange="uploadSettingImage(this.form);" name="file"
                                                                type="file" id="formFile">
                                                        </div>

                                                        <img class="mt-5" style="margin-top: 3%;" width="80%"
                                                            src='<?php echo $img_src; ?>'>
                                                    </form>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content2"
                                                    aria-labelledby="profile-tab">
                                                    <div class="col-md-6">
                                                        <form class="p-3" method="POST" enctype="multipart/form-data">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="field" id="field"
                                                                    value="sub_image">
                                                                <label for="formFile" class="form-label">Sub header
                                                                    Image
                                                                    file</label>
                                                                <input class="form-control"
                                                                    onchange="uploadSettingImage(this.form);"
                                                                    name="file" type="file" id="formFile">
                                                            </div>

                                                        </form>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img class="p-5" style="margin-top: 3%;" width="100%"
                                                            src='<?php echo $imgs_src; ?>'>
                                                    </div>

                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content3"
                                                    aria-labelledby="profile-tab">
                                                    <div class="col-md-6">
                                                    <div class="col-md-7 mt-5">
                                                        <label for="validationCustom01" class="form-label">Delivery fee</label>
                                                        <input type="text" onchange='settingsUpdate(this, "delivery_fee")'
                                                            value="<?php echo $res['delivery_fee']; ?>" class="form-control"
                                                            id="delivery_fee" placeholder="Delivery Fee" required>
                                                    </div>
                                                        <!-- <form class="mt-3" method="POST" enctype="multipart/form-data">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="field" id="field"
                                                                    value="header_rotate_image">
                                                                <label for="formFile" class="form-label">Sub header
                                                                    Image
                                                                    file</label>
                                                                <input class="form-control"
                                                                    onchange="uploadSettingImage(this.form);"
                                                                    name="file" type="file" id="formFile">
                                                            </div>

                                                        </form> -->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img class="mt-2" width="100%" src='<?php echo $imgs1_src; ?>'>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content4"
                                                    aria-labelledby="about-tab">

                                                    <div class="col-md-7 mt-5">
                                                        <label for="validationCustom01" class="form-label">About
                                                            Title</label>
                                                        <input type="text"
                                                            onchange='settingsUpdate(this, "about_title")'
                                                            value="<?php echo $res['about_title']; ?>"
                                                            class="form-control" id="about_title"
                                                            placeholder="About Title" required>
                                                    </div>
                                                    <div class="col-md-7 mt-5">
                                                        <label for="validationCustom01"
                                                            class="form-label">Experience</label>
                                                        <input type="text"
                                                            onchange='settingsUpdate(this, "about_experience")'
                                                            value="<?php echo $res['about_experience']; ?>"
                                                            class="form-control" id="about_experience"
                                                            placeholder="Experience" required>
                                                    </div>
                                                    <div class="col-md-7 mt-5">
                                                        <label for="validationCustom01" class="form-label">Opening
                                                            Hour</label>
                                                        <input type="text" onchange='settingsUpdate(this, "opening")'
                                                            value="<?php echo $res['opening']; ?>" class="form-control"
                                                            id="opening" placeholder="Opening Hour" required>
                                                    </div>
                                                    <div class="col-md-7 mt-5">
                                                        <label for="product_desc" class="form-label">About
                                                            Description</label>
                                                        <textarea onchange='settingsUpdate(this, "about_desc")'
                                                            class="form-control" id="about_desc" required
                                                            rows="3"><?php echo $res['about_desc']; ?></textarea>

                                                        <form class="mt-3" method="POST" enctype="multipart/form-data">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="field" id="field"
                                                                    value="about_image">
                                                                <label for="formFile" class="form-label">About Image
                                                                    file</label>
                                                                <input class="form-control"
                                                                    onchange="uploadSettingImage(this.form);"
                                                                    name="file" type="file" id="formFile">
                                                            </div>

                                                        </form>
                                                        <img class="mt-2" width="200px" src='<?php echo $about_src; ?>'>

                                                    </div>



                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content5"
                                                    aria-labelledby="contact-tab">

                                                    <div class="col-md-7 mt-3">
                                                        <label for="validationCustom01" class="form-label">Company Phone
                                                            Number</label>
                                                        <input type="text"
                                                            onchange='settingsUpdate(this, "company_phone")'
                                                            value="<?php echo $res['company_phone']; ?>"
                                                            class="form-control" id="company_phone"
                                                            placeholder="Company Phone Number" required>
                                                    </div>
                                                    <div class="col-md-7 mt-3">
                                                        <label for="validationCustom01" class="form-label">Company Email
                                                            Address</label>
                                                        <input type="text"
                                                            onchange='settingsUpdate(this, "company_email")'
                                                            value="<?php echo $res['company_email']; ?>"
                                                            class="form-control" id="company_email"
                                                            placeholder="Company Email Address" required>
                                                    </div>
                                                    <div class="col-md-7 mt-3">
                                                        <label for="validationCustom01" class="form-label">Company
                                                            Address</label>
                                                        <input type="text"
                                                            onchange='settingsUpdate(this, "company_address")'
                                                            value="<?php echo $res['company_address']; ?>"
                                                            class="form-control" id="company_address"
                                                            placeholder="Company Address" required>
                                                    </div>
                                                    <div class="col-md-7 mt-3">
                                                        <label for="validationCustom01" class="form-label">Facebook
                                                            Link</label>
                                                        <input type="text"
                                                            onchange='settingsUpdate(this, "link_facebook")'
                                                            value="<?php echo $res['link_facebook']; ?>"
                                                            class="form-control" id="link_facebook"
                                                            placeholder="Facebook Link" required>
                                                        <a
                                                            href="<?php echo $res['link_facebook']; ?>"><?php echo $res['link_facebook']; ?></a>
                                                    </div>
                                                    <div class="col-md-7 mt-3">
                                                        <label for="validationCustom01" class="form-label">Twitter
                                                            Link</label>
                                                        <input type="text"
                                                            onchange='settingsUpdate(this, "link_twiiter")'
                                                            value="<?php echo $res['link_twiiter']; ?>"
                                                            class="form-control" id="link_twiiter"
                                                            placeholder="Twitter Link" required>
                                                        <a
                                                            href="<?php echo $res['link_twiiter']; ?>"><?php echo $res['link_twiiter']; ?></a>
                                                    </div>
                                                    <div class="col-md-7 mt-3">
                                                        <label for="validationCustom01" class="form-label">Instragram
                                                            Link</label>
                                                        <input type="text"
                                                            onchange='settingsUpdate(this, "link_instragram")'
                                                            value="<?php echo $res['link_instragram']; ?>"
                                                            class="form-control" id="link_instragram"
                                                            placeholder="Instragram Link" required>
                                                        <a
                                                            href="<?php echo $res['link_instragram']; ?>"><?php echo $res['link_instragram']; ?></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <?php
}?>

                                    </div>
                                </div>
                            </div>

                        </div>

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