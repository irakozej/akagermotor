<?php
require("connectingdb.php");
if(isset($_post["sign"]))
{
  
$firstName = $_REQUEST["first"];
$lastName = $_REQUEST["last"];
$password = $_REQUEST["pass"];
$zip code = $_REQUEST["zip"];
$phone number= $_REQUEST["phone number"];

$query = "INSERT INTO customer (customerID, firstName, lastName, address, zip code, phone number)
values("$firstName", "$lastName", "address", "zip code", "phone number")";
$call = mysqli_query($con, $query);
if($call)
{
    echo" you have sucessfuly registered in";

}
else{
    echo " you are not yet registered in";
}

}