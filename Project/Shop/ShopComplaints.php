<?php
include("../Assets/Connection/Connection.php");
session_start();

if(isset($_POST["com_save"]))
{
	
	$complaint=$_POST["com_content"];
	$type=$_POST["com_type"];	
	
    $ins="insert into tbl_complaint(complainttype_id,complaint_content,complaint_date,user_id)values('$type','$complaint',curdate(),'".$_SESSION["userid"]."')";
	mysql_query($ins);
	
}

?>


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

<form method="post">
<div align="center">
<h1>COMPLAINTS</h1><br /></div>
<table align="center" width="564" border="1">
  <tr>
    <th width="180" height="75" scope="row">Complaint Type</th>
    <td align="center" width="368"><label for="com_type"></label>
      <select name="com_type" id="com_type">
      <option>--select--</option>
            <?php
		  $selQry="select * from tbl_complainttype";
		  $data=mysql_query($selQry);
		  while($row=mysql_fetch_array($data))
		  {
		?>
            <option value="<?php echo $row["complainttype_id"]?>"> <?php echo $row["complainttype_name"]?></option>
        <?php
		  }
	    ?> 
         
    </select></td>
  </tr>
  <tr>
    <th scope="row">Complaint Content</th>
    <td><label for="com_content"></label>
      <label for="com_content"></label>
    <textarea name="com_content" id="com_content" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <th align="center" height="47" colspan="2" scope="row"><input type="submit" name="com_save" id="com_save" value="Submit" />&nbsp;
    <input type="submit" name="com_cancel" id="com_cancel" value="Cancel" /></th>
  </tr>
</table><br /><br />
</form>
<div align="center"><br />
</div>
<div align="center">
  <table width="551" height="119" border="1">
    <tr>
      <th scope="col">SI.no</th>
      <th scope="col">Type</th>
      <th scope="col">Content</th>
      <th scope="col">Status</th>
      <th scope="col">Reply</th>
    </tr>
     <?php
	$i=0;
	$SelQry="select * from tbl_complaint c inner join tbl_complainttype t on c.complainttype_id=t.complainttype_id";
	$data=mysql_query($SelQry);
	while($row=mysql_fetch_array($data))
	{
		$i++;
	
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row["complainttype_name"]?></td>    
      <td><?php echo $row["complaint_content"]?></td>
      <td><?php echo $row["complaint_status"]?></td>
      <?php
	  if($row["complaint_status"]==0)
	  {
		  ?>
          <td><?php echo "Waiting";
		  ?></td>
          <?php
	  }
	  else  if($row["complaint_status"]==1)
	  {
		  ?>
          
      <td><?php echo $row["complaint_reply"]?></td>
      <?php
	  }
	  ?>
    </tr>
    <?php
	}
	?>
  </table>
</div>
</body>
<?php
ob_end_flush();
include('Foot.php');
?>
</html>
