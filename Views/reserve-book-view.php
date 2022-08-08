
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
    <table border="1">
        <tr>
        <th> Reservation No</th>
        <th> Book title </th>
        <th> Reservation time </th>
        <th> Delete </th>
        </tr>
        <?php foreach($u as $user): ?>
            <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['title']; ?></td>
            <td><?php echo $user['time'];?></td>
            <td> <a href="<?php echo base_url('deleteReservation/'.$user['id']);?>">Delete</a></td>
            
            </tr>
        <?php endforeach; ?>
    </table>
    <p>Have any doubt?</p>
    <button> <a href="/contact">Contact us</a></button>
</body>
</html>