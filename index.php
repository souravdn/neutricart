<!doctype html>
 <link rel="shortcut icon" href="favicon.ico">
<html>
<title>welcome to NeutriCart home page</title>
<?php
include('./others/navbar.php');
?>

<body class="container">

    <div class=row>
        <?php
require('./others/dbconnection.php');

$query="SELECT * FROM `shopping_cart` order by id ASC ";
$result=$con->query($query);
// name`, `image`, `price`, `discount`

$row=mysqli_num_rows($result);

if($row>0){
    foreach($result as $value)
    {
        ?>
        <!-- card -->

        <div class="col-lg-3 col-md-3 col-sm-12">
            <form action="cart.php" method="post">
                <div class="card">
                    <h6 class="card-title bg-warning p-2"> <?php echo $value['name'] ?> </h6>
                    <div class="card-body">
                        <img src="./images/<?php echo $value['image'] ?> " alt="neutrybalze image" class="img-fluid">
                        <h6 > &#8377; <?php echo $value['price'] ?> <span>( <?php echo $value['discount'] ?>% discount)
                            </span> </h6>
                        <h7 class="badge badge-success"> 4.5 <i class="fa fa-star"></i></h7>
                        <input type="number" name="quantity" value=1>
                    </div>
                </div>
                          <input type="hidden" name="title" value="<?php echo $value['name'] ?>">
                          <input type="hidden" name="price" value="<?php echo $value['price'] ?>">
                          <input type="hidden" name="image" value="<?php echo $value['image'] ?>">
                          <input type="hidden" name="pno" value="<?php echo $value['id'] ?>">
                <div class="d-flex">
                    <button type="submit" name="add_to_cart" class="flex-fill btn btn-primary">Add to cart</button>
                    <button type="submit" name="add_to_cart" class="flex-fill btn btn-success">Buy now</button>
                </div>
                <br> <br> <br>
            </form>
        </div>

        <?php
    }

}



?>

    </div>

</body>

</html>