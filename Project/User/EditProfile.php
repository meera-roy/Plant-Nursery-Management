<?php
include("../Assets/Connection/Connection.php");
session_start(); 
$sel="select * from tbl_user where user_id='".$_SESSION["userid"]."'";
$data=mysql_query($sel);
$row=mysql_fetch_array($data);
ob_start();
include('Head.php');


if(isset($_POST["btn"]))
{
	$name=$_POST["ep_name"];
	$contact=$_POST["ep_contact"];
	$email=$_POST["ep_email"];
	$address=$_POST["ep_address"];
	$upQuery="update tbl_user set user_name='$name',user_contact='$contact',user_email='$email',user_address='$address' where user_id='".$_SESSION["userid"]."'";
	$data=mysql_query($upQuery);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Profile</title>
</head>
<body>
<!-- <a href="HomePage.php">Home</a> -->
<div align="center"><h1>EDIT PROFILE</h1><br /></div>

<form method="post">
<table align="center" border="2">
<tr>
<th>Name</th>
<td><input type="text" name="ep_name" id="ep_name" value="<?php echo $row["user_name"]?>" required="required" autocomplete="off" pattern="^[A-Z]+[A-Za-z ]*$"></td>
</tr>
<tr>
<th>Contact</th>
<td><input type="text" name="ep_contact" id="ep_contact" value="<?php echo $row["user_contact"]?>"  required="required" autocomplete="off" pattern="[0-9]{10,10}"></td>
</tr>
<tr>
<th>Email</th>
<td><input type="email" name="ep_email" id="ep_email" value="<?php echo $row["user_email"]?>" required="required" autocomplete="off"></td>
</tr>
<tr>
<th>Address</th>
<td><input type="text" name="ep_address" id="ep_address" value="<?php echo $row["user_address"]?>" required="required" autocomplete="off"></td>
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