<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        $_SESSION['loggedin'] = false;
        session_destroy();
    }
?>

<!DOCTYPE HTML>
<html>
    <style>
    body {
        text-align: center;
    }
    .logout {
        text-align: center;
        display: inline-block;
    }
    .logout-btn{
        width:60%;
        margin:10px;
        padding:5px;
        
    }
    
 </style>
<body>
    <div class="logout">
        <h3>You are logged out</h3>  
        <button class="logout-btn"><a href="/login">Log in</a></button>
        <button class="logout-btn"><a href="/signup">Sign up</a></button>    
    </div>
   
</body>