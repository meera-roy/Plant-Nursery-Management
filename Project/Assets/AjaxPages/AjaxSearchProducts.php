 <?php
include("../Connection/Connection.php");
?>
 <table align="center"  border="2">
   
    <tr>
      <?php
      $selQry="select * from tbl_product where type_id=".$_GET['pid'];
      $data=mysql_query($selQry);
while($row=mysql_fetch_array($data))
{
	?>
    <td>
      <p align="center"><img src="../Assets/Files/User/<?php echo $row["product_image"] ?>" height="100" width="100"/></p>
    <p>Name:
    <?php echo $row["product_name"]?></p>
     <!-- <p>Description:
       <?php //echo $row["product_description"]?></p> -->
      <p>Rate:
       <?php echo $row["product_rate"]?></p>
         <p align="center"><a href="ViewDetails.php?did=<?php echo $row["product_id"]?>">View Details</a></p>
       </td>
        <?php
	if($i==6){
		?>
        </tr>
        <tr>
        <?php
		$i=0;
	}
    }
?>
</tr>
  </table>