<?php
include("../Assets/Connection/Connection.php");
session_start();
$name="";
$type="";
$image="";
$rate="";
$sdet="";
$cinstn="";
$des="";
if(isset($_POST["btn"]))
{
	$name=$_POST["p_name"];
	$type=$_POST["p_type"];
	$image=$_FILES['p_image']['name'];
	$pathphoto=$_FILES['p_image']['tmp_name'];
	move_uploaded_file($pathphoto,"../Assets/Files/User/".$image);
	$rate=$_POST["p_rate"];
	$cinstn=$_POST["p_cinstn"];
	$des=$_POST["p_des"];
$ins="insert into tbl_product(product_name,type_id,shop_id,product_image,product_rate,product_description,product_careinstructions)values('$name','$type','".$_SESSION["shopid"]."','$image','$rate','$des','$cinstn')";
mysql_query($ins);
}
if($_GET["did"])
{
	$did=$_GET["did"];
	$delQry="delete from tbl_product where product_id='$did'";
	mysql_query($delQry);
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
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<div align="center">
<h1>ADD PRODUCTS</h1><br /></div>
  <table align="center" width="505" border="1">
    <tr>
      <th width="153" scope="row">Product Name</th>
      <td width="336"><label for="p_name"></label>
      <input type="text" name="p_name" id="p_name" /></td>
    </tr>
    <tr>
      <th scope="row">Type</th>
      <td><label>
        <select name="p_type" id="p_type">
        <option value="">---select---</option>
        <?php
$sel_qry="select * from tbl_type";
$data=mysql_query($sel_qry);
while($row=mysql_fetch_array($data))
{
	?>
    <option value="<?php echo $row["type_id"] ?>"><?php echo $row["type_name"]?></option>
    <?php
}
?>
        </select>
      </label></td>
    </tr>
    <tr>
      <th scope="row">Image</th>
      <td><label>
        <input type="file" name="p_image" id="p_image" />
      </label></td>
    </tr>
    <tr>
      <th scope="row">Rate</th>
      <td><label for="p_rate"></label>
      <input type="text" name="p_rate" id="p_rate" /></td>
    </tr>
     <tr>
      <th height="128" scope="row">Care Instructions</th>
      <td><label for="p_cinstn"></label>
      <textarea name="p_cinstn" id="p_cinstn" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <th height="115" scope="row">Description</th>
      <td><label for="p_des"></label>
      <textarea name="p_des" id="p_des" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <th height="51" colspan="2" scope="row"><input type="submit" name="btn" id="button" value="Save" />
      <input type="reset" name="button2" id="button2" value="Cancel" /></th>
    </tr>
  </table><br /><br />
  <table align="center" border="2">
<tr>
<th>Sl.No</th>
<th>Name</th>
<th>Type</th>
<th>Image</th>
<th>Rate</th>
<th>Care Instructions</th>
<th>Description</th>
<th>Action</th>
<th>Quantity</th>
</tr> <br /><br />
<?php
$i=0;
$selQry="select * from tbl_product p inner join tbl_type t on p.type_id=t.type_id";
$data=mysql_query($selQry);
while($row=mysql_fetch_array($data))
{
	$i++;
	?>
    <tr>
    <td><?php echo $i ?></td>
    <td> <?php echo $row["product_name"]?></td>
	<td> <?php echo $row["type_name"]?></td>
    <td><img src="../Assets/Files/User/<?php echo $row["product_image"] ?>" height="100" width="100"/> </td>
	<td> <?php echo $row["product_rate"]?></td>
    <td> <?php echo $row["product_careinstructions"]?> </td>
	<td> <?php echo $row["product_description"]?> </td>
	<td><a href="AddProducts.php?did=<?php echo $row["product_id"]?>">Delete</a></td>
    <td><a href="AddStock.php?did=<?php echo $row["product_id"]?>">Stock</a></td></tr>
    <?php
}
?>
</table>
</form>
</body>
<?php
ob_end_flush();
include('Foot.php');
?>
</html>