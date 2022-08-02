<?php
extract($_POST);
include("connectingdb.php");
if(isset($_POST["signup"]))
{ 
    $firstName = $_REQUEST["first"];
    $lastName = $_REQUEST["last"];
    $addres = $_REQUEST["address"];
    $zipcode = $_REQUEST["zip"];
    $phonenumber = $_REQUEST["phone"];
    $username = $_REQUEST["username"];
    $password = $_REQUEST["pass"];
    $email = $_REQUEST["email"];
    $sql = mysqli_query($con, "SELECT * FROM customer WHERE username ='$username' AND email = '$email'");
    if(mysqli_num_rows($sql)>0)
    {
        echo "user already exist";

}
$numrows = mysqli_num_rows($sql);
if ($numrows== 0)
{
    $query = "INSERT INTO customer(firstname, lastname, address, zipcode, phonenumber, username, password, email) VALUES ('$firstName', '$lastName', '$address', '$zipcode', '$phonenumber', '$username', '$password', '$email' )";
    
    $call = mysqli_query($con, $query);
}

}
?>
<!DOCTYPE html>
<HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <form action="" method="post">
        <div class="form">
<div class="mydiv">
    <label for="">firstName</label><br>
    <input type="text" name="first" required><br>
</div>
<div class="mydiv">
    <label for="">lastName</label><br>
    <input type="text" name="last" required><br>
</div>
<div class="mydiv">
    <label for="">e-mail</label><br>
    <input type="text" name="email" required><br>
</div>
<div class="mydiv">
    <label for="">passward</label><br>
        <input type="password" name="pass" required><br>
</div>
<div class="mydiv">
    <label for="">zip code</label><br>
    <input type="text" name="zip" required><br>
</div>
<div class="mydiv">
    <label for="">address</label><br>
    <input type="text" name="address" required><br>
</div>
<div class="mydiv">
    <label for="">phone number</label><br>
    <input type="number" name="phone" required><br>
</div>
<div class="mydiv">
    <label for="">username</label><br>
    <input type="text" name="username" required><br>
</div>
<div class="mydiv">
    <label for="">comfirm passward</label><br>
    <input type="password" name="pass" required><br>

</div>
<div class="mydiv">
          <button type="submit" id="go" name="signup">signUp</button>
        </div>
        <p>Already have an account <a href="loginbutton.html"> logIn</a>  </p>
        </div>
        
    </form>

    <script src="index.js"></script>
</body>
</html>
