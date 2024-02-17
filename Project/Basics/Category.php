<?php
include("../Assets/Connection/Connection.php");
$dis="";
if(isset($_POST["btn"]))
{
	$dis=$_POST["dis_district"];
$ins="insert intotbl_category(category_name)values('$dis')";
mysql_query($ins);
}
if($_GET["did"])
{
	$did=$_GET["did"];
	$delQry="delete fromtbl_category where category_id='$did'";
	mysql_query($delQry);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>District</title>
</head>
<body>
<form method="post">
<table align="center" border="2">
<tr>
<th>District</th>
<td><input type="text" name="dis_district"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="btn" value="SUBMIT">
</td>
</table>
<table align="center" border="2">
<tr>
<th>Sl.No</th>
<th>District</th>
<th>Action</th>
</tr> <br /><br />
<?php
$i=0;
$selQry="select * from tbl_category";
$data=mysql_query($selQry);
while($row=mysql_fetch_array($data))
{
	$i++;
	?>
    <tr>
    <td><?php echo $i ?></td>
    <td> <?php echo $row["category_name"]?> </td>
	<td><a href="../Admin/District.php?did=<?php echo $row["category_id"]?>">Delete</a></td></tr>
    <?php
}
?>
</table>
</form>
</body>
</html>