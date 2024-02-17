<?php
include("../Assets/Connection/Connection.php");
$dis="";
if(isset($_POST["btn"]))
{
    $dis=$_POST["dis_district"];
    $selQry = "select * from tbl_district where district_name='$dis'";
    $data = mysql_query($selQry);
    if ($row = mysql_fetch_array($data)) {
        ?>
        <script>
            alert("Already Exist");
            </script>
        <?php
    }else{
    $ins="insert into tbl_district(district_name)values('$dis')";
    mysql_query($ins);
    }
}
if($_GET["did"])
{
	$did=$_GET["did"];
	$delQry="delete from tbl_district where district_id='$did'";
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
<title>District</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- <a href="AdminHomepage.php">Home</a> -->
<div class="container">
        <form method="post">
            <div class="text-center">
                <h1>DISTRICT</h1><br />
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>District</th>
                    <td><input type="text" name="dis_district" required="required" autocomplete="off"
                            class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center"><input type="submit" name="btn" value="SUBMIT"
                            class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
        <table class="table table-bordered">
            <tr>
                <th>Sl.No</th>
                <th>District</th>
                <th>Action</th>
            </tr>
            <?php
$i = 0;
$selQry = "select * from tbl_district";
$data = mysql_query($selQry);
while ($row = mysql_fetch_array($data)) {
    $i++;
    ?>
            <tr>
                <td><?php echo $i ?></td>
                <td> <?php echo $row["district_name"]?> </td>
                <td><a href="District.php?did=<?php echo $row["district_id"]?>" class="btn btn-danger">Delete</a></td>
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