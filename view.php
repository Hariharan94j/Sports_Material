<?php
 include("dbconnect.php");
extract($_POST);
 //$qry=mysql_query("select * from package");

  
if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from incharge");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
$qry=mysql_query("insert into incharge(id,dept,name)values('$id','$sports','$iname')");
if($qry)
{

echo "<script>alert('Data Save');</script>";
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
.style6 {color: #000000}
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
    </table></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><p>&nbsp;</p>
      <p align="center" class="style4"><a href="tournaments.php" class="style6">Materials </a> Details</p>
      <form id="form1" name="form1" method="post" action="">
        <table width="80%" border="1" align="center">
          <tr>
            <td width="7%" height="49" bgcolor="#33CCFF"><div align="center"><strong>Sl.No</strong></div></td>
            <td width="19%" bgcolor="#33CCFF"><div align="center"><strong>Sports Name</strong></div></td>
            <td width="21%" bgcolor="#33CCFF"><div align="center"><strong>Company Name </strong></div></td>
            <td width="18%" bgcolor="#33CCFF"><div align="center"><strong>Product Name </strong></div></td>
            <td width="17%" bgcolor="#33CCFF"><div align="center"><strong>Quantity</strong></div></td>
            <td width="17%" bgcolor="#33CCFF"><div align="center"><strong>Image</strong></div></td>
          </tr>
          <?php
		  $i=1;
		  $qry=mysql_query("select * from product");
		  while($row=mysql_fetch_array($qry))
		  {
		  ?>
          <tr>
            <td height="40"><div align="center"><?php echo $i;?></div></td>
            <td><div align="center"><?php echo $row['sname'];?> </div></td>
            <td><div align="center"><?php echo $row['cname'];?></div></td>
            <td><div align="center"><?php echo $row['pname'];?></div></td>
            <td><div align="center"><?php echo $row['quantity'];?></div></td>
            <td><div align="center"><img src="./<?php echo $row['fname'];?>" width="100" height="100"/></div></td>
          </tr> 
          <?php
		 $i++;
		 }
		 ?>
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