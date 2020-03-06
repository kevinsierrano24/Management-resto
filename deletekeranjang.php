<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include ('koneksi.php');
$id=$_GET['id'];



$dk="DELETE FROM tbl_keranjang WHERE kode_menu='$id'";
	if (mysqli_query($conn, $dk)) {
	include('koneksi.php');
	$test=mysqli_query($conn,"select jumlah from tbl_chatime where kode_menu='$id'");
$row=mysqli_fetch_array($test);
$qty=$row[0];
$nama=$qty+1;
mysqli_query($conn,"UPDATE tbl_chatime SET jumlah = '".$nama."' WHERE kode_menu = '$id'" );



	
    echo "<script language=\"javascript\">alert('Data Anda telah dihapus');
	window.location.href = \"http://localhost/kevin/management%20resto/table.php?username=kevin&password=kevin\";
	</script>";
} else {
    echo "Error delete record: " . mysqli_error($conn);
}


mysqli_close($conn);
/*
$result=mysqli_query($conn,"select jumlah from tbl_chatime order by kode_menu=$id");

while  ($row=mysqli_fetch_array($result)){

echo "<tr align=\"center\"><td>$row[0]";
}
*/
?>

</body>
</html>
