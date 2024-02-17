<?php
include("../Assets/Connection/Connection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
  
        $searchTerm = $_POST['search'];

        // Query to search for products
        $query = "SELECT * FROM tbl_product p inner join tbl_type t on p.type_id=t.type_id WHERE product_name LIKE '%$searchTerm%'";

        // Execute the query
        $result = mysql_query($query);

        // Display the search results
        if (mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
				?>
                
                <table align="center"  border="2">
                <tr><td colspan="2" align="center">
               
				
  <p align="center"><img src="../Assets/Files/User/<?php echo $row["product_image"] ?>" height="100" width="100"/></p></td></tr>
  <th width="96" height="40" scope="row">Name</th>
    <td width="336"><label for="p_name">
    <?php echo $row["product_name"]?></label></td>
  </tr>
 <tr>
    <th width="96" height="40" scope="row">Category</th>
    <td width="336"><label for="p_category"><?php echo $row["type_name"]?></label></td>
  </tr> 
  <tr>
    <th height="43" scope="row">Rate</th>
    <td><label for="p_rate"><?php echo $row["product_rate"]?></label></td>
  </tr>
   <tr>
    <th height="52" scope="row">Description</th>
    <td><label for="p_description"><?php echo $row["product_description"]?></label></td>
  </tr>
  <tr>
    <th height="52" scope="row">Care Instructions</th>
    <td><label for="p_cinstn"><?php echo $row["product_careinstructions"]?></label></td>
  </tr>
  <?php
                echo "<hr>";?></td>
                <?php
            }
        } else {
            echo "<p>No products found.</p>";
        }
    ?></tr></table>
</body>
</html>