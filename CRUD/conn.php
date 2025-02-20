<?php
//March 11 2024

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "crud_db";

$conn = mysqli_connect($localhost,$username,$password,$dbname);


//$conn = mysqli_connect("localhost","root","","crud_db");
if ($conn) {
    echo "connect";
}
else {
    echo "not connect";
}

?>