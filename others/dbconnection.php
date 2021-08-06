<?php
//connect to db

$con=new mysqli("mysql-43037-0.cloudclusters.net","admin","6DCiZH15");
if(!$con){
    // echo "db connection failed";
}
else{
    // echo "connected to db";
}


//select db
if($con->query("USE project_shoppingcart")){
    // echo "db selected";
}
else{
    // echo "db not selected";
}
?>