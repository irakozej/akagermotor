<?php
session_start();
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="form.css">
    </head>
    <body>
        <form action="loginproccess.php" method="POST">
            <div class="form">
    <div class="mydiv">
        <label for="">username</label><br>
        <input type="text" name="user" required><br>
  
    <div class="mydiv">
        <label for="">passward</label><br>
            <input type="password" name="pass" required><br>
    
    </div>
    <div class="mydiv">
              <button type="submit" id="go" name="signup">logIn</button>
            </div>
           
            
        </form>
    
        <script src="index.js"></script>
    </body>
    </html>