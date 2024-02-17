<?php
include("../Assets/Connection/Connection.php");
session_start();
ob_start();
include('Head.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!-- <a href="HomePage.php">Home</a> -->
<div align="center">
<h1>MY BOOKINGS</h1><br />
<form id="form1" name="form1" method="post" action="">
  <table width="789" height="124" border="1">
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Date</th>
      <th scope="col">Product</th>
      <th scope="col">Image</th>
      <th scope="col">Quantity</th>
      <th scope="col">Rate</th>
      <th scope="col">Status</th>
    </tr>
    <tr>
    <?php
  $i=0;
  $SelQry="select * from tbl_booking b inner join tbl_cart c on b.booking_id=c.booking_id inner join tbl_product p on c.product_id=p.product_id  where b.user_id ='".$_SESSION["userid"]."'";
  $data=mysql_query($SelQry);
  while($row=mysql_fetch_array($data))
  {
	  $i++;
	  ?>
      <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row["booking_date"] ?></td>
      <td><?php echo $row["product_name"] ?></td>
      <td><p align="center"><img src="../Assets/Files/User/<?php echo $row["product_image"] ?>"height="100" width="100"/> </p></td>
      <td><?php echo $row["booking_quantity"] ?></td>
      <td><?php echo $row["booking_amount"] ?></td>
    <td>
    <?php 
	      if($row["booking_status"]==1 && $row["cart_status"]==1)
					{
						?>
                        payment Pending 
                        <?php 
					}
					else if($row["booking_status"]==1 && $row["cart_status"]==1)
					{
						?>
                      Payement Completed
                       
                        <?php 
					}
					else if($row["booking_status"]==1 && $row["cart_status"]==2)
					{
						?>
                       Product Packed
                      
                        <?php 
					}
					else if($row["booking_status"]==1 && $row["cart_status"]==3)
					{
						?>
                      Product Shipped
                        <?php 
					}
					else if($row["booking_status"]==1 && $row["cart_status"]==4)
					{
						?>
                           Order Completed /
                           <a href="bill.php?id=<?php echo $row["cart_id"] ?>">Bill</a>|<a href="ProductRating.php?pid=<?php echo $row["product_id"] ?>">Rate Now</a>
                        <?php 
					}
					?>

    </td>  
    </tr>
      <?php
  }
  ?>
 
</table>
  </table></div>
</form>
</body>
<?php
ob_end_flush();
include('Foot.php');
?>
</html>