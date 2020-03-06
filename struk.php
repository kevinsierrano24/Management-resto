<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
</head>

<body>
<h1 align="center">Kdrink</h1>
<h3 align="left">Order</h3>
<p>======================================================================================================================================================================================================================================</p>
<table class="table table-striped" align="left" >
<thead>
    <tr>
		      <th scope="col" align="left">kodemenu</th>
           <th scope="col" align="center">namamenu</th>
		         <th scope="col">Qty</th>

      <th scope="col">harga</th>
</tr>
</thead>

<?php
include('koneksi.php');
$result=mysqli_query($conn,"select * from tbl_keranjang order by kode_menu");

	
while ($row=mysqli_fetch_array ($result)){

echo "<tr align=\"center\"><td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]";
}
?>
</table>
<p>======================================================================================================================================================================</p>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
	<?php
	include('koneksi.php');
	$result=mysqli_query($conn,"select Harga from tbl_hargastruk ");

while ($row=mysqli_fetch_array ($result)){

$a=$row[0];
}

	$result2=mysqli_query($conn,"select Bayar from tbl_hargastruk ");

echo "<align=\"right\">Total : <tr align=\"right\">$a<br><br>" ;
while ($row=mysqli_fetch_array ($result2)){

$b=$row[0];
}
	echo "Bayar : <tr align=\"left\">$b<br><br>" ;

$result3=mysqli_query($conn,"select Kembalian from tbl_hargastruk ");

while ($row=mysqli_fetch_array ($result3)){

$c=$row[0];
}
	echo "Kembalian : <tr align=\"left\">$c<br><br>" ;
?>
<?php
/*
include('koneksi.php');


$selectkode = mysqli_query($conn,"select * from tbl_que");
$row=mysqli_fetch_array($selectkode);
$qty2=$row[0];

if($qty2){

$qty=$row[0]+1;

echo "No antrian : $qty";
}
else {
$seleksi=mysqli_query($conn,"select * from tbl_que ") or die ('query gagal ' .mysqli_error());
while ($row=mysqli_fetch_array($seleksi)){
echo "<tr align=\"center\"><td>$row[0]>" ;
	$c=mysqli_query($conn,"insert into tbl_que (que)values (1)");
	$d=mysqli_query($conn,"select * from tbl_que ");
	echo "No antrian : $d" ;
	
	
	echo "Error delete record: " . mysqli_error($conn);

}
}
*/
?>
<br /><br />
<a href="prosesclose.php">
<button class="btn" ><i class="fa fa-folder" ></i>Print</button>
</a>
<script>
window.print() 
</script>
</body>
</html>
