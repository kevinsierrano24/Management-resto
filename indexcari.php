<?php
include('koneksi.php');
$cari=$_REQUEST['search'];
$test=mysqli_query($conn,"select nama_menu from tbl_chatime where kode_menu='$cari'");
$row=mysqli_fetch_array($test);
$qty=$row[0];
$nama=$qty;
$test2=mysqli_query($conn,"select jumlah from tbl_chatime where kode_menu='$cari'");
$row=mysqli_fetch_array($test2);
$qty3=$row[0];
$jumlah=$qty3;
$test3=mysqli_query($conn,"select harga from tbl_chatime where kode_menu='$cari'");
$row=mysqli_fetch_array($test3);
$qty4=$row[0];
$harga=$qty4;
	mysqli_query($conn,"insert into tbl_cari (kode_menu,nama_menu,Qty,harga)values ('".$cari."','".$nama."','".$jumlah."','".$harga."')");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
#kiri	{
width:50%;
height:100px;
float:left;

}
#kanan	{
width:50%;
height:100%;
float:right;
}
body {
	background: #fafafa url(https://jackrugile.com/images/misc/noise-diagonal.png);
	color: #444;
	font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
	text-shadow: 0 1px 0 #fff;
}

strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
}

table {
	background: #f5f5f5;
	border-collapse: separate;
	box-shadow: inset 0 1px 0 #fff;
	font-size: 12px;
	line-height: 24px;
	margin: 30px auto;
	text-align: left;
	width: 800px;
}	

th {
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 1px;
	width: 1px;
}

th:first-child {
	border-left: 1px solid #777;	
	box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
	box-shadow: inset -1px 1px 0 #999;
}

td {
	border-right: 1px solid #fff;
	border-left: 1px solid #e8e8e8;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}	

td:last-child {
	border-right: 1px solid #e8e8e8;
	box-shadow: inset -1px 0 0 #fff;
}	

tr {
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:nth-child(odd) td {
	background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}	

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}	

tbody:hover td {
	color: transparent;
	text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
	color: #444;
	text-shadow: 0 1px 0 #fff;
}
.my-custom-scrollbar {
position: relative;
height: 200px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h3>K Drink</h3></a>
  

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
		        
      </li>
	      
      
	   
      
    </ul>
    
  </div>
</nav>
<!----
<div class="table-wrapper-scroll-y my-custom-scrollbar">
---->
<table  class="table table-bordered table-striped mb-0" id="kiri" >
<thead >
    <tr  >
      <th scope="col" height="1px" >Kodemenu</th>
      <th scope="col" height="1px">Namamenu</th>
     
	      <th scope="col" height="1px">jumlah</th>
 <th scope="col">Harga</th>
	        <th scope="col">Action</th>
			
			<!------------------------------------------------------------------>
	</tr>
	</thead>
	</div>



<?php
include('koneksi.php');
	$input=mysqli_query($conn,"select * from tbl_keranjang order by kode_menu");
	$result=mysqli_query($conn,"select * from tbl_chatime order by kode_menu");

	
while ($row=mysqli_fetch_array ($input)){

echo "<tr align=\"center\"><td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>
<a href=\"http://localhost/kevin2/deletekeranjang.php?id=$row[0]&temp=$row[0]\">Delete</a><br>";





}
?>

<!-------table keranjang-->
</tr>
</table>
   
  <table  class="table table-bordered table-striped mb-0" id="kanan" >
<thead >
    <tr  >
      <th scope="col" height="1px" >Kodemenu</th>
      <th scope="col" height="1px">Namamenu</th>
     
	      <th scope="col" height="1px">jumlah</th>
 <th scope="col">Harga</th>
	        <th scope="col">Action</th>
			<?php
include('koneksi.php');
	$input=mysqli_query($conn,"select * from tbl_keranjang order by kode_menu");
	$result=mysqli_query($conn,"select * from tbl_cari order by kode_menu");

	
while ($row=mysqli_fetch_array ($result)){

echo "<tr align=\"center\"><td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>
<a href=\"deletedata.php?id=$row[0]&temp=$row[0]\"><h4>
Delete</h4></a><br>
	<a href=\"prosesklik.php?id=$row[0]&temp=$row[0]\"><h4>beli</h4></a><br>";




}
?>


</body>
</html>
