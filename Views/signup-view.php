<style>
body {
    text-align: center;
}
table {
    display: inline-block;
    margin-top: 10px;
}
h3{
    text-align: center;
}

.signup-btn{
    margin:15px;
}
</style>


<html>
    <body>
        <h3>Users registered</h3>
        <table border="1">
            <tr>
                <th>Serial number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Update</th>
                <th>Delete</th>         
            </tr>
            <?php foreach($u as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    <td><?php echo $user['gender']; ?></td>
                    <td><a href="<?php echo base_url('update/'.$user['id']);?>">Update</a></td>
                    <td><a href="<?php echo base_url('delete/'.$user['id']);?>">Delete</a></td>            
                </tr>  
            <?php endforeach; ?>
        </table>
        <br>
        <button class="signup-btn"> <a href="/login">Log in</a></button> 
    </body>
</html>