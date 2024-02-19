<?php
include "conn.php";

//this code is for add menus
if(isset($_POST['add_menus'])) {
    $picture=$_FILES['picture']['name'];
    $fileTmpName = $_FILES['picture']['tmp_name'];
    $description=$_POST['description'];
    $food=$_POST['food'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];

    $insert=mysqli_query($conn, "INSERT INTO stallone VALUES('0', '$picture','$description', '$food', '$quantity','$price')");

    if($insert==true){
        $fileDestination = 'upload/'.$picture;
        move_uploaded_file($fileTmpName, $fileDestination);
?>
        <script>
            alert("1 Menu Is Added!");
            window.location.href="view_menus.php";
        </script>
<?php
    }else{
?>
        <script>
            alert("Error In Adding!");
            window.location.href="add_menus.php";
        </script>
<?php
    }
}
?>
