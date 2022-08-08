 <style>
    body {
        text-align: center;
    }
    form {
        display: inline-block;
    }
 </style>


<html>
    <body>
        <form method="post" name="updateuser" action="<?= site_url('/update1Book') ?>" >
        <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>" >
            Name: <input type="text" name="n" value="<?php echo $user_obj['name']; ?>" ><br>
            Author: <input type="text" name="a" value="<?php echo $user_obj['author']; ?>" ><br> 
            Year: <input type="text" name="y" value="<?php echo $user_obj['year']; ?>" ><br> 
            Topic: <input type="text" name="t" value="<?php echo $user_obj['topic']; ?>" ><br> 
            Status: <input type="text" name="st" value="<?php echo $user_obj['status']; ?>" ><br> 
            <input type="submit" name="s" value="Update"><br>
        
        </form>
    </body>
</html>