
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
p{
    text-align: center;
    font-size:25px;
}
</style>



<html>
    <body>
        <h3>New books registered view</h3>
        <table border="1">
            <tr>
                <th>Book number</th>
                <th>Book name</th>
                <th>Author</th>
                <th>Year</th>
                <th>Topic</th>
                <th>Status</th>
                <th>Update</th>
                <th>Delete</th>            
                </tr>
                <?php foreach($u as $user): ?>
                        <tr>
                                <td><?php echo $user['id']; ?></td>
                                <td><?php echo $user['name']; ?></td>
                                <td><?php echo $user['author']; ?></td>
                                <td><?php echo $user['year']; ?></td>
                                <td><?php echo $user['topic']; ?></td>
                                <td><?php echo $user['status']; ?></td>
                                <td><a href="<?php echo base_url('updateBook/'.$user['id']);?>">Update</a></td>
                                <td><a href="<?php echo base_url('deleteBook/'.$user['id']);?>">Delete</a></td>        
                            
                </tr>  
                <?php endforeach; ?>
            
        </table>
        <p>Would you like to reserve a book?</p>
        <button> <a href="/books">Book reservation</a></button>
    </body>
</html>