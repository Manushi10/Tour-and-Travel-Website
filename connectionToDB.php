<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "travelweblogin";

$conn = mysqli_connect($server, $user, $pass, $database);

if ($conn) {
    echo "Success";
}else{
    die("<script>alert('Failed To Connect To Database.')</script>");
}

?>