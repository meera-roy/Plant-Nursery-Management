<?php
include("../Assets/Connection/Connection.php");
$name="";
$contact="";
$email="";
$address="";
$proof="";
$photo="";
$district="";
$place="";
$pass="";
if(isset($_POST["btn"]))
{
	$name=$_POST["shp_name"];
	$contact=$_POST["shp_contact"];
	$email=$_POST["shp_email"];
	$pass=$_POST["shp_pass"];
	$address=$_POST["shp_address"];
	$proof=$_FILES['shp_proof']['name'];
	$pathproof=$_FILES['shp_proof']['tmp_name'];
	move_uploaded_file($path,"../Assets/Files/User/".$image);
	$photo=$_FILES['shp_photo']['name'];
	$pathphoto=$_FILES['shp_photo']['tmp_name'];
	move_uploaded_file($path,"../Assets/Files/User/".$image);
	$district=$_POST["shp_dis"];
	$place=$_POST["txt_place"];
$ins="insert into
tbl_shop(shop_name,shop_contact,shop_email,shop_address,shop_photo,shop_proof,place_id,shop_password)values
('$name','$contact','$email','$address','$photo','$proof','$place','$pass')";
if(mysql_query($ins))
	{
		echo " User Registered";
}
else
{
	echo " Error";
}
}
if($_GET["aid"])
{
	$aid=$_GET["aid"];
	$delQry="delete from tbl_shop where shop_id='$aid'";
	mysql_query($delQry);
}
?>


<?php
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
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<div align="center">
<h1>SHOP REGISTRATION</h1><br /></div>
  <table align="center" width="374" border="1">
    <tr>
      <th width="161" scope="row">Name</th>
      <td width="197"><label for="shp_name"></label>
      <input type="text" name="shp_name" id="shp_name" required="required" autocomplete="off" pattern="^[A-Z]+[A-Za-z ]*$" /></td>
    </tr>
    <tr>
      <th scope="row">Contact</th>
      <td><label for="shp_contact"></label>
      <input type="text" name="shp_contact" id="shp_contact" required="required" autocomplete="off" pattern="[0-9]{10,10}"></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><label for="shp_email"></label>
      <input type="email" name="shp_email" id="shp_email" required="required" autocomplete="off"></td>
    </tr>
    <tr>
      <th scope="row">Address</th>
      <td><label for="shp_address"></label>
      <input type="text" name="shp_address" id="shp_address" required="required" autocomplete="off"></td>
    </tr>
    <tr>
      <th scope="row">Photo</th>
      <td><label>
        <input type="file" name="shp_photo" id="fileField"/>
      </label></td>
    </tr>
    <tr>
      <th scope="row">Proof</th>
      <td><label>
        <input type="file" name="shp_proof" id="fileField2" />
      </label></td>
    </tr>
    <tr>
      <th scope="row">District</th>
      <td>
      <select name="p_district" onchange="getPlace(this.value)">

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
      <th scope="row">Place</th>
      <td><label>
        <select name="txt_place" id="txt_place">
        <option value="">---select---</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <th scope="row">Password</th>
      <td><label for="shp_pass"></label>
      <input type="password" name="shp_pass" id="shp_pass" required="required" autocomplete="off" pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]){8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" /></td>
    </tr>
   
 
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="btn" id="button" value="Register" />
      <input type="reset" name="button2" id="button2" value="Cancel" /></th>
    </tr>
  </table>
</form>
<p align="center">&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="areg_name2"></label>
  </p>
  <table align="center" width="969" height="117" border="1">
    <tr>
      <th width="131" scope="col">Serial No.</th>
      <th width="185" scope="col">Name</th>
      <th width="163" scope="col">Contact</th>
      <th width="171" scope="col">Email</th>
      <th width="153" scope="col">Address</th>
      <th width="126" scope="col">Photo</th>
      <th width="126" scope="col">Proof</th>
      <th width="126" scope="col">Place</th>
      <th width="126" scope="col">Password</th>
      <th width="126" scope="col">Action</th>
    </tr>
    <?php
	$sel="select * from tbl_shop";
	$data=mysql_query($sel);
	$i=0;
	while($row=mysql_fetch_array($data))
	{
		$i++;
	?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $row["shop_name"]?></td>
      <td><?php echo $row["shop_contact"]?></td>
      <td><?php echo $row["shop_email"]?></td>
      <td><?php echo $row["shop_address"]?></td>
      <td><?php echo $row["shop_photo"]?></td>
      <td><?php echo $row["shop_proof"]?></td>
      <td><?php echo $row["place_id"]?></td>
      <td><?php echo $row["shop_password"]?></td>
      <td><a href="shopregistration.php?aid=<?php echo $row["shop_id"]?>">Delete</a></td>
    </tr>
    <?php
	}
	?>
   
  </table>
</body>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
function getPlace(did)
{
	$.ajax({
		url:"../Assets/AjaxPages/Ajaxplace.php?pid="+did,
		success: function(html){
			$("#txt_place").html(html);
			
		}
	});
}
</script>
<?php
ob_end_flush();
include('Foot.php');
?>
</html>