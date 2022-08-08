
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
 </style>
</head>
    

<html>
    <body>

    <?php
         $nameErr = $authorErr = $yearErr = "";
         $name = $author = $year = "";

         if ($_SERVER["REQUEST_METHOD"] == "POST") {

             if (empty($_POST["name"])) {
                 $nameErr = "Please enter a valid name";
                 } else {
                 $name = test_input($_POST["name"]);
             }

             // check book name only contains letters and whitespace
             if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
             $nameErr = "Only letters and white space allowed";
             }
             

             // check author 
             if (empty($_POST["email"])) {
             $authorErr = "Please enter a valid author name";
             } else {
             $author = test_input($_POST["author"]);
             }
             
              // check year 
             if (empty($_POST["year"])) {
             $yearErr = "Please enter a valid year";
             } else {
             $year = test_input($_POST["year"]);
             }

         
        }
        function test_input($data) {
             $data = trim($data);
             $data = stripslashes($data);
             $data = htmlspecialchars($data);
             return $data;
             }
     ?>     

            <form method="post" action="<?= base_url('submit')?>">
                <b><center>REGISTER A NEW BOOK </center></b><br>
                <p><span class="error">* required field</span></p>
                <fieldset>
                    <table>
                        <b><center>Book information: </center></b>
                        <tr><td>Book title: <input type="text" name="n" placeholder="Title" required><span class="error">* <?php echo $nameErr;?></span></td></tr><br>
                        <tr><td>Book author: <input type="text" name="a" placeholder="Author" required><span class="error">* <?php echo $authorErr;?></span></td></tr><br>
                        <tr><td>Year published: <input type="text" name="y" placeholder="Year" required><span class="error">* <?php echo $yearErr;?></span></td></tr><br>
                        <tr><td>Topic: <input type="text" name="t" placeholder="Topic"></td></tr><br>
                        <tr><td>Book Status: <input type="text" name="st" placeholder="Status"></td></tr><br>

                        <tr><td><input type="submit" name="s"></tr><br>
                    </table>
                </fieldset>    
           </form> 

    </body>
</html>