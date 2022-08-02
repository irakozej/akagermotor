<?php
session_start();
if(isset($_POST["signup"]))
{
    extract($_POST);
    include 'connectingdb.php';
    $username = $_POST["user"];
    $password = $_POST["pass"];

    $query = "SELECT * FROM customer WHERE  username= '$username' AND password = '$password'";
    $call = mysqli_query($con, $query);

    $row = mysqli_fetch_array($call);

    if(is_array($row))
    {
        $_SESSION["username"] = $row['username'];
        $_SESSION["password"] = $row['password'];

        header('location: UPDATED_bellox.html');
        exit();
    }else
    {
        echo "invaid username or password";
    }
}
?>