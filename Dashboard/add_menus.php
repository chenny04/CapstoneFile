<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
<style>
body{
    background-color:white;
}
.navigation {
    margin-bottom: 30px;
    font-size: 30px;
}

.navigation a {
    text-decoration: ;
    margin-right: 20px;
    color: red; 
}


form {
    max-width: 400px;
    margin-bottom: 80px auto;
    padding: 30px;
    background: white; 
    border: 1px solid red;
    border-radius: 8px;
}

label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
    
}

input[type="file"],
input[type="text"] {
    width: 80%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid red;
    border-radius: 5px;
}

input[type="submit"] {
    background: red; 
    color: white; 
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    cursor: pointer;
}

p {
    margin: 10px 0;
}
</style>
</head>
<body>

<u> <a href="index.html" color: red;>Back</a></u>

    <div class="navigation" style="margin-bottom: 30px; fon-size: 30px;">
<u><a href="add_menus.php">Add Menus</a></u> 
<u><a href="add_menus.php">|</a></u>
<u> <a href="dashboardlogin.php">View Menus </a></u>
   </div>


    

 <center>   
<form action ="process.php" method ="POST" enctype="multipart/form-data">
<div class="form">
     <label>Picture</label></br>
     <input type="file" name="picture" required 
     accept=".jpg, .png, .gif, .jpeg, .webp, .jfif"> </p>

     <label>Menu</label></br>
     <input type="text" name="food" required placeholder="Enter Menu.."></p>

     <label>Description</label></br>
     <input type="text" name="description" required placeholder="Enter Description.."></p>

     <label>Quantity</label></br>
     <input type="text" name="quantity" required placeholder="Enter Quantity..."></p>

     <label>Price</label></br>
     <input type="text" name="price" required placeholder="Enter Price..."></p>
     
     <input type="submit" name="add_menus" value="ADD">
    </form>
</div></center>
</body>
</html>