<?php
include("dbconnect.php");
extract($_POST);
if(isset($_POST['btn']))
{
$qry=mysql_query("select * from register where uname='$uname' && password='$password'");
$num=mysql_num_rows($qry);
if($num==1)
{
header("location:staffhome.php");
}
else
{
echo "<script>alert('Login UnSuccessfull')</script>";
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
          <td width="60%" height="84"><span class="style1">Sports Management System </span></td>
          <td width="7%">&nbsp;</td>
          <td width="33%" valign="bottom"><table width="100%" border="0">
            <tr>
              <td><div align="center" class="style3"><a href="index.php">Home</a></div></td>
              <td><div align="center" class="style3"><a href="admin.php">Admin</a></div></td>
              <td><div align="center" class="style3"><a href="staff.php">Staff</a></div></td>
            </tr>
          </table></td>
        </tr>
      </table>      
    </td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><p>&nbsp;</p>
      <p class="style4">Welcome To Staff Login:</p>
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
            <td colspan="2"><div align="center" class="style6">Staff Login </div></td>
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
            <td><strong>User Name </strong></td>
            <td><label>
              <input name="uname" type="text" id="uname" />
            </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="37">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Password</strong></td>
            <td><label>
              <input name="password" type="password" id="password" />
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
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label>
              <input name="btn" type="submit" id="btn" value="Login" />
            <a href="register.php"><strong>New Register              </strong></a></label></td>
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