<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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

$id=$_GET['id'];
$ada=false;

$selectkode = "select kode_menu from tbl_keranjang where kode_menu = '$id'";
//echo mysqli_num_rows($selectkode);
//$result = mysqli_query($conn, $selectkode);
//while(mysqli_num_rows($result)>0){
//$ada=true;
//}

if(CheckKey($selectkode)==true){
$test=mysqli_query($conn,"select Qty from tbl_keranjang where kode_menu='$id'");
$row=mysqli_fetch_array($test);
$qty=$row[0];
$temp2=$qty+1;

//$totalharga=$temp2*$harga;
mysqli_query($conn,"UPDATE tbl_keranjang SET Qty = '".$temp2."' WHERE kode_menu = '$id'" );
$harga=mysqli_query($conn,"select harga from tbl_chatime where kode_menu='$id'");
$row=mysqli_fetch_array($harga);
$lala=$row[0];
$ucok=$lala*$temp2;
mysqli_query($conn,"UPDATE tbl_keranjang SET Harga = '".$ucok."' WHERE kode_menu = '$id'" );


$test3=mysqli_query($conn,"select jumlah from tbl_chatime where kode_menu='$id'");
$row=mysqli_fetch_array($test3);
$qty2=$row[0];
$temp3=$qty2-1;
mysqli_query($conn,"UPDATE tbl_chatime SET jumlah = '".$temp3."' WHERE kode_menu = '$id'" );

//mysqli_query($conn,"UPDATE tbl_keranjang SET Totalharga = '".$totalharga."' WHERE kode_menu = '$id'" );
 
 echo "<script language=\"javascript\">;
	window.location.href = \"http://localhost/kevin/management%20resto/table.php?username=kevin&password=kevin\";
	</script>";

}
else{
	$seleksi=mysqli_query($conn,"select * from tbl_chatime where kode_menu = '$id'") or die ('query gagal ' .mysqli_error());
while ($row=mysqli_fetch_array($seleksi)){
echo "<tr align=\"center\"><td>$row[0]<td>$row[1]<td>$row[2]>";
	mysqli_query($conn,"insert into tbl_keranjang (kode_menu,nama_menu,Qty,harga)values ('".$row[0]."','".$row[1]."',1,'".$row[3]."')");
	echo "<script language=\"javascript\">;
	window.location.href = \"http://localhost/kevin/management%20resto/table.php?username=kevin&password=kevin\";
	</script>";
	
	
//$keranjangqty="select Qty from tbl_keranjang where kode_menu=$id "
//$qty1=$keranjangqty+1;
//$qty="insert into tbl_keranjang	(Qty) values ($qty1) where kode_menu=$id";
/*if (mysqli_query($conn,$qty))	{
echo "berhasil insert";
} else {
    echo "Error delete record: " . mysqli_error($conn);
}
*/


$temp=$row[2]-1;

//echo "UPDATE tbl_chatime SET jumlah = '".$temp."' WHERE kode_menu = '".$row[0]."'";
$update=mysqli_query($conn,"UPDATE tbl_chatime SET jumlah = '".$temp."' WHERE kode_menu = '".$row[0]."'");
if($update){
echo "berhasil";
}
else{
echo "gagal";
echo "Error delete record: " . mysqli_error($conn);
}


/*$count="SELECT COUNT(Qty)FROM tbl_keranjang WHERE kode_menu=$id";


if($count){
echo "berhasil";
}
else{
echo "GAGAGL";
}
*/
/*

$input="insert into tbl_keranjang (kode_menu,nama_menu,Qty,harga)values ('".$row[0]."','".$row[1]."',1,'".$row[3]."')"
	
	;
	//window.location.href = \"sqlchatime.php\";
	if (mysqli_query($conn,$input)){
	echo"<script language=\"javascript\">alert('Data Anda telah diinput');	
	</script>";
	}
	else {
	echo "Error : " . $input  . "<br>" . mysqli_error($conn);
	}
	
	
	mysqli_close($conn);
	}
	*/
//batas //

/*$selectkode = "select kode_menu from tbl_keranjang where kode_menu = '$id'";

//$selectqty= mysqli_query($conn,"select Qty from tbl_keranjang where kode_menu ='$id'"); 


if (mysqli_query($conn,$selectkode)){
 $qty="select Qty from tbl_keranjang where kode_menu = '$id'";
$temp2=$qty+1;
mysqli_query($conn,"UPDATE tbl_keranjang SET Qty = '".$temp2."' WHERE kode_menu = '$id'");


echo "<script language=\"javascript\">alert('data berhasil');
	window.location.href = \"sqlchatime.php\";
	</script>";
	
	}
	
	else {
"insert into tbl_keranjang (kode_menu,nama_menu,jumlah,harga)values ('".$row[0]."','".$row[1]."',1,'".$row[3]."')";
	}
	mysqli_close($conn);
	
	}
	
	*/
	
}
}

?>
</body>
</html>
