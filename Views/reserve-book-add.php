<style>
body {
    text-align: center;
}
form {
    display: inline-block;
    margin-top: 10px;
}
b{
    text-align: center;
}
.error {color: #FF0000;}
      

</style>

<html>
<body>
    
    <!-- using fomr validation library-->
    <?php
        // To print success flash message
        if(session()->get("success")){
            ?>
            <h3><?= session()->get("success") ?></h3>
            <?php
        }

        // To print error flash message
        if(session()->get("error")){
            ?>
            <h3><?= session()->get("error") ?></h3>
            <?php
        }

        // To print error messages
        if(isset($validation)){
            
            print_r($validation->listErrors() );
        }
    ?>

    <form method="post" action="<?= base_url('submitReserv')?>" >
        <b>Book reservation </b><br>
        <p><span class="error">* required field</span></p>
        <fieldset>
            <table>
            <tr><td>Enter book title: <input type="text" name="title" placeholder="Ugly Love" required> <span class="error">*</span></td></tr><br>
            <tr><td>No of reservation weeks : <input type="text" name="time" placeholder="Reservation time period" required><span class="error">*</span></td></tr><br>
            <tr><td><input type="submit" name="submitReservation"><tr><td><br>
            </table>
        </fieldset>
    </form>

</body>
</html>

