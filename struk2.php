<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>K Drink</title>
<style>

td	{
font-size:-10px;
}
p	{
margin-left:60px;
}
.posisi{
margin-left:10px;
color:#999999;
}
a{
text-decoration:none;
color:#000000;
}

</style>
</head>

<body>
<table align="center">
<tr align="center" class="posisi" ><font size="3">KDRINK</font></tr><br />
<tr align="left"><font size="2">Jalan Neraka No 33cc</font></tr><br />
<tr align="left"><font size="2">Medan</font></tr>
</table>

<table class="table table-striped"    align="left" frame="above" width="1" height="3" >
<thead>
    <tr >
		      <th scope="col" align="left"  ><font size="1">kodemenu</font></th>
           <th scope="col" align="left"	><font size="1">namamenu</font></th>
		         <th scope="col" align="justify"><font size="1">Qty</font></th>
      <th scope="col"  align="justify"><font size="1">harga</font></th>
</tr>
</thead>

<?php
include('koneksi.php');
$result=mysqli_query($conn,"select * from tbl_keranjang order by kode_menu");

	
while ($row=mysqli_fetch_array($result)){

echo "<tr align=\"left\" ><td><font size=\"1px\">$row[0]<br><td><font size=\"1px\">$row[1]<td><font size=\"1px\">$row[2]<td><font size=\"1px\">$row[3]</font>";
echo"<br>";

}
?>

<tr>
	<?php
	
	include('koneksi.php');
	$result=mysqli_query($conn,"select Harga from tbl_hargastruk ");

while ($row=mysqli_fetch_array ($result)){

$a=$row[0];
}


//menangkap data dari database "harga"
	$result2=mysqli_query($conn,"select Bayar from tbl_hargastruk ");

//echo "<align=\"justify\">Total : <tr >$a<br><br>" ;
//menangkap data dari databse "bayar"
while ($row=mysqli_fetch_array ($result2)){

$b=$row[0];
}
	//echo "Bayar : <tr >$b<br><br>" ;
	
	//Menangkap data dari database "kembalian"

$result3=mysqli_query($conn,"select Kembalian from tbl_hargastruk ");

while ($row=mysqli_fetch_array ($result3)){

$c=$row[0];
}
	//echo "Kembalian : <tr >$c<br><br>" ;
	
?>

</table>
<br />
<br />
<br />
<br />
<br />
<table>
		<tr><font size="2">Total:<?php echo "$a";?></font>
		<br /></tr>
		</tr>
		
		<tr><font size="2">Bayar:<?php echo "$b";?></font></tr>
		<br />
		
		
		<tr><font size="2">Kembalian:<?php echo "$c";?></font></tr>
		<br />
		
		

<tr id="posisi"><font size="-1px">No Antrian:<?php
//No antrian
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

?>	</font></tr>


<script>window.print()</script>
<br />
	<tr><font size="2"><a href="prosesclose.php"><?php echo"Today is " . date("Y-m-d") .",". date("l"). "<br>"; ?></a></font></tr>
	
	</table>	

</body>
</html>
