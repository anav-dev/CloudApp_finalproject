<?php
session_start(); // Starting Session

function alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
}

$error=''; // Variable To Store Error Message
$loginStatusMsg = '';
if (isset($_POST['submit']))
{

    // Define $username and $password
    $username=$_POST['username'];
    $password=$_POST['password'];
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $connection = mysqli_connect("localhost", "root", "");
    // To protect MySQL injection for Security purpose
    // Selecting Database
    $db = mysqli_select_db($connection,"library");
    // SQL query to fetch information of registerd users and finds user match.
    $query = mysqli_query($connection,"select * from users where password='$password' AND username='$username'");
    $rows = mysqli_num_rows($query);
     mysqli_close($connection); // Closing Connection
    if ($rows == 1)
    {
      $_SESSION['login_user']=$username; // Initializing Session
      $_SESSION['loggedin'] = true;
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
      //header("location: hello_world.php"); // Redirecting To Other Page
      //exit();
      $loginStatusMsg = "Welcome ".$username."!";
    }
    else{
      $loginStatusMsg = "Please log in with a valid user.";
    }
}
?>



<!DOCTYPE HTML>
<html>
<head>
  <style>
    body, h3 {
        text-align: center;
    }
    form {
        display: inline-block;
    }
    .error {color: #FF0000;}
    button{
        width: 20%;
      }
    .login-btn{
        width: 35%;
        margin-left: 80px;
        margin-bottom: 10px;
        margin-top: 10px;
        text-align: center;
      }
    .msg{
        text-align: center;
        color: brown;
     }
 </style>
</head>


<body>
<h3>LOGIN</h3>
          <hr>
        <form action="" method="post" name="submit">
        <fieldset>
            <table>
                <b><center>User details: </center></b>
                <tr><td>Username: <input id="name" name="username" placeholder="Username" type="text"></td></tr><br>
                <tr><td>Password: <input id="password" name="password" placeholder="**********" type="password"></td></tr><br>
                <tr><td> <input name="submit" type="submit" value=" Login " class="login-btn"></td></tr><br>
                
                <tr><td><a href="/signup">Don't have an account yet?</a></td></tr><br>
              </table>
        </fieldset> 
        </form>

<?php if(isset($_POST["submit"])): ?>
<h2 class="msg"><?php echo $loginStatusMsg;?></h2>
<br>
<?php endif; ?>

<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
<div style="text-align: center">
<button> <a href="/">Go to main web</a></button>
<button> <a href="/books">Go to library</a></button>
<button><a href="/logout">Log out</a></button>
</div>
<?php endif; ?>

              
 
</body>