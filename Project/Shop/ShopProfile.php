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
<title>MyProfile</title>
</head>
<body>
<?php
$sel="select * from tbl_shop s inner join tbl_place p on p.place_id=s.place_id inner join tbl_district d on d.district_id =p.district_id where shop_id='".$_SESSION["shopid"]."'";
$data=mysql_query($sel);
$row=mysql_fetch_array($data);
?>
<div align="center">
<h1>MY PROFILE</h1><br /></div>
<table width="537" height="173" border="2" align="center">
<tr>
<th width="187">Name</th>
<td width="332"><?php echo $row["shop_name"]?></td>
</tr>
<tr>
<th>Contact</th>
<td><?php echo $row["shop_contact"]?></td>
</tr>
<tr>
<th>Email</th>
<td><?php echo $row["shop_email"]?></td>
</tr>
<tr>
<th>Address</th>
<td><?php echo $row["shop_address"]?></td>
</tr>
<tr>
  <th>District</th>
  <td><?php echo $row["district_name"]?></td>
</tr>
<tr>
  <th>Place</th>
  <td><?php echo $row["place_name"]?></td>
</tr>
</table>
</body>
<?php
ob_end_flush();
include('Foot.php');
?>
</html>