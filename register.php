<?php
 include("dbconnect.php");
 session_start();
extract($_POST);
 //$qry=mysql_query("select * from package");

if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from register");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
$qry=mysql_query("insert into register(id,name,gender,address,pnumber,email,uname,password)values('$id','$name','$gender','$address','$pnumber','$email','$uname','$password')");
if($qry)
{

echo "<script>alert('Data Save');</script>";
header("location:staff.php");
}
else
{
echo "<script>alert('Data Not Save');</script>";

}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
a{
text-decoration:none;
color:#FF0000;
}
.style3 {font-size: 18px; font-weight: bold; }
.style4 {
	font-size: 24px;
	font-weight: bold;
}
.style6 {
	color: #000000;
	font-weight: bold;
	font-size: 18px;
}
</style>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td height="89" valign="top" bgcolor="#33CCFF"><table width="100%" border="0">
      <tr>
        <td width="60%" height="84"><span class="style1">Sports </span><span class="style1"><strong>Material Shopping</strong></span></td>
        <td width="7%">&nbsp;</td>
        <td width="33%" valign="bottom"><table width="100%" border="0">
            <tr>
              <td><div align="center" class="style3"><a href="index.php">Home</a></div></td>
              <td><div align="center" class="style3"><a href="admin.php">Admin</a></div></td>
              <td><div align="center" class="style3"><a href="user.php">User</a></div></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><p>&nbsp;</p>
      <p class="style4">Welcome To User Register:</p>
      <form id="form1" name="form1" method="post" action="">
        <table width="80%" border="0" align="center">
          <tr>
            <td width="7%">&nbsp;</td>
            <td width="30%">&nbsp;</td>
            <td width="12%">&nbsp;</td>
            <td width="26%">&nbsp;</td>
            <td width="19%">&nbsp;</td>
            <td width="6%">&nbsp;</td>
          </tr>
          <tr>
            <td height="34">&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2"><div align="center" class="style6">User Register </div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="58">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Name</strong></td>
            <td><label>
              <input name="name" type="text" id="name" required="required" />
            </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="37">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Gender</strong></td>
            <td><label>
              <input name="gender" type="radio" value="Male" />
              </label>
              Male
  <label>
  <input name="gender" type="radio" value="Gender" />
  </label>
              Female</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="49">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Address</strong></td>
            <td><textarea name="address" cols="30" id="address" required="required"></textarea></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="49">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Phone Number </strong></td>
            <td><input name="pnumber" type="text" id="pnumber"  maxlength="10" required="required" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="35">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Email Id </strong></td>
            <td><input name="email" type="email" id="email" required="required" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="47">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>User Name </strong></td>
            <td><input name="uname" type="text" id="uname" maxlength="10" required="required" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="33">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Password</strong></td>
            <td><input name="password" type="password" id="password" maxlength="10" required="required" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label>
              <input name="btn" type="submit" id="btn" value="Register" />
              <input type="reset" name="Submit2" value="Cancel" />
            </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </form>
      <p class="style4">&nbsp;</p>
    </td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td height="39" bgcolor="#33CCFF"><div align="center"><strong>@2017 All Rights  By Admin</strong> </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>