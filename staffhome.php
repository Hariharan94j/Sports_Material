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
              <td>&nbsp;</td>
              <td><div align="center" class="style3"><a href="viewbook.php">View </a></div></td>
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
      <p align="center" class="style4"> <a href="view.php" class="style5">Materials</a> Details</p>
      <form id="form1" name="form1" method="post" action="">
        <table width="70%" border="0" align="center">
          <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">Select Sports Name </th>
            <th scope="col"><select name="sname" id="sname">
              <option value="select">select</option>
              <option value="Air sports">Air sports</option>
              <option value="Tennis">Tennis</option>
              <option value="Football">Football</option>
              <option value="Volleyball">Volleyball</option>
              <option value="Cricket">Cricket</option>
              <option value="Hockey">Hockey</option>
              <option value="Table Tennis">Table Tennis</option>
            </select></th>
            <th scope="col"><div align="left">
              <input name="btn" type="submit" id="btn" value="Submit" />
            </div></th>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <table width="80%" border="1" align="center">
          <tr>
            <td width="7%" height="49" bgcolor="#33CCFF"><div align="center"><strong>Sl.No</strong></div></td>
            <td width="21%" bgcolor="#33CCFF"><div align="center"><strong>Company Name </strong></div></td>
            <td width="18%" bgcolor="#33CCFF"><div align="center"><strong>Product Name </strong></div></td>
            <td width="17%" bgcolor="#33CCFF"><div align="center"><strong>Image</strong></div></td>
            <td width="17%" bgcolor="#33CCFF"><div align="center" class="style5"><strong>Status</strong></div></td>
          </tr>
          <?php
		  if(isset($_POST['btn']))
		  {
		  $i=1;
		  $qry=mysql_query("select * from product where sname='$sname'");
		  while($row=mysql_fetch_array($qry))
		  {
		  ?>
          <tr>
            <td height="40"><div align="center"><?php echo $i;?></div></td>
            <td><div align="center"><?php echo $row['cname'];?></div></td>
            <td><div align="center"><?php echo $row['pname'];?></div></td>
            <td><div align="center"><img src="./<?php echo $row['fname'];?>" width="100" height="100"/></div></td>
            <td><a href="book.php?id=<?php echo $row['id'];?>">View</a></td>
          </tr>
          <?php
		 $i++;
		 }
		 }
		 ?>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
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