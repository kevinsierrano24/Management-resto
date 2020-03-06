<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
include ('koneksi.php');

function CheckKey($query){
include ('koneksi.php');
   $ketemu=mysqli_query($conn,$query);
   if(mysqli_num_rows($ketemu)>0) 
   {
     return true;
   }
   else
   {
     return false;
   }
}
$selectkode = "select antrian from tbl_antrian";
if(CheckKey($selectkode)==true){
$test=mysqli_query($conn,"select antrian from tbl_antrian");
$row=mysqli_fetch_array ($test);
$qty=$row[0];
$temp2=$qty+1;
mysqli_query($conn,"UPDATE tbl_antrian SET antrian = '".$temp2."'" );
echo"$temp2";
}
else	{
$seleksi=mysqli_query($conn,"select antrian from tbl_antrian") or die ('query gagal ' .mysqli_error());


	mysqli_query($conn,"insert into tbl_antrian (antrian)values (1)");
	$selectkode = mysqli_query($conn,"select antrian from tbl_antrian");
$row=mysqli_fetch_array ($selectkode);
$qty=$row[0];
echo"$qty";

}

?>
</body>
</html>
