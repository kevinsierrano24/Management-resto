<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
include('koneksi.php');
$id=$_GET['id'];	
$select = mysqli_query ($conn,"SELECT jumlah FROM tbl_chatime WHERE kode_menu = '$id'");
$row=mysqli_fetch_array($select);
$qty=$row[0];
if	($qty <= 0)	{
echo "<script language=\"javascript\">alert('Stock sudah habis');
	window.location.href = \"http://localhost/kevin/management%20resto/table.php?username=kevin&password=kevin\";
	</script>"; 
}
else	{
$seleksi=mysqli_query($conn,"select * from tbl_chatime where kode_menu = '$id'") or die ('query gagal ' .mysqli_error());
while ($row=mysqli_fetch_array($seleksi)){
echo "<tr align=\"center\"><td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>";
	header("location:http://localhost/kevin/management%20resto/prosesbeli.php?id=$row[0]&temp=$row[0]");
}
}
?>
</body>
</html>
