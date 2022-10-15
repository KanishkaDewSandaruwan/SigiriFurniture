<!DOCTYPE html>
<html lang="en">

<?php include 'inc/head.php'; ?>


<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <?php include 'pages/navbar.php'; ?>

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- /top tiles -->
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="card-body text-dark">
                        <div class="container">
                            <?php 
                            $getall = getAllOrders();

                            while($row=mysqli_fetch_assoc($getall)){ 
                                $order_id = $row['order_id'];
                                ?>
                            <div class="row" style="margin-top: 20px">
                                <article class="card m-5" style="border: 2px solid #2c3e50">
                                    <header class="card-header text-white"
                                        style="background-color: #2A3F54; color: #fff;"> Orders /
                                        Tracking | ID #<?php echo $row['order_id']; ?> </header>
                                    <div class="card-body" style="padding: 30px;">

                                        <div class="row">
                                            <?php if($row['order_status'] != 5) {?>
                                            <div class="track">

                                                <div
                                                    class="step <?php if($row['order_status'] == 1 || $row['order_status'] == 2 || $row['order_status'] == 3 || $row['order_status'] == 4) {echo 'active';}?>">
                                                    <span class="icon"> <i class="fa fa-check"></i> </span>
                                                    <span class="text">Order confirmed</span>
                                                </div>
                                                <div
                                                    class="step <?php if($row['order_status'] == 2 || $row['order_status'] == 3 || $row['order_status'] == 4) {echo 'active';}?>">
                                                    <span class="icon"> <i class="fa fa-user"></i> </span>
                                                    <span class="text">Prepare Order</span>
                                                </div>
                                                <div
                                                    class="step <?php if($row['order_status'] == 3 || $row['order_status'] == 4) {echo 'active';}?>">
                                                    <span class="icon"> <i class="fa fa-truck"></i> </span>
                                                    <span class="text"> Shipped Order </span>
                                                </div>
                                                <div
                                                    class="step <?php if($row['order_status'] == 4) {echo 'active';}?>">
                                                    <span class="icon"> <i class="fa fa-box"></i> </span>
                                                    <span class="text">Deliverd</span>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>



                                        <ul class="row">
                                            <?php 
                                        $getdetails = getAllOrderItemsBYOrder($row['order_id']);

                                        while($row2=mysqli_fetch_assoc($getdetails)){
                                            
                                            $img = $row2['product_image'];
                                            $img_src = "../../server/uploads/products/".$img;?>
                                            <li class="col-md-4">
                                                <figure class="itemside mb-3">
                                                    <div class="aside"><img src="<?php echo $img_src; ?>"
                                                            class="img-sm border">
                                                    </div>
                                                    <figcaption class="info align-self-center">
                                                        <p class="title"><?php echo $row2['product_name']; ?> <br>
                                                            <?php echo $row2['product_highlight']; ?></p> <span
                                                            class="text-muted">Rs.
                                                            <?php echo $row2['product_price']; ?> </span>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                        <hr>
                                        <div class="row border-primary">
                                            <div class="col-md-3"> <strong>Shipping TO</strong>
                                                <br><?php echo $row['shipping_address']; ?>
                                            </div>
                                            <div class="col-md-3"> <strong>Billing TO</strong>
                                                <br><?php echo $row['billing_address']; ?>
                                            </div>
                                            <div class="col-md-2"> <strong>Current Status</strong>
                                                <br>
                                                <?php if($row['order_status'] == 1){
                                                        echo 'Order confirmed';
                                                    }else if($row['order_status'] == 2){
                                                        echo 'Prepare Order';
                                                    } else if($row['order_status'] == 3){
                                                        echo 'Shipped Order';
                                                    } else if($row['order_status'] == 4){
                                                        echo 'Deliverd';
                                                    } else if($row['order_status'] == 5){
                                                        echo 'Canceled';
                                                    } ?>
                                            </div>
                                            <div class="col-md-2"> <strong>Tracking #</strong> <br>
                                                <?php if($row['tracking'] != 'Pending'){ echo $row['tracking']; }else{echo "Pending";}?>
                                            </div>
                                            <div class="col-md-2"> <strong>Order Purchase Date</strong>
                                                <br><?php echo $row['date_updated']; ?>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 30px;">

                                            <div class="col-md-3">
                                                <label for="order_status" class="form-label">Order Current State
                                                    Change</label>
                                                <select
                                                    onchange='updateData(this, "<?php echo $order_id; ?>","order_status", "product_orders", "order_id")'
                                                    id="order_status <?php echo $order_id; ?>"
                                                    class='form-control norad tx12' name="order_status" type='text'>
                                                    <option value="1"
                                                        <?php if ($row['order_status']=="1") echo "selected"; ?>>
                                                        Order confirmed
                                                    </option>
                                                    <option value="2"
                                                        <?php if ($row['order_status']=="2") echo "selected"; ?>>
                                                        Prepare Order
                                                    </option>
                                                    <option value="3"
                                                        <?php if ($row['order_status']=="3") echo "selected"; ?>>
                                                        Shipped Order
                                                    </option>
                                                    <option value="4"
                                                        <?php if ($row['order_status']=="4") echo "selected"; ?>>
                                                        Deliverd
                                                    </option>
                                                    <option value="5"
                                                        <?php if ($row['order_status']=="5") echo "selected"; ?>>
                                                        Canceled
                                                    </option>
                                                </select>
                                            </div>
                                            <?php if ($row['order_status'] != "5") { ?>
                                            <div class="col-md-3">

                                                <label for="tracking" class="form-label">Tracking Number</label>
                                                <input type="text"
                                                    onchange='updateData(this, "<?php echo $order_id; ?>","tracking", "product_orders", "order_id")'
                                                    class="form-control" name="tracking"
                                                    value="<?php echo $row['tracking'] ?>"
                                                    id="tracking<?php echo $row['order_id'] ?>">

                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <?php } ?>
                        </div>
                    </div>


                </div>


                <!-- /page content -->
                <?php include 'pages/footer.php'; ?>
                <!-- /footer content -->
            </div>
        </div>
    </div>

    <?php include 'inc/script.php'; ?>
</body>

<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0.10rem
}

.card-header:first-child {
    border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1)
}

.track {
    position: relative;
    background-color: #ddd;
    height: 7px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 60px;
    margin-top: 50px
}

.track .step {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: 25%;
    margin-top: -18px;
    text-align: center;
    position: relative
}

.track .step.active:before {
    background: #2c3e50
}

.track .step::before {
    height: 7px;
    position: absolute;
    content: "";
    width: 100%;
    left: 0;
    top: 18px
}

.track .step.active .icon {
    background: #2c3e50;
    color: #fff
}

.track .icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    position: relative;
    border-radius: 100%;
    background: #ddd
}

.track .step.active .text {
    font-weight: 400;
    color: #000
}

.track .text {
    display: block;
    margin-top: 7px
}

.itemside {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%
}

.itemside .aside {
    position: relative;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.img-sm {
    width: 80px;
    height: 80px;
    padding: 7px
}

ul.row,
ul.row-sm {
    list-style: none;
    padding: 0
}

.itemside .info {
    padding-left: 15px;
    padding-right: 7px
}

.itemside .title {
    display: block;
    margin-bottom: 5px;
    color: #212529
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

.btn-warning {
    color: #ffffff;
    background-color: #2c3e50;
    border-color: #2c3e50;
    border-radius: 1px
}

.btn-warning:hover {
    color: #ffffff;
    background-color: #ff2b00;
    border-color: #ff2b00;
    border-radius: 1px
}
</style>

</html>