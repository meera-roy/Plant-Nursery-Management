<?php
include("../Assets/Connection/Connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Search</title>
</head>
<body><div align="center">
    <h1>Product Search</h1>
    <form method="post" action="IconWork.php">
        <input type="text" name="search" placeholder="Search Product">
        <input type="submit" name="submit" value="Search">
    </form></div>

       <p align="center"><a href="IconWork.php"><?php $_POST['submit']?></a></p>

</body>
</html>