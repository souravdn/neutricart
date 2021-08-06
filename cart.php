<!DOCTYPE html>
 <link rel="shortcut icon" href="favicon.ico">
<html lang="en">
    <link href="https://fonts.googleapis.com/css2?family=Rammetto+One&display=swap" rel="stylesheet">
    <head>
        <title>MyCart</title>
    </head>
    <?php
include('./others/navbar.php');
?>
<body  class="container">
    <h1 style="  font-family: 'Rammetto One'; color:#000080" class="text-center">Items in your cart</h1>

<form action="checkout.php" method="post">

<table class="text-center table table-sm table-dark">
  <thead>
    <tr>
      <!-- <th scope="col">Sl no.</th> -->
      <th scope="col">item</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
         <?php

 if( $_SERVER['REQUEST_METHOD']=='POST'){

    $name=$_POST['title'];
    $image=$_POST['image'];
    $price=$_POST['price'];
    $qntty=$_POST['quantity'];
    $pno=$_POST['pno'];

 }


    // echo "<th scope=`row`>"  1 "</th>";
    echo "<td>" . $name .  "</td>";
    echo "<td>" . $qntty ."</td>";
    echo "<td>" . $price."</td>";
    echo"</tr>";
     ?>
  </tbody>
</table>

<input type="hidden" name="title" value="<?php echo $name ?>">
<input type="hidden" name="price" value="<?php echo $price ?>">
<input type="hidden" name="pno" value="<?php echo $pno ?>">
<input type="hidden" name="qntty" value="<?php echo $qntty ?>">
 <button type="submit" class="flex-fill btn btn-success">Checkout now</button>
    



</form>



</body>
<?php
include('./others/footer.php');
?>
</html>