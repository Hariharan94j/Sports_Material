<?php
 include("dbconnect.php");
 session_start();
extract($_POST);

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
.style5 {color: #000000}
.style6 {color: #000000; font-weight: bold; }
</style>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td height="89" valign="top" bgcolor="#33CCFF"><table width="100%" border="0">
        <tr>
          <td width="50%" height="84"><span class="style1">Sports </span><span class="style1"><strong>Material Shopping</strong></span></td>
          <td width="3%">&nbsp;</td>
          <td width="47%" valign="bottom"><table width="100%" border="0">
            <tr>
              <td><div align="center" class="style3"><a href="adminhome.php">Home</a></div></td>
              <td><div align="center" class="style3"><a href="addmaterial.php">Add Material </a></div></td>
              <td><div align="center" class="style3"><a href="view1.php">View</a></div></td>
              <td><div align="center" class="style3"><a href="view.php">View  Materials</a></div></td>
			   <td><div align="center" class="style3"><a href="index.php">Logout</a></div></td>
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
      <p align="center" class="style4">User Details</p>
      <form id="form1" name="form1" method="post" action="">
        <table width="80%" border="0" align="center">
          <tr>
            <td width="9%" height="36" bgcolor="#33CCFF"><div align="center" class="style6">Sl.No</div></td>
            <td width="17%" bgcolor="#33CCFF"><div align="center" class="style6">Name</div></td>
            <td width="21%" bgcolor="#33CCFF"><div align="center" class="style6">Address</div></td>
            <td width="18%" bgcolor="#33CCFF"><div align="center" class="style6">phone Number </div></td>
            <td width="17%" bgcolor="#33CCFF"><div align="center" class="style6">Email</div></td>
          </tr>
          <?php
		  $i=1;
		  $qry=mysql_query("select * from register");
		  while($row=mysql_fetch_array($qry))
		  {
		  ?>
          <tr>
            <td height="40"><div align="center"><?php echo $i;?></div></td>
            <td><div align="center"><?php echo $row['name'];?> </div></td>
            <td><div align="center"><?php echo $row['address'];?></div></td>
            <td><div align="center"><?php echo $row['pnumber'];?></div></td>
            <td><div align="center"><?php echo $row['email'];?></div></td>
            <?php
			$name=$row['name'];
			$qr=mysql_query("select * from incharge where name='$name'");
			while($rw=mysql_fetch_array($qr))
			{
			?>
            <?php
		  }
		  ?>
          </tr>
          <?php
		 $i++;
		 }
		 ?>
          <tr>
            <td height="58">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </form></td>
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