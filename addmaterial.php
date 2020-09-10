<?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from product");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
	$fileName=$_FILES['file']['name'];
    $fname="F".$id.$_FILES['file']['name'];
    $tempFileName = $_FILES['file']['tmp_name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"./".$fname);
$qry=mysql_query("insert into product values('$id','$sname','$cname','$pname','$details','$price','$quantity','$fname')");
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
      <p align="center" class="style4">&nbsp;</p>
      <form id="form1" name="form1" method="post" action="">
        <p align="center" class="style4"><a href="view.php" class="style5">Materials</a> Details</p>
        <table width="80%" border="0" align="center">
          <tr>
            <td width="7%" height="58">&nbsp;</td>
            <td width="19%">&nbsp;</td>
            <td width="21%"><strong>Sports Name </strong></td>
            <td width="22%"><select name="sname" id="sname">
                <option value="select">select</option>
                <option value="Air sports">Air sports</option>
                <option value="Tennis">Tennis</option>
                <option value="Football">Football</option>
                <option value="Volleyball">Volleyball</option>
                <option value="Cricket">Cricket</option>
                <option value="Hockey">Hockey</option>
                <option value="Table Tennis">Table Tennis</option>
            </select></td>
            <td width="13%">&nbsp;</td>
            <td width="18%">&nbsp;</td>
          </tr>
          <tr>
            <td height="37">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Company Name </strong></td>
            <td><label>
              <input name="cname" type="text" id="cname" />
            </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="37">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Product Name </strong></td>
            <td><input name="pname" type="text" id="pname" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="49">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Details</strong></td>
            <td><textarea name="details" id="details"></textarea></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="49">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Price</strong></td>
            <td><label>
              <input name="price" type="text" id="price" />
            </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="35">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Quantity</strong></td>
            <td><input name="quantity" type="text" id="quantity" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="47">&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Image</strong></td>
            <td><input type="file" name="file" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="33">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input name="btn" type="submit" id="btn" value="Submit" />
                <input type="reset" name="Submit2" value="Cancel" /></td>
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