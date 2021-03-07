<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit artikel</title>
</head>
<body>

    <?php 
            // if(isset($_POST['submit'])){

            // }

    ?>

    <form action="edit_artikel.php" method="post">
                <!-- doorgaan met setten van value met ternary operator -->
        <input type="hidden" name="artikelcode" value="<?php echo $_GET['artikel_id']?>">
        <input type="text" name="artikel" placeholder="artikel">
        <input type="text" name="prijs" placeholder="prijs">
        <input type="submit" value="Wijzig">
    </form>
    
</body>
</html>