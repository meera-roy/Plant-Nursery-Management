<?php
   $name="";
   $gender="";
   $marital="";
   $department="";
   $basicsalary="";
   $TA="";
   $DA="";
   $HRA="";
   $LIC="";
   $PF="";
   $DED="";
   $NET="";
   
   if(isset($_POST["btn_submit"]))
   {
	   $firstname=$_POST["first_name"];
	   $lastname=$_POST["last_name"];
	   $gender=$_POST["gender"];
	   $marital=$_POST["marital"];
	   $department=$_POST["department"];
	   $basicsalary=$_POST["basicsalary"];
	   
	   $name=$firstname." ".$lastname;
	   
	if($basicsalary>=10000)
    {
	   $TA=$basicsalary*.40;
	   $DA=$basicsalary*.35;
	   $HRA=$basicsalary*.30;
	   $LIC=$basicsalary*.25;
	   $PF=$basicsalary*.20;
	   $DED=$LIC+$PF;
	   $NET=$basicsalary+$TA+$DA+$HRA+($LIC+$PF);
    }
    else if($basicsalary>=5000 & $basicsalary<10000)
    {
	   $TA=$basicsalary*.35;
	   $DA=$basicsalary*.30;
	   $HRA=$basicsalary*.25;
	   $LIC=$basicsalary*.20;
	   $PF=$basicsalary*.15;
	   $DED=$LIC+$PF;
	   $NET=$basicsalary+$TA+$DA+$HRA+($LIC+$PF);
    }
   else if($basicsalary<5000)
   {
       $TA=$basicsalary*.30;
	   $DA=$basicsalary*.25;
	   $HRA=$basicsalary*.20;
	   $LIC=$basicsalary*.15;
	   $PF=$basicsalary*.10;
	   $DED=$LIC+$PF;
	   $NET=$basicsalary+$TA+$DA+$HRA+($LIC+$PF);
   }
   }
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Basic Salary</title>
</head>

<body>
<form method="post">
<table align="center" border="2">
<tr>
<th>First Name:</th>
<td><input type="text" name="first_name"></td>
</tr>
<tr>
<th>Last Name:</th>
<td><input type="text" name="last_name"></td>
</tr>
<tr>
<th>Gender:</th>
<td><input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
</td>
</tr>
<tr>
<th>Marital:</th>
<td><input type="radio" name="marital" value="Single">Single
    <input type="radio" name="marital" value="Married">Married
</td>
</tr>
<tr>
<th>Department:</th>
<td>
<select name="department">
<option value="">---select---</option>
<option value="BCA">bca</option>
<option value="BTTM">bttm</option>
<option value="BCOM">bcom</option>
</select>
</td>
</tr>
<tr>
<th>Basic Salary:</th>
<td><input type="text" name="basicsalary"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="btn_submit" value="SUBMIT">
<input type="reset" name="btn_cancel" value="CANCEL">
</td>
</tr>
</table>
<table align="center" border="2">
<tr>
<th>Name:</th>
<td><?php echo $name ?></td>
</tr>
<tr>
<th>Gender:</th>
<td><?php echo $gender ?></td>
</tr>
<tr>
<th>Marital:</pre></th>
<td><?php echo $marital ?></td>
</tr>
<tr>
<th>Department:</th>
<td><?php echo $department ?></td>
</tr>
<tr>
<th>basicsalary:</th>
<td><?php echo $basicsalary ?></td>
</tr>
<tr>
<th>TA:</th>
<td><?php echo $TA ?></td>
</tr>
<tr>
<th>DA:</th>
<td><?php echo $DA ?></td>
</tr>
<tr>
<th>HRA</th>
<td><?php echo $HRA ?></td>
</tr>
<tr>
<th>LIC:</th>
<td><?php echo $LIC ?></td>
</tr>
<tr>
<th>PF</th>
<td><?php echo $PF ?></td>
</tr>
<tr>
<th>DED:</th>
<td><?php echo $DED ?></td>
</tr>
<tr>
<th>NET:</th>
<td><?php echo $NET ?></td>
</tr>
</table>
</form>
</body>
</html>

