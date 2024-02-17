<?php
include("../Assets/Connection/Connection.php");
session_start();
?>


<?php
include("../Assets/Connection/Connection.php");
session_start();
ob_start();
include('Head.php');
if(isset($_GET["cid"]))

	{
		$upQry="update tbl_cart set cart_status='".$_GET["sts"]."' where cart_id='".$_GET["cid"]."' ";
		if(mysql_query($upQry))
		{
			?>
            <script>
				window.location="ViewBookings.php";
			</script>
            <?php
		}
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>USER BOOKINGS</h1><br />

<form id="form1" name="form1" method="post" action="">
  <table width="789" height="124" border="1">
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">User Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Date</th>
      <th scope="col">Product</th>
      <th scope="col">Image</th>
      <th scope="col">Quantity</th>
      <th scope="col">Rate</th>
      <th>Action</th>
    </tr>
    <tr>
    <?php
  $i=0;
  $SelQry="select * from tbl_booking b inner join tbl_cart c on b.booking_id=c.booking_id inner join tbl_product p on c.product_id=p.product_id inner join tbl_user u on u.user_id=b.user_id where p.shop_id ='".$_SESSION["shopid"]."' and booking_status=1";
  $data=mysql_query($SelQry);
  while($row=mysql_fetch_array($data))
  {
	  $i++;
	  ?>
      <tr>
      <td><?php echo $i ?></td>
       <td><?php echo $row["user_name"] ?></td>
        <td><?php echo $row["user_contact"] ?></td>
      <td><?php echo $row["booking_date"] ?></td>
      <td><?php echo $row["product_name"] ?></td>
      <td><p align="center"><img src="../Assets/Files/User/<?php echo $row["product_image"] ?>"height="100" width="100"/> </p></td>
      <td><?php echo $row["booking_quantity"] ?></td>
      <td><?php echo $row["booking_amount"] ?></td>
      <td>
      <?php  if($row["booking_status"]==1 && $row["cart_status"]==1)
					{
						
						?>
                        payment completed /
                        <a href="ViewBookings.php?cid=<?php echo $row ["cart_id"];?>&sts=2">Pack product</a>
                        <?php 
					}
					else if($row["booking_status"]==1 && $row["cart_status"]==2)
					{
						?>
                        product packed /
                        <a href="ViewBookings.php?cid=<?php echo $row ["cart_id"];?>&sts=3">Ship Product</a>
                        <?php 
					}
					else if($row["booking_status"]==1 && $row["cart_status"]==3)
					{
						?>
                        product shipped /
                        <a href="ViewBookings.php?cid=<?php echo $row ["cart_id"];?>&sts=4">Product Delivered</a>
                        <?php 
					}
					else if($row["booking_status"]==1 && $row["cart_status"]==4)
					{
						?>
                       Order Completed
                        <?php 
					}
					?>
  </td>
      </tr>
      <?php
  }
  ?>
  </table>
  </div>
</form>
</body>
<?php
ob_end_flush();
include('Foot.php');
?>
</html>