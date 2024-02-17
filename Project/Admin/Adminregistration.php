<?php
include("../Assets/Connection/Connection.php");
$name="";
$contact="";
$email="";
$pass="";
if(isset($_POST["btn"]))
{
	$name=$_POST["admn_name"];
	$contact=$_POST["admn_contact"];
	$email=$_POST["admn_email"];
	$pass=$_POST["admn_pass"];
$ins="insert into tbl_admin(admin_name,admin_contact,admin_email,admin_password)values('$name','$contact','$email','$pass')";
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
	$delQry="delete from tbl_admin where admin_id='$aid'";
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
<title>AdminRegistration</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<!-- <a href="AdminHomepage.php">Home</a> -->
<div class="container">
        <form id="form1" name="form1" method="post" action="">
            <div class="text-center">
                <h1>ADMIN REGISTRATION</h1><br />
            </div>
            <table class="table table-bordered" align="center" style="width: 330px;">
                <tr>
                    <th width="92" scope="row">Name</th>
                    <td width="158"><input type="text" name="admn_name" id="admn_name" required="required" autocomplete="off"
                            pattern="^[A-Z]+[A-Za-z ]*$" class="form-control" /></td>
                </tr>
                <tr>
                    <th scope="row">Contact</th>
                    <td><input type="text" name="admn_contact" id="admn_contact" required="required" autocomplete="off"
                            pattern="[0-9]{10,10}" class="form-control" /></td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td><input type="email" name="admn_email" id="admn_email" required="required" autocomplete="off"
                            class="form-control" /></td>
                </tr>
                <tr>
                    <th scope="row">Password</th>
                    <td><input type="password" name="admn_pass" id="admn_pass" required="required" autocomplete="off"
                    pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]){8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" /></td>
    
                </tr>
                <tr>
                    <td height="47" colspan="2" align="center" scope="row">
                        <input type="submit" name="btn" id="Submit" value="Submit" class="btn btn-primary" />
                        <input type="reset" name="cancel" id="Cancel" value="Cancel" class="btn btn-default" />
                    </td>
                </tr>
            </table>
        </form>

        <form id="form2" name="form2" method="post" action="">
            <table class="table table-bordered" align="center" style="width: 969px;">
                <tr>
                    <th width="131" scope="col">Serial No.</th>
                    <th width="185" scope="col">Name</th>
                    <th width="163" scope="col">Contact</th>
                    <th width="171" scope="col">Email</th>
                    <th width="153" scope="col">Password</th>
                    <th width="126" scope="col">Action</th>
                </tr>
                <?php
$sel = "select * from tbl_admin";
$data = mysql_query($sel);
$i = 0;
while ($row = mysql_fetch_array($data)) {
    $i++;
    ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row["admin_name"] ?></td>
                    <td><?php echo $row["admin_contact"] ?></td>
                    <td><?php echo $row["admin_email"] ?></td>
                    <td><?php echo $row["admin_password"] ?></td>
                    <td><a href="Adminregistration.php?aid=<?php echo $row["admin_id"] ?>"
                            class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
}
?>
            </table>
        </form>
    </div>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>