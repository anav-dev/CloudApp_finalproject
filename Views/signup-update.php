<style>
body {
    text-align: center;
}
form {
    display: inline-block;
    margin-top: 10px;
}
h3{
    text-align: center;
}
</style>


<html>
    <body>
        <h3>Update your details:</h3>
        <form method="post" name="updateuser" action="<?= site_url('/update1') ?>" >
        <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>" >
            name: <input type="text" name="username" value="<?php echo $user_obj['username']; ?>" ><br>
            email: <input type="text" name="email" value="<?php echo $user_obj['email']; ?>" ><br> 
            password: <input type="text" name="password" value="<?php echo $user_obj['password']; ?>" ><br>
            gender: <input type="text" name="gender" value="<?php echo $user_obj['gender']; ?>" ><br>
            <input type="submit" name="submit" value="Update"><br>
        
        </form>
    </body>
</html>