
<?php
include("../Assets/Connection/Connection.php");
session_start();
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
<!-- <a href="AdminHomepage.php">Home</a><div align="center"> -->
<h1 align="center">USER BOOKINGS</h1><br />

<div class="container">
        <form id="form1" name="form1" method="post" action="">
            <table class="table table-bordered" style="width: 100%;">
                <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Date</th>
                    <th scope="col">Product</th>
                    <th scope="col">Image</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Rate</th>
                </tr>
                <?php
$i = 0;
$SelQry = "select * from tbl_booking b inner join tbl_cart c on b.booking_id=c.booking_id inner join tbl_product p on c.product_id=p.product_id inner join tbl_user u on u.user_id=b.user_id where b.user_id ='".$_SESSION["userid"]."'";
$data = mysql_query($SelQry);
while ($row = mysql_fetch_array($data)) {
    $i++;
    ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row["user_name"] ?></td>
                    <td><?php echo $row["user_contact"] ?></td>
                    <td><?php echo $row["booking_date"] ?></td>
                    <td><?php echo $row["product_name"] ?></td>
                    <td>
                        <p align="center"><img src="../Assets/Files/User/<?php echo $row["product_image"] ?>" height="100"
                                width="100" /></p>
                    </td>
                    <td><?php echo $row["booking_quantity"] ?></td>
                    <td><?php echo $row["booking_amount"] ?></td>
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