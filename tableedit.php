<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>K Drink/title>
</head>

<body>
<?php
include('koneksi.php');
$id=$_GET['id'];
$temp=$_GET['temp'];
$query = mysqli_query($conn,"select * from tbl_chatime where kode_menu = '$id'")or die ('query gagal' . mysqli_error());
$row=mysqli_fetch_array($query);
?>
<div class="form" align="center">
<form id="forml" method="post" name="forml" action="simpandataedit2.php">
<label>Kode Menu
<input type="text" name="kodemenu" value="<?php echo $row[0];?>" />
<input type="hidden" name="id" value="<?php echo $row[0];?>" />

<br />
<br />
</label>
<label>Nama Menu
<input type="text" name="namamenu" value="<?php echo $row[1];?>"/>
<br />
<br />
</label>
<label>Jumlah
<input type="text" name="jumlah" value="<?php echo $row[2];?>"/>
<br />
<br />
</label>

<label>Harga
<input type="text" name="harga"value="<?php echo $row[3];?>" />
<br />
<br />
</label>
<input type="submit" value="Input" />
</form>
</body>
</html>
