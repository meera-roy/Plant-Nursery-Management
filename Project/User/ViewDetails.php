<?php
include("../Assets/Connection/Connection.php");
session_start();
ob_start();
include('Head.php');

if(isset($_POST["c_btn"]))
{
$sel="select * from tbl_booking where user_id='".$_SESSION["userid"]."' and booking_status='0'";
$data=mysql_query($sel);
if($row=mysql_fetch_array($data))
{
	$selcart="select * from tbl_cart where booking_id='".$row["booking_id"]."' and product_id='".$_GET["did"]."'";
	$datacart=mysql_query($selcart);
	
	if($rowcart=mysql_fetch_array($datacart))
			{
				echo "Already Added";
			}
			else
			{
			    $ins="insert into tbl_cart (booking_id,product_id) values ('".$row["booking_id"]."','".$_GET["did"]."')";
				mysql_query($ins);
			}
}
else
{
	
	$insb="insert into tbl_booking(user_id)values('".$_SESSION["userid"]."')";
	if(mysql_query($insb))
	{
	
	$selb="select max(booking_id) as id from tbl_booking";
	$data=mysql_query($selb);
	$row = mysql_fetch_array($data);
	
	
	$ins2="insert into tbl_cart (booking_id,product_id) values ('".$row["id"]."','".$_GET["did"]."')";
	mysql_query($ins2);

		}
}
	
}




if(isset($_POST["b_btn"]))
{
$sel="select * from tbl_booking where user_id='".$_SESSION["userid"]."' and booking_status='0'";
$data=mysql_query($sel);
if($row=mysql_fetch_array($data))
{
	$selcart="select * from tbl_cart where booking_id='".$row["booking_id"]."' and product_id='".$_GET["did"]."'";
	$datacart=mysql_query($selcart);
	
	if($rowcart=mysql_fetch_array($datacart))
			{
				echo "Already Added";
			}
			else
			{
			    $ins="insert into tbl_cart (booking_id,product_id) values ('".$row["booking_id"]."','".$_GET["did"]."')";
				mysql_query($ins);
			}
}
else
{
	
	$insb="insert into tbl_booking(user_id)values('".$_SESSION["userid"]."')";
	if(mysql_query($insb))
	{
	
	$selb="select max(booking_id) as id from tbl_booking";
	$data=mysql_query($selb);
	$row = mysql_fetch_array($data);
	
	
	$ins2="insert into tbl_cart (booking_id,product_id) values ('".$row["id"]."','".$_GET["did"]."')";
	mysql_query($ins2);

		}
}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Details</title>
</head>
<body>
<h1 align="center">DETAILS</h1>
<form method="post">
<table  align="center" width="444" border="1">
 <?php
      $selQry="select * from tbl_product p inner join tbl_type t on p.type_id=t.type_id where product_id=".$_GET['did'];
      $data=mysql_query($selQry);
while($row=mysql_fetch_array($data))
{
	?>
<tr><td colspan="2" align="center"><img src="../Assets/Files/User/<?php echo $row["product_image"] ?>" height="200" width="200"/></td></tr>
  <tr>
    <th width="96" height="40" scope="row">Name</th>
    <td width="336"><label for="p_name">
    <?php echo $row["product_name"]?></label></td>
  </tr>
 <tr>
    <th width="96" height="40" scope="row">Category</th>
    <td width="336"><label for="p_category"><?php echo $row["type_name"]?></label></td>
  </tr> 
  <tr>
    <th height="43" scope="row">Rate</th>
    <td><label for="p_rate"><?php echo $row["product_rate"]?></label></td>
  </tr>
   <tr>
    <th height="52" scope="row">Description</th>
    <td><label for="p_description"><?php echo $row["product_description"]?></label></td>
  </tr>
  <tr>
    <th height="52" scope="row">Care Instructions</th>
    <td><label for="p_cinstn"><?php echo $row["product_careinstructions"]?></label></td>
  </tr>
  <?php
}
?>
  <tr>
    <td height="47" colspan="2" align="center" scope="row">
	<!--<input type="submit" name="b_btn" id="Submit" value="Buy" />&nbsp;-->
    <input type="submit" name="c_btn" id="submit" value="Add To Cart" /></td>
  </tr>
</table>
</body>
<?php
ob_end_flush();
include('Foot.php');
?>
</html>