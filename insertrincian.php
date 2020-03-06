<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
include('koneksi.php');
$result3=mysqli_query($conn,"SELECT SUM(Harga) FROM tbl_keranjang");
$d=date("Y-m-d");
$row=mysqli_fetch_array($result3);
$lala=$row[0];
$shift=mysqli_query($conn,"SELECT * FROM cekshift order by nama");
$row=mysqli_fetch_array ($shift);

$a=$row[0];
 
	





mysqli_query($conn,"insert into tbl_rincian (Waktu,harga,nama_staff)values ('".$d."','".$lala."','".$a."')");

	header("location:http://localhost/kevin/management%20resto/struk2.php");

?>
</body>
</html>
