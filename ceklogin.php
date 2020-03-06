<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
 
// menghubungkan dengan koneksi
include ('koneksi.php');

 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
echo $username;
$password = $_POST['password'];
 echo $password;
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from tbl_admin where username='$username' and pas='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:http://localhost/kevin/management%20resto/admin.html");
}else{
	header("location:#");
}
?>
</body>
</html>
