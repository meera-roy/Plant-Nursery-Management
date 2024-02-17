<?php
include("../Assets/Connection/Connection.php");
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
<div align="center">
<h1 align="center">VIEW COMPLAINTS</h1>
<div class="container">
        <form>
            <table class="table table-bordered" style="width: 854px; height: 154px;">
                <tr>
                    <th scope="col">SI No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Username</th>
                    <th scope="col">Complaint Type</th>
                    <th scope="col">Content</th>
                    <th scope="col">Reply</th>
                </tr>
                <?php
$i = 0;
$SelQry = "select * from tbl_complaint c inner join tbl_complainttype t on c.complainttype_id=t.complainttype_id inner join tbl_user u on c.user_id=u.user_id";
$data = mysql_query($SelQry);
while ($row = mysql_fetch_array($data)) {
    $i++;
    ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row["complaint_date"] ?></td>
                    <td><?php echo $row["user_name"] ?></td>
                    <td><?php echo $row["complainttype_name"] ?></td>
                    <td><?php echo $row["complaint_content"] ?></td>
                    <td>
                        <div align="center"><a href="Reply.php?did=<?php echo $row["complaint_id"] ?>"
                                class="btn btn-primary">Reply</a></div>
                    </td>

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