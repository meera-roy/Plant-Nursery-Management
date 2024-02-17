<?php
include("../Assets/Connection/Connection.php");
session_start(); 

$sel="select * from tbl_shop where shop_id='".$_SESSION["shopid"]."'";
$data=mysql_query($sel);
$row=mysql_fetch_array($data);


if(isset($_POST["btn"]))
{
	$name=$_POST["sp_name"];
	$contact=$_POST["sp_contact"];
	$email=$_POST["sp_email"];
	$address=$_POST["sp_address"];
	$upQry="update tbl_shop set shop_name='$name',shop_contact='$contact',shop_email='$email',shop_address='$address' where shop_id='".$_SESSION["shopid"]."'";
	$data=mysql_query($upQry);
}
?>


<?php
include("../Assets/Connection/Connection.php");
session_start();
ob_start();
include('Head.php');
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!-- <a href="ShopHomePage.php">Home</a> -->
<h1 align="center">EDIT PROFILE</h1>
<form method="post">
<table align="center" border="2">
<tr>
<th>Name</th>
<td><input type="text" name="sp_name" id="sp_name" value="<?php echo $row["shop_name"]?>" required="required" autocomplete="off" pattern="^[A-Z]+[A-Za-z ]*$"></td>
</tr>
<tr>
<th>Contact</th>
<td><input type="text" name="sp_contact" id="sp_contact" value="<?php echo $row["shop_contact"]?>"  required="required" autocomplete="off" pattern="[0-9]{10,10}"></td>
</tr>
<tr>
<th>Email</th>
<td><input type="email" name="sp_email" id="sp_email" value="<?php echo $row["shop_email"]?>" required="required" autocomplete="off"></td>
</tr>
<tr>
<th>Address</th>
<td><input type="text" name="sp_address" id="sp_address" value="<?php echo $row["shop_address"]?>" required="required" autocomplete="off"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="btn" value="SUBMIT">
</td>
</tr>
</table>
</form>
</body>
<?php
ob_end_flush();
include('Foot.php');
?>
</html>