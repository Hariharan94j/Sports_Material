<?php
 include("dbconnect.php");
 session_start();
extract($_POST);
if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from material");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
	
$qry=mysql_query("insert into material(id,sname,cname,particulars,quantity)values('$id','$sname','$cname','$particulars','$quantity')");
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
.style5 {color: #000000}
</style>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td height="89" valign="top" bgcolor="#33CCFF"><table width="100%" border="0">
        <tr>
          <td width="50%" height="84"><span class="style1">Sports Management System </span></td>
          <td width="3%">&nbsp;</td>
          <td width="47%" valign="bottom"><table width="100%" border="0">
            <tr>
              <td><div align="center" class="style3"><a href="Staffhome.php">Home</a></div></td>
              <td><div align="center" class="style3"><a href="materials.php">Add Materials</a></div></td>
              <td><div align="center" class="style3"><a href="viewevent.php">View Event </a></div></td>
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
      <p align="center" class="style4"> <a href="view.php" class="style5">Tournaments </a> Details</p>
      <form id="form1" name="form1" method="post" action="">
        <table width="80%" border="0" align="center">
          <tr>
            <td width="7%" height="36"><div align="center"><strong>Sl.No</strong></div></td>
            <td width="19%"><div align="center"><strong>Sports Name</strong></div></td>
            <td width="21%"><div align="center">
              <p><strong>Tournament </strong><strong>Type </strong></p>
              </div></td>
            <td width="18%"><div align="center"><strong>Place</strong></div></td>
            <td width="17%"><div align="center"><strong>Date</strong></div></td>
            <td width="17%"><div align="center"><strong>Time</strong></div></td>
            <td width="17%"><div align="center"><strong>Incharge</strong></div></td>
          </tr>
          <?php
		  $i=1;
		  $qry=mysql_query("select * from tournament");
		  while($row=mysql_fetch_array($qry))
		  {
		  ?>
          <tr>
            <td height="40"><div align="center"><?php echo $i;?></div></td>
            <td><div align="center"><?php echo $row['sname'];?> </div></td>
            <td><div align="center"><?php echo $row['tname'];?></div></td>
            <td><div align="center"><?php echo $row['place'];?></div></td>
            <td><div align="center"><?php echo $row['date'];?></div></td>
            <td><div align="center"><?php echo $row['time'];?></div></td>
            <td><div align="center"><?php echo $row['iname'];?></div></td>
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
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="37">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="49">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="49">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="35">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="47">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="33">&nbsp;</td>
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
            <td>&nbsp;</td>
            <td>&nbsp;</td>
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
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
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