<?php
    include "conn.php";
    session_start(); 

    //this is for registration

    if(isset($_POST['reg'])){

        $ln=$_POST['ln'];
        $fn=$_POST['fn'];
        $studnumber=$_POST['studnumber'];
        $cn=$_POST['cn'];
        $department=$_POST['department'];
        $phinmaemail=$_POST['phinmaemail'];
        $pass=$_POST['pass'];
        $designation=$_POST['designation'];
        $status="New";

        //validate
        $validate = mysqli_query($conn, "SELECT * FROM defense WHERE phinmaemail = '$phinmaemail' ");

        $val_num = mysqli_num_rows($validate);

        if($val_num <= 0){

            $insert = mysqli_query($conn, "INSERT INTO defense VALUES
            ('0', '$ln', '$fn', '$studnumber', '$cn', '$department', '$phinmaemail', '$pass','$designation','$status' )");

            if($insert==true){
                ?>
                <script> 
                    alert("You Are Successfully Registered!");
                    window.location.href="index.html";
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Error in Registrating! \n Please Try Again!");
                    window.location.href="index.html";
                </script>
                <?php
            }
        }else{
            ?>
                <script>
                    alert("PHINMA Email Is In Use!");
                    window.location.href="index.html";
                </script>
                <?php
            }
        }
    
//this program is for login

if(isset($_POST['login'])){

    $phinmaemail = $_POST['phinmaemail'];
    $pass = $_POST['pass'];

    $check_login = mysqli_query($conn, "SELECT * FROM defense WHERE phinmaemail = '$phinmaemail' AND pass = '$pass' ");

    $n = mysqli_num_rows($check_login);

    if($n <=0){
        ?>
        <script>
        alert("Wrong PHINMA Email or Password");
        window.location.href = "index.html";
        </script>
        <?php
    }else{
        $_SESSION['phinmaemail']=$phinmaemail;
        ?>
        <script>
        alert("Login Successfully");
        window.location.href = "index.html";
        </script>
        <?php
    }
}
    