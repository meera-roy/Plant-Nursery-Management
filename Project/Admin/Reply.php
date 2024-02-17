<?php
include("../Assets/Connection/Connection.php");
session_start();
 
 if (isset($_POST["rply_save"]))
 {
	 $reply=$_POST["rply_content"];
	 $upQry="update tbl_complaint set complaint_reply='$reply' where complaint_id='".$_GET['did']."'";
	 $data=mysql_query($upQry);
	 mysql_query($upQry);
	 $up2="update tbl_complaint set complaint_status='1' where complaint_id='".$_GET['did']."'";
	 $data1=mysql_query($up2);
	 mysql_query($up2);

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
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<!-- <a href="AdminHomepage.php">Home</a> -->
<h1 align="center">REPLY</h1>
<div class="container">
        <form method="post">

            <table class="table table-bordered" align="center" style="width: 516px;">
                <tr>
                    <th width="164" height="56" scope="row">Reply Content</th>
                    <td width="336"><textarea name="rply_content" id="rply_content" cols="45" rows="5"
                            class="form-control"></textarea></td>
                </tr>
                <tr>
                    <th colspan="2" height="39" scope="row">
                        <input type="submit" name="rply_save" id="rply_save" value="Submit" class="btn btn-primary" />
                        <input type="reset" name="rply_cancel" id="rply_cancel" value="Cancel" class="btn btn-default" />
                    </th>
                </tr>
            </table>
        </form>
    </div>
</body>

<?php
include('Foot.php');
ob_flush();
?>


</html>