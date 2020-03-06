<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form name="forml" id="forml" action="masuksql.php">

<label>NoMenu
<input type="text" name="Namamenu" />
</label>
<br />
<label>Kode Menu
<input type="text" name="kodemenu" />
</label>
<br />
<label>Harga
<input type="text" name="harga" />
</label>
<br />
<br />
<input type="submit" value="submit" />
</form>



<?php
include("koneksi.php");
mysqli_fetch_array("select * from tbl_chatime order by kode_menu");

$row=

?>
</body>
</html>
