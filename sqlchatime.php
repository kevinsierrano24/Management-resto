<!DOCTYPE html UBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>K drink</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
table.ex1 {
  empty-cells: hide;
}
</style>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">K Drink</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
		        
      </li>
	      
      
	   
      
    </ul>
    
  </div>
</nav>
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">Kodemenu</th>
      <th scope="col">Namamenu</th>
     
	      <th scope="col">jumlah</th>
 <th scope="col">Harga</th>
	        <th scope="col">Button</th>

    </tr>
  </thead>
  

<?php
include("koneksi.php");
$result=mysqli_query($conn,"select * from tbl_chatime order by kode_menu");

while ($row=mysqli_fetch_array ($result)){

echo "<tr align=\"center\"><td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>
	<a href=\"deletedata.php?id=$row[0]&temp=$row[0]\">Delete</a><br>
	<a href=\"prosesklik.php?id=$row[0]&temp=$row[0]\">beli</a><br>"

;
}
?>

</table>
<h4>Keranjang</h4>
<table class="table table-striped">
<thead>
    <tr>
		      <th scope="col">kodemenu</th>
           <th scope="col">namamenu</th>
		         <th scope="col">Qty</th>

      <th scope="col">harga</th>


<?php
include('koneksi.php');
	$input=mysqli_query($conn,"select * from tbl_keranjang order by kode_menu");
	$result=mysqli_query($conn,"select * from tbl_chatime order by kode_menu");

	
while ($row=mysqli_fetch_array ($input)){

echo "<tr align=\"center\"><td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]
<a href=\"http://localhost/kevin2/deletekeranjang.php?id=$row[0]&temp=$row[0]\">Delete</a><br>";





}
?>
<!-- Button trigger modal -->


    </tr>
  </thead>
  </table>
 
 <!-- =========================================================================================
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="exampleModal">
  Bayar
</button>
-->
<!-- Modal -->
<!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
-->
<!-- Trigger/Open The Modal -->
<!-- Trigger/Open The Modal -->

<!-- The Modal -->

  <!-- Modal content -->
 <div class="container" >
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><a href="prosesmodal.php">Pay</a></button><br /><br />
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><a href="sunfest/tampilan.html">Kembali</a></button>

  <!-- Modal -->
 


	</p>
        </div>
       
      </div>
      
    </div>
  </div>
  
</div>
 
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



</body>
</html>
