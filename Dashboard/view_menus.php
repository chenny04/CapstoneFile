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
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
        }

        .navigation {
            text-align: center;
            margin: 30px 0;
        }

        h1 {
            font-size: 30px;
        }

        table {
            width: 30%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid red;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: red;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: white;
        }

        tr:hover {
            background-color: white;
        }
        img {
            max-width: 190px;
            max-height: 100px;
        }
         u{
       
        }
        </style>
</head>
<body>
    <u> <a href="add_menus.php" color: red;>Back</a></u>
<center>
    <h1>View Menu </h1>
    
     <table border="3px solid">
        <tr>
            <th>IMAGE</th>
            <th>DESCRIPTION</th>
            <th>MENU</th>
          <th>QUANTITY</th>   
           <th>PRICE</th>
           
           
          
        </tr>

        <?php
            $get_menus = mysqli_query($conn, "SELECT * FROM stallone");
            while($row = mysqli_fetch_array($get_menus)){

          
        ?>

        <tr>
            <td> <img src="upload/<?php echo $row ['picture']; ?>" width="190px" height="100px"> </td>
            <td> <?php echo $row ['description']; ?></td> 
            <td> <?php echo $row ['food']; ?></td>
         <td> <?php echo $row ['quantity']; ?></td>    
           <td> <?php echo $row ['price']; ?></td>
        </tr>

        <?php } ?>
    </table></center>
</body>
</html>


