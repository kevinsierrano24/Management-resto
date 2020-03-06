<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("koneksi.php");
$id=$_GET['id'];


	$input="DELETE FROM tbl_chatime WHERE kode_menu='$id'";
	if (mysqli_query($conn, $input)) {
    echo "<script language=\"javascript\">alert('Data Anda telah dihapus');
	window.location.href = \"table.php?username=kevin&password=kevin\";
	</script>";
} else {
    echo "Error delete record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>
