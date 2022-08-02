<?php
$server ="localhost";
$user= "root";
$pass= "";
$database= "akagera_motors";
$con = mysqli_connect($server, $user, $pass, $database);
if($con=== false)
{
    die("error: not connected") . mysqli_error($con);
}
?>