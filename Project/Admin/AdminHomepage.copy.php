<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
  <h1><u>WELCOME :: <?php echo $_SESSION['aname']?></u>
  </h1>
</div>
<table align="center" width="200" border="1">
  <tr>
    <th scope="row"><a href="Adminregistration.php">AdminRegistration</a></th>
  </tr>
  <tr>
    <th scope="row"><a href="District.php">District</a></th>
  </tr>
  <tr>
    <th scope="row"><a href="Place.php">Place</a></th>
  </tr>
  <tr>
    <th scope="row"><a href="ComplaintType.php">Complaint Type</a></th>
  </tr>
  <tr>
    <th scope="row"><a href="type.php">Type</a></th>
  </tr>
  <tr>
    <th scope="row"><a href="Reply.php">Reply</a></th>
  </tr>
  <tr>
    <th scope="row"><a href="ViewComplaints.php">View Complaints</a></th>
  </tr>
  <tr>
    <th scope="row"><a href="ViewFeedbacks.php">View Feedbacks</a></th>
  </tr> 
  <tr>
    <th scope="row"><a href="ViewUserBookings.php">View User Bookings</a></th>
  </tr> 
 
</table>
<div align="center"><a href="../Guest/Login.php">Logout</a></div>
</body>
</html>