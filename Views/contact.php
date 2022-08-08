
<!DOCTYPE HTML>
<html>
<head>
 <style>
    body, h2, p {
        text-align: center;
    }
    .error {
        color: #FF0000;
    }
    form {
        display: inline-block;
    }
     .contact-btn{
         width: 20%;
         margin-left: 80px;
         margin-top: 10px;
         padding:5px;
     }
     .msg{
         text-align: center;
         color: forestgreen;
     }
     
  
 </style>
</head>
    

<html>
    <body>
        
 <?php
	 $nameErr = $emailErr = $subjectErr = $msgErr = "";
	 $name = $email = $subject = $msg = "";
	 
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 
		//book name
		if (empty($_POST["name"])) {
			$nameErr = "Please enter a valid name";
			} else {
			$name = test_input($_POST["name"]);
		}
			
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
		$nameErr = "Only letters and white space allowed";
		}
		
		//email
		if (empty($_POST["email"])) {
		$emailErr = "invalid email address";
		} else {
		$email = test_input($_POST["email"]);}
		
		
		//subject
		if (empty($_POST["subject"])) {
		$subjectErr = "Please type a subject";
		} else {
		$subject = test_input($_POST["subject"]);
		}


		//message
		if (empty($_POST["msg"])) {
		$msgErr = "Please type a msg";
		} else {
		$msg = test_input($_POST["msg"]);
		}
	 
     }
    
	 function test_input($data) {
	 $data = trim($data);
	 $data = stripslashes($data);
	 $data = htmlspecialchars($data);
	 return $data;
	 }
     
 ?>
 <h2>Contact form: </h2>
     <p><span class="error">* required field</span></p>
     <form method="post" action="">
         Name: <input type="text" name="name">
         <span class="error">* <?php echo $nameErr;?></span>
         <br><br>
         Email: <input type="text" name="email">
         <span class="error">* <?php echo $emailErr;?></span>
         <br><br>
         Subject: <input type="text" name="subject">
         <span class="error">*<?php echo $subjectErr;?></span>

         <br><br>
         Message: <textarea name="msg" rows="2" cols="10"></textarea>
		 <span class="error">*<?php echo $msgErr;?></span>
         <br><br>
         <input type="submit" name="submit" value="Send" class="contact-btn">
		 
     </form>
    <?php
    echo "<h2> Form information sent:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $subject;
    echo "<br>";
    echo $msg;
    echo "<br>";
    ?>       
</body>
 </html>