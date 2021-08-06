 <?php
 if( $_SERVER['REQUEST_METHOD']=='POST'){

    $pname=$_POST['title'];
    $price=$_POST['price'];
    $pno=$_POST['pno'];
    $qntty=$_POST['qntty'];

 }

 ?>




<!doctype html>
 <link rel="shortcut icon" href="favicon.ico">
<html lang="en">
  <div class="container"> <?php include('./others/navbar.php')?></div>
 ; ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>CheckOut</title>
  </head>
  <body>
      
      <div class="container">
       <h1>You have selected : <?php echo "$pname" ;?> !</h1>
       <h5>Please fillup below info to place the order</h5>
 <form action="orderplaced.php" method="post">
  <div class="form-group">
    <label >Full name:</label>
    <input required name="fname" type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg. Sourav Debnath">
  </div>
  <div class="form-group">
    <label >Email:</label>
    <input required name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="eg. sourav@xyz.com">
  </div>
  <div class="form-group">
    <label >Phone number:</label>
    <input required name="ph" type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg. 84******77">
  </div>
  <div class="form-group">
    <label >Address:</label>
    <input required name="address" type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg. Delhi,pune">
  </div>
  <div class="form-group">
    <label >Area Pincode:</label>
    <input required name="pincode" type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg. 40001">
  </div>

  <div class="form-group">
    <label >Country:</label>
    <select required name="country" class="form-control" id="exampleFormControlSelect1">
      <option>India</option>
      <option>Bangladesh</option>
      <option>America</option>
      <option>Russia</option>
      <option>Japan</option>
    </select>
  </div>
  
  <div class="form-group">
    <label ></label>Payment method:</label>
    <select required name="paymentmethod" class="form-control" id="exampleFormControlSelect1">
      <option>Cash On Delivery</option>
      <option>Debit card(NA)</option>
      <option>upi(NA)</option>
      <option>credit card(NA)</option>
      <option>net banking(NA)</option>
    </select>
  </div>

<input type="hidden"  name="pname"   value="<?php echo $pname ?>">
<input type="hidden" name="price"   value="<?php echo $price ?>">
<input type="hidden"  name="pno"  value="<?php echo $pno ?>">
<input type="hidden"  name="qntty"  value="<?php echo $qntty ?>">




  <button class="flex-fill btn btn-success" type="submit">Place order</button>
</form>
   </div>
   


  </body>
</html>

 