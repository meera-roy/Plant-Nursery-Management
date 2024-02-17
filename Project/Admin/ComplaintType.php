<?php
include("../Assets/Connection/Connection.php");
$comp="";
if(isset($_POST["comp_save"]))
{
	$comp=$_POST["comp_type"];
$ins="insert into tbl_complainttype(complainttype_name)values('$comp')";
mysql_query($ins);
}
if($_GET["did"])
{
	$did=$_GET["did"];
	$delQry="delete from tbl_complainttype where complainttype_id='$did'";
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
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<!-- <a href="AdminHomepage.php">Home</a> -->
<h1 align="center">COMPLAINT TYPE</h1>
<div class="container">
        <form method="post">
            <table class="table table-bordered" align="center" style="width: 383px;">
                <tr>
                    <th width="184" height="45" scope="row">Complaint Type</th>
                    <td align="center" width="183"><input type="text" name="comp_type" id="comp_type"
                            class="form-control" /></td>
                </tr>
                <tr>
                    <th colspan="2" scope="row"><input type="submit" name="comp_save" id="comp_save" value="Submit"
                            class="btn btn-primary" />&nbsp;
                        <input type="submit" name="comp_cancel" id="comp_cancel" value="Cancel" class="btn btn-default" />
                    </th>
                </tr>
            </table>
        </form>
        <br /><br />
        <table class="table table-bordered" style="width: 405px; height: 112px;" align="center">
            <tr>
                <th width="62" scope="col">Sl.No</th>
                <th width="188" scope="col">Complaint Type</th>
                <th width="133" scope="col">Action</th>
            </tr>
            <?php
$i = 0;
$selQry = "select * from tbl_complainttype";
$data = mysql_query($selQry);
while ($row = mysql_fetch_array($data)) {
    $i++;
    ?>
            <tr>
                <td><?php echo $i ?></td>
                <td> <?php echo $row["complainttype_name"]?> </td>
                <td><a href="ComplaintType.php?did=<?php echo $row["complainttype_id"]?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
}
?>
        </table>
    </div>
</body>

<?php
include('Foot.php');
ob_flush();
?>

</html>