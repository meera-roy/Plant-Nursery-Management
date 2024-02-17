<?php
include("../Assets/Connection/Connection.php");
$place="";
$district="";
if(isset($_POST["btn"]))
{
$place=$_POST["p_place"];
$district=$_POST["p_district"];
$insQry="insert into tbl_place(place_name,district_id)values('$place','$district')";
mysql_query($insQry);
}
if($_GET["did"])
{
	$did=$_GET["did"];
	$del_qry="delete from tbl_place where place_id='$did'";
	mysql_query($del_qry);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>place</title>
</head>
<body>
<form method="post">
<table align="center" border="2">
<tr>
<th>District</th>
<td>
<select name="p_district">

<option value="">-----Select----</option>
<?php
$sel_qry="select * from tbl_district";
$data=mysql_query($sel_qry);
while($row=mysql_fetch_array($data))
{
	?>
    <option value="<?php echo $row["district_id"] ?>"><?php echo $row["district_name"]?></option>
    <?php
}
?>
</select>

</td>
</tr>
<tr>
<th>Place</th>
<td><input type="text" name="p_place"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="btn" value="SUBMIT">
</td>
</tr>
</table>
<table align="center" border="2">
<tr>
<th>Sl.No</th>
<th>District</th>
<th>Place</th>
<th>Action</th>
</tr> <br /><br />
<?php
$i=0;
$sel_qry="select * from tbl_place p inner join tbl_district d on p.district_id=d.district_id";
$data=mysql_query($sel_qry);
while($row=mysql_fetch_array($data))
{
	$i++;
	?>
    <tr>
    <td><?php echo $i ?></td>
    <td> <?php echo $row["district_name"]?> </td>
    <td><?php echo $row["place_name"]?> </td>
    <td><a href="../Admin/Place.php?did=<?php echo $row["place_id"]?>">Delete</a></td></tr>
    <?php
}
?>
</table>
</form>
</body>
</html>