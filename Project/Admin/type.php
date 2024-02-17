<?php
include("../Assets/Connection/Connection.php");
$name="";
if(isset($_POST["btn"]))
{
	$name=$_POST["t_name"];
$ins="insert into tbl_type(type_name)values('$name')";
mysql_query($ins);
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
<title>Type</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<!-- <a href="AdminHomepage.php">Home</a> -->
<h1 align="center">TYPE</h1>
<div align="center" class="container">
        <form id="form1" name="form1" method="post" action="">
            <table class="table" align="center" style="width: 283px; height: 62px;">
                <tr>
                    <td width="131">TYPE</td>
                    <td width="136">
                        <input type="text" name="t_name" id="t_name" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="51" align="center">
                        <input type="submit" name="btn" id="btn" value="SAVE" class="btn btn-primary" />
                        <input type="reset" name="button2" id="button2" value="CANCEL" class="btn btn-default" />
                    </td>
                </tr>
            </table>
        </form>
        <!-- <table align="center" width="200" border="1">
    <tr>
      <td>Sl No</td>
      <td>Type</td>
      <td>Action</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table> -->
    </div>
</body>

<?php
include('Foot.php');
ob_flush();
?>



</html>