
    <?php
include "conn.php";
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View_Menus</title>
</head>
<body>

  <div class="navigation" style="margin-bottom: 30px; fon-size: 30px;">

    <a href="view_products.php">View Menu </a>
    
    <table border="3px solid">
        <tr>
            <th>IMAGE</th>
            <th>MENU NAME</th>
            <th>PRICE</th>
        </tr>

        <?php
            $get_menus = mysqli_query($conn, "SELECT * FROM stallone");
            while($row = mysqli_fetch_array($get_menus)){

          
        ?>

        <tr>
            <td> <img src="upload/<?php echo $row ['picture']; ?>" width="150px" height="100px"> </td>
            <td> <?php echo $row ['fname']; ?></td>
            <td> <?php echo $row ['price']; ?></td>
        </tr>

        <?php } ?>
    </table>
</body>
</html>
</body>
</html>