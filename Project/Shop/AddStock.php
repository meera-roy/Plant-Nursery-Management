<?php
include("../Assets/Connection/Connection.php");
$qty="";
if(isset($_POST["btn"]))
{
	
	$did=$_GET[did];
	$qty=$_POST["s_qty"];
$ins="insert into tbl_stock(stock_quantity,product_id)values('$qty','$did')";
mysql_query($ins);
   
}
if($_GET["sid"])
{
	$did=$_GET["sid"];
	$delQry="delete from tbl_stock where stock_id='$did'";
	mysql_query($delQry);
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!-- <a href="ShopHomePage.php">Home</a> -->
<h1 align="center"><u>ADD STOCKS</u></h1>
<form id="form1" name="form1" method="post" action="">
  <table align="center" width="306" border="1">
    <tr>
      <th width="122" height="55" scope="row">Quantity</th>
      <td width="168"><label for="s_qty"></label>
      <input type="text" name="s_qty" id="s_qty" required="required" autocomplete="off" /></td>
    </tr>
    <tr>
      <th height="45" colspan="2" scope="row"><input type="submit" name="btn" id="btn" value="Save" />
      <input type="reset" name="button2" id="button2" value="Cancel" /></th>
    </tr>
  </table><br /><br />
  <table align="center" width="310" height="93" border="1">
    <tr>
      <th height="50" scope="row">Sl.No</th>
      <td>Product Name</td>
      <td>Quantity</td>
      <td>Action</td>
    </tr>
    <?php
$i=0;
$selQry="select * from tbl_stock s inner join tbl_product p on s.product_id=p.product_id";
$data=mysql_query($selQry);
while($row=mysql_fetch_array($data))
{
	$i++;
	?>
    <tr>
    <td><?php echo $i ?></td>
    <td> <?php echo $row["product_name"]?></td>
    <td> <?php echo $row["stock_quantity"]?></td>
	<td><a href="AddStock.php?sid=<?php echo $row["stock_id"]?>">Delete</a></td>
    <?php
}
?>
  </table>
</form>
</body>
</html>