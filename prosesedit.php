<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include ('koneksi.php');

$a=$_POST['kodemenu'];
$b=$_POST['namamenu'];
$c=$_POST['jumlah'];
$d=$_POST['harga'];

$f=$_POST['id'];

$query = "update tbl_chatime set kode_menu = '$a' , name_menu= '$b' , jumlah = '$c' , harga ='$d' where kode_menu ='$f'";
if (mysqli_query($conn, $query)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>
