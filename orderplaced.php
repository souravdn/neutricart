<?php
 if( $_SERVER['REQUEST_METHOD']=='POST'){

    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $ph=$_POST['ph'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    $country=$_POST['country'];
    $pymethod=$_POST['paymentmethod'];
    $pname=$_POST['pname'];
    $price=$_POST['price'];
    $pno=$_POST['pno'];
    $qntty=$_POST['qntty'];

 }
require('./others/dbconnection.php');
$sql="INSERT INTO `order_log` (`fullname`, `email`, `address`, `pincode`, `country`, `pymethod`, `pname`, `price`, `pno`, `qntty`, `ph`, `time`)
 VALUES ('$fname', '$email', '$address', '$pincode', '$country', '$pymethod', '$pname', '$price', '$pno', '$qntty','$ph','')";


if($con->query($sql)==TRUE){
    // echo "order placed";
}
else{
    // echo" order not placed";
}

?>




<!-- *******************confirmation page copy past********************************* -->







<!DOCTYPE html>
<link rel="shortcut icon" href="favicon.ico">
<html>

<head>

    <title>Order placed successfully</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
    body,
    table,
    td,
    a {
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }

    table,
    td {
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
    }

    img {
        -ms-interpolation-mode: bicubic;
    }

    img {
        border: 0;
        height: auto;
        line-height: 100%;
        outline: none;
        text-decoration: none;
    }

    table {
        border-collapse: collapse !important;
    }

    body {
        height: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        width: 100% !important;
    }

    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }

    @media screen and (max-width: 480px) {
        .mobile-hide {
            display: none !important;
        }

        .mobile-center {
            text-align: center !important;
        }
    }

    div[style*="margin: 16px 0;"] {
        margin: 0 !important;
    }
    </style>
    <div class="container"> <?php
include('./others/navbar.php');
?></div>

<body style="margin: 0 !important; padding: 0 ;>

    </div>
    <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;"
        >
        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
            <tr>
                <td align="right" valign="top"
                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;">
                    <table cellspacing="0" cellpadding="0" border="0" align="right">
                        <tr>


                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    </td>
    </tr>
    <tr>
        <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                <tr>
                    <td align="center"
                        <h2 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;">
                            Congratulation! <?php echo $fname ;?> ,Your order placed successfully.</h2>
                    </td>
                </tr>
                <tr>
                    <td align="center"
                        style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                        <img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png" width="125"
                            height="120" style="display: block; border: 0px;" /><br>
                        <h2 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;">
                            Thank You For Your Order! </h2>
                    </td>
                </tr>

                <tr>
                    <td align="left" style="padding-top: 20px;">
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td width="75%" align="left" bgcolor="#eeeeee"
                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
                                    Order Confirmation # </td>
                                <td width="25%" align="left" bgcolor="#eeeeee"
                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
                                    1234 </td>
                            </tr>
                            <tr>
                                <td width="75%" align="left"
                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                    Purchased Item (1) </td>
                                <td width="25%" align="left"
                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                   &#8377;  <?php echo $price?> </td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="left" style="padding-top: 20px;">
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td width="75%" align="left"
                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
                                    TOTAL </td>
                                <td width="25%" align="left"
                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
                                  &#8377;   <?php echo $price?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center" height="100%" valign="top" width="100%"
            style="padding: 0 35px 35px 35px; background-color: #ffffff;" bgcolor="#ffffff">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px;">
                <tr>
                    <td align="center" valign="top" style="font-size:0;">
                        <div
                            style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%"
                                style="max-width:300px;">
                                <tr>
                                    <td align="left" valign="top"
                                        style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                        <p style="font-weight: 800;">Delivery Address</p>
                                        <p> <?php echo $address?></p>
                                        <p> <?php echo $pincode?></p>
                                        <p> <?php echo $country?></p>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div
                            style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%"
                                style="max-width:300px;">
                                <tr>
                                    <td align="left" valign="top"
                                        style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                        <p style="font-weight: 800;">Estimated Delivery Date</p>
                                        <?php
                                        $date=startotime("+10 day",date("d/m/y"));

                                        ?>
                                        <p><?php echo date("d/m/y");?></p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>

</body>

</html>