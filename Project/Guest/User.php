<?php
include("../Assets/Connection/Connection.php");
$district="";
if(isset($_POST["btn"]))
{
	$district=$_POST["p_district"];
	$name=$_POST['txt_name'];
	$email=$_POST['txt_email'];
	$contact=$_POST['txt_contact'];
	$address=$_POST['txt_address'];
	$place=$_POST['txt_place'];
	$password=$_POST['txt_pass'];
	$pin=$_POST['txt_pincode'];
	
	/*$image=$_FILES['file_image']['name'];
	$path=$_FILES['file_image']['tmp_name'];
	move_uploaded_file($path,"../Assets/Files/User/".$image);*/
	
	$ins="insert into tbl_user(user_name,user_contact,user_email,user_password,user_address,user_place,user_pincode) values ( '$name','$contact','$email','$password','$address','$place','$pin')";
	
	if(mysql_query($ins))
	{
		echo " User Registered";
}
else
{
	echo " Error";
}
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
<title>User</title>
</head>
<body>
<form enctype="multipart/form-data" method="post">
<div align="center">
<h1>USER REGISTRATION</h1><br /></div>
<table align="center" border="2">
<tr>
<th>Name</th>
<td><input type="text" name="txt_name" required="required" autocomplete="off" pattern="^[A-Z]+[A-Za-z ]*$"></td>
</tr>
<tr>
<th>Contact</th>
<td><input type="text" name="txt_contact" required="required" autocomplete="off" pattern="[0-9]{10,10}"></td>
</tr>
<tr>
<th>Email</th>
<td><input type="email" name="txt_email" required="required" autocomplete="off"></td>
</tr>
<tr>
<th>Address</th>
<td><input type="text" name="txt_address" required="required" autocomplete="off"></td>
</tr>
<tr>
<th>District</th>
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
<th>Place</th>
<td>
<select name="txt_place" id="txt_place">
<option value="">---Select---</option>

</select>
</td>
</tr>
<tr>
<th>Pincode</th>
<td><input type="text" name="txt_pincode" required="required" pattern="[0-9]{6,6}"  /></td>
</tr>
<tr>
<th>Password</th>
<td><input type="password" name="txt_pass" required="required" autocomplete="off" pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]){8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
        </td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="btn" value="SUBMIT">
</td>
</tr>
</table>
</form>
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