<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
include ('koneksi.php');
$input="DELETE FROM tbl_undangann ";

	if (mysqli_query($conn, $input)) {
    echo "<script language=\"javascript\">alert('Tagihan anda sudah Lunas');
	window.location.href = \"index.php\";
	</script>";
} else {
    echo "Error delete record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
