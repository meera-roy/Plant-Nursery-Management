<?php
include("../Assets/Connection/Connection.php");
$place="";
$district="";
if(isset($_POST["btn"]))
{
$place=$_POST["p_place"];
$district=$_POST["p_district"];
$selQry = "select * from tbl_place where place_name='$place'";
$data = mysql_query($selQry);
if ($row = mysql_fetch_array($data)) {
    ?>
    <script>
        alert("Already Exist");
        </script>
    <?php
}else{
$insQry="insert into tbl_place(place_name,district_id)values('$place','$district')";
mysql_query($insQry);
}
if($_GET["did"])
{
	$did=$_GET["did"];
	$del_qry="delete from tbl_place where place_id='$did'";
	mysql_query($del_qry);
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
<title>place</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- <a href="AdminHomepage.php">Home</a> -->
<div class="container">
        <form method="post">
            <div class="text-center">
                <h1>PLACE</h1><br />
            </div>
            <table class="table table-bordered" align="center">
                <tr>
                    <th>District</th>
                    <td>
                        <select name="p_district" class="form-control">
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
                    <td><input type="text" name="p_place" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="btn" value="SUBMIT"
                            class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
        <table class="table table-bordered" align="center">
            <tr>
                <th>Sl.No</th>
                <th>District</th>
                <th>Place</th>
                <th>Action</th>
            </tr>
            <?php
$i = 0;
$sel_qry = "select * from tbl_place p inner join tbl_district d on p.district_id=d.district_id";
$data = mysql_query($sel_qry);
while ($row = mysql_fetch_array($data)) {
    $i++;
    ?>
            <tr>
                <td><?php echo $i ?></td>
                <td> <?php echo $row["district_name"]?> </td>
                <td><?php echo $row["place_name"]?> </td>
                <td><a href="Place.php?did=<?php echo $row["place_id"]?>" class="btn btn-danger">Delete</a></td></tr>
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