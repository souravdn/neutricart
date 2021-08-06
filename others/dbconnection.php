<?php
//connect to db
$servername="mysql-43037-0.cloudclusters.net";
 $database="neutrify";
  $username="sourav";
 $password="Debnath@1";
$dname="neutrify";
$host="17303";


$con=new mysqli($servername, $username, $password,$dname);
if(!$con){
    echo "db connection failed";
}
else{
    echo "connected to db";
}


//select db
if($con->query("USE neutrify")){
    echo "db selected";
}
else{
    echo "db not selected";
}

$sql="SELECT * FROM `order_log` WHERE 1";
$result=$con->query($sql);
foreach($result as $value){
echo "fuckoff". $value['fullname'];
}

?>
