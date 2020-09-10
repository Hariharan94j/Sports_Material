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
          <td width="50%" height="84"><span class="style1">Sports Management System </span></td>
          <td width="3%">&nbsp;</td>
          <td width="47%" valign="bottom"><table width="100%" border="0">
            <tr>
              <td><div align="center" class="style3"><a href="adminhome.php">Home</a></div></td>
              <td><div align="center" class="style3"><a href="tournaments.php">Add Tournaments</a></div></td>
              <td><div align="center" class="style3"><a href="stf.php">Staff</a></div></td>
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
      <p align="center" class="style4"><a href="tournaments.php" class="style6">Incharge</a> Details</p>
      <form id="form1" name="form1" method="post" action="">
        <table width="80%" border="0" align="center">

          <tr>
            <td width="5%" height="58">&nbsp;</td>
            <td width="22%">&nbsp;</td>
            <td width="1%" height="32">&nbsp;</td>
            <td width="18%"><strong>Department  Name </strong></td>
            <td width="28%"><label>
              <select name="sports" id="sports">
                <option value="select">select</option>
                <option value="Air sports">Air sports</option>
                <option value="Tennis">Tennis</option>
                <option value="Football">Football</option>
                <option value="Volleyball">Volleyball</option>
                <option value="Cricket">Cricket</option>
                <option value="Hockey">Hockey</option>
                <option value="Table Tennis">Table Tennis</option>
              </select>
            </label></td>
            <td width="26%">&nbsp;</td>
          </tr>
          <tr>
            <td height="37">&nbsp;</td>
            <td>&nbsp;</td>
            <td height="32">&nbsp;</td>
            <td><strong>Staff  Name </strong></td>
            <td><label>
            <select name="iname">
			<?php
			$qrt=mysql_query("select * from register");
			while($row=mysql_fetch_array($qrt))
			{
			?>
			<option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
			<?php
			}
			?>
            </select>
            </label></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="49">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label>
              <input name="btn" type="submit" id="btn" value="Submit" />
              <input type="submit" name="Submit2" value="Cancel" />
            </label></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="49">&nbsp;</td>
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