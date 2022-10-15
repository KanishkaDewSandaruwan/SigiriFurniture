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
                        <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                        <div class="count">2500</div>
                        <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                    </div>
                </div>
                <!-- /top tiles -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Category <small>List</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                            <li><a href="category_add.php" class="btn btn-primary">Add New Category</a></li>
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>

                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Cat ID</th>
                                        <th>Category Name</th>
                                        <th>Image</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Cat ID</th>
                                        <th>Category Name</th>
                                        <th>Image</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                            $getall = getAllCategory();

                            while($row=mysqli_fetch_assoc($getall)){

                                $cat_id = $row['cat_id'];
                                $img = $row['cat_image'];
                                $img_src = "../../server/uploads/category/".$img;?>
                                    <tr>
                                        <td>#<?php echo $row['cat_id']; ?></td>
                                        <td>
                                            <div class="form-group">
                                                <input id="cat_name  <?php echo $cat_id; ?>" type="text" name="cat_name"
                                                    onchange="updateData(this, '<?php echo $cat_id; ?>', 'cat_name', 'category', 'cat_id');"
                                                    value="<?php echo $row['cat_name']; ?>"
                                                    data-parsley-trigger="change" required=""
                                                    placeholder="Enter Category Name" autocomplete="off"
                                                    class="form-control">
                                            </div>
                                        </td>
 

                                        <td>


                                            <form class="w-20" enctype="multipart/form-data" method="POST">
                                                <div class="mb-3">
                                                    <input class="form-control" value="<?php echo $row['cat_id'] ?>"
                                                        name="id" type="hidden" id="id">
                                                    <input class="form-control" value="cat_id" name="id_fild"
                                                        type="hidden" id="id_fild">
                                                    <input class="form-control" value="category" name="table"
                                                        type="hidden" id="table">
                                                    <input class="form-control" value="cat_image" name="field"
                                                        type="hidden" id="field">
                                                    <input onchange="uploadImage(this.form);" class="form-control"
                                                        name="file" type="file" id="formFile">
                                                </div>
                                            </form>
                                            <img width="200px" src='<?php echo $img_src; ?>'>

                                        </td>
              
                                        <td><button type="button"
                                                onclick="deleteDataCategory(<?php echo $row['cat_id']; ?>,'category', 'cat_id')"
                                                class="btn btn-darkblue"> <i class="fa-solid fa-trash"></i>
                                            </button></td>
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