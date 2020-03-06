
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("koneksi.php");

$baba=$_POST['kodemenu'];
$nama=$_POST['namamenu'];
$jumlah=$_POST['jumlah'];

$harga=$_POST['harga'];
	$input="insert into tbl_chatime (kode_menu,nama_menu,jumlah,harga)values ('$baba','$nama','$jumlah','$harga')"
	
	;
	if (mysqli_query($conn,$input)){
	echo"<script language=\"javascript\">alert('Data Anda telah diinput');
	window.location.href = \"http://localhost/kevin/management%20resto/tablerestoran.php\";
	</script>";
	}
	else {
	echo "Error : " . $input  . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
	
</body>
</html>
