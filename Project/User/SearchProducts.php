<?php
include("../Assets/Connection/Connection.php");
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
<form id="form1" name="form1" method="post" action="">
<h1 align="center">CONTACT</h1><br />
  <table align="center" width="277" border="2">
    <tr>
      <th>Address</th>
      <td>Edapally,Kochi</td>
</tr>
    <tr>
      <th width="90" scope="row">Email</th>
      <td>edenplanthouse@gmail.com</td>
</tr>
<tr>
<th width="90" scope="row">Call Us</th>
<td>+91 9047122710</td>
</tr>
<tr>
  <th>Open Hours</th>
  <td>Mon-Sat:8am to 9pm</td>
</tr>
</table>
</form>
</body>
<?php
ob_end_flush();
include('Foot.php');
?>
</html>