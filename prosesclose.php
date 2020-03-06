<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<p>dfghj</p>
<?php
include ('koneksi.php');
$input="DELETE FROM tbl_keranjang ";

	if (mysqli_query($conn, $input)) {
    echo "<script language=\"javascript\">alert('Tagihan anda sudah Lunas');
	window.location.href = \"http://localhost/kevin/management%20resto/table.php?username=kevin&password=kevin\";
	</script>";
} else {
    echo "Error delete record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>
