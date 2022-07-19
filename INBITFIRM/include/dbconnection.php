<?php

$servername = "localhost";
$username = "root";
$pass = "";


$cony =  mysqli_connect($servername,$username,$pass);

if ($cony == true) {
    echo "Connect Successfully";
}
else
{
    die("connection Failed". mysqli_connect_error());
}


// $sql = "CREATE DATABASE inbDB";
// if (mysqli_query($cony,$sql)) {
//    echo "Database Created ....";
// }
// elseif($sql = true){
//     echo "<br>Database already Created ....";

// }
// else{
//     echo "Error in creating DB ". mysqli_errno($cony);
// }

mysqli_close($cony);




?>