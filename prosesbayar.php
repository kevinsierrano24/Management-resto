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

$seleksi=mysqli_query($conn,"select * from tbl_keranjang where kode_menu = '$id'") or die ('query gagal ' .mysqli_error());
while ($row=mysqli_fetch_array($seleksi)){

echo "<tr align=\"center\"><td>$row[0]<td>$row[1]<td>$row[2]>";

if (mysqli_query($conn,$seleksi))	{
echo "<script language=\"javascript\">alert('struk.php');
	window.location.href = \"sqlchatime.php\";
	</script>";
} else {
    echo "Error delete record: " . mysqli_error($conn);
}
}
?>

?>
</body>
</html>
