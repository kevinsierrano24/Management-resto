
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("koneksi.php");

$baba=$_POST['namaSTAFF'];
$pass=$_POST['password'];
$jumlah=$_POST['Alamat'];
$nama=$_POST['Umur'];




	$input="insert into tbl_user (kode_user,password,Alamat,Umur)values ('$baba','$pass','$jumlah','$nama')"
	
	;
	if (mysqli_query($conn,$input)){
	echo"<script language=\"javascript\">alert('Data Anda telah diinput');
	window.location.href = \"http://localhost/kevin/management%20resto/daftarstaff.php?username=$username&password=$password\";
	</script>";
	}
	else {
	echo "Error : " . $input  . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
</body>
</html>
