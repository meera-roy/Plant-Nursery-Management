<?php
include("../Assets/Connection/Connection.php");
session_start(); 


if(isset($_POST["btn_update"]))
{
	$sel="select * from tbl_shop where shop_id='".$_SESSION["shopid"]."'";
	$data=mysql_query($sel);
	$row=mysql_fetch_array($data);
	$db_pass=$row["shop_password"];
	$current_pass=$_POST["cp_pass"];
	$new_pass=$_POST["np_pass"];
	$re_pass=$_POST["re_pass"];
	
	if($db_pass==$current_pass)
	{
		if($new_pass==$re_pass)
		{
			$upQry="update tbl_shop set shop_password='$new_pass' where shop_id='".$_SESSION["shopid"]."'";
			
			if($data=mysql_query($upQry))
			{
				echo "Password Updated";
			}
			else
			{
				echo"Failed";
			}
		}
		else
		{
			echo "Password Mismatch";
		}
	}
	else
	{
		echo "Invalid Current Password";
	}
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
<title>Shop Change Password</title>
</head>
<body>
<!-- <a href="ShopHomePage.php">Home</a> -->
<form method="post">
<div align="center">
<h1>CHANGE PASSWORD</h1><br /></div>
<table align="center" border="2">
<tr>
<th>Current Password</th>
<td><input type="password" name="cp_pass" required="required" autocomplete="off" /></td>
</tr>
<tr>
<th>New Password</th>
<td><input type="password" name="np_pass" required="required" autocomplete="off" /></td>
</tr>
<tr>
<th>Re-Password</th>
<td><input type="password" name="re_pass" required="required" autocomplete="off" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="btn_update" value="UPDATE">
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