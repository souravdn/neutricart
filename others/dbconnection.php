<?php
//connect to db
$servername="mysql-88558-0.cloudclusters.net";
 $database="neutrify";
  $username="admin";
 $password="JS1i8KdT";
// $dname="neutrify";
$PORT="11038";


$con=new mysqli($servername, $username, $password,$dname,$PORT);
if($con==TRUE){
//     echo "connected to db";
}
else{
//   echo "db connection failed";
   
}


//select db
if($con->query("USE neutrify")){
//     echo "db selected";
}
else{
//     echo "db not selected";
}

?>
