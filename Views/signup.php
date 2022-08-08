<!DOCTYPE HTML>
<html>
<head>
  <style>
    body {
        text-align: center;
    }
    form {
        display: inline-block;
    }
    .error {color: #FF0000;}
      h3{
          text-align: center;
      }
 </style>
</head>
<body>

<!DOCTYPE HTML>
<html>
    <head>
    <style>
         .error {color: #FF0000;}
     </style>
    </head>
<body>
    
 <?php

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

	 $nameErr = $emailErr = $genderErr = $passwordErr = "";
	 $name = $email = $gender = $password = "";

    if (isset ($_POST['submit'])) {  
        echo "Submit button is clicked.";  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            echo "Data is sent using POST method ";  
        }  
    } else {  
        //echo "Data is not submitted";  
    }
	 
	function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>
 <h3>SIGN UP</h3>
    <hr>
        <?php
            $action = ''; 
            if(isset($redirect) && $redirect == "f") {
                $action = "#";
            } else {
                $action = "<?= base_url('submitNewUser')?>";
            }
        ?>

        <form method="post" action="<?= base_url('submitNewUser')?>">
                <b><center>Sign up details: </center></b>
                 <p><span class="error">* required field</span></p>
                 Name: <input type="text" name="username" placeholder="Full name" required>
                 <span class="error">* <?php echo $nameErr;?></span>
                 <br><br>
                 E-mail address: <input type="text" name="email" placeholder="Email" required>
                 <span class="error">* <?php echo $emailErr;?></span>
                 <br><br>
                 Password: <input type="text" name="password" placeholder="Password" required>
                 <span class="error">* <?php echo $passwordErr;?></span> 
                 <br><br>
                 Gender:
                 <input type="radio" name="gender" value="female">Female
                 <input type="radio" name="gender" value="male">Male
                 <input type="radio" name="gender" checked value="nd">Not Defined
                 <span class="error">* <?php echo $genderErr;?></span>
                 <br><br>
                 <input type="submit" name="submit" value="Sign up">
     </form>
</body>
</html>





