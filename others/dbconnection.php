<?php
//connect to db
$servername="mysql-43037-0.cloudclusters.net";
 $database="neutrify";
  $username="sourav";
 $password="Debnath@1";
// $dname="neutrify";
$PORT="17303";


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
