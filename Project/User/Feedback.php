<?php
include("../Assets/Connection/Connection.php");
session_start();
ob_start();
include('Head.php');

if(isset($_POST["feed_save"]))
{
	$feed=$_POST["feed_content"];
	$ins="insert into tbl_feedback(feedback_content,feedback_date,user_id)values('$feed',curdate(),'".$_SESSION["userid"]."')";
	mysql_query($ins);
	
}


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
<h1>FEEDBACK</h1><br /></div>
<table align="center" border="0">
  <tr>
    <th  scope="row">Feedback Content</th>
    <td><label for="feed_content"></label>
    <textarea name="feed_content" id="feed_content" required="required" cols="45" rows="3"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" scope="row" align="center">
    <input type="submit" name="feed_save" id="feed_save" value="Submit" />
    <input type="submit" name="feed_cancel" id="feed_cancel" value="Cancel" /></td>
  </tr>
</table>
</form>
</body>
<?php
ob_end_flush();
include('Foot.php');
?>
</html>