<!DOCTYPE html>
<html lang="en">
  <head>
    <title>K Drink</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<style>
	.my-custom-scrollbar {
position: relative;
height: 300px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	
		
		<section class="ftco-section ftco-services ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row no-gutters services-section">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="media-body">
                <h3 class="heading mb-3"></h3>
				<a href="prosesmodal.php">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><h3>Pay</h3></button>
  </a>
  <br /><br />
  <a href="http://localhost/kevin2/sunfest/tampilan.html">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><h3>Kembali</h3></button>
</a>
                <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2 text-center d-block">
              <div class="icon"><span class="flaticon-diet"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Keranjang</h3>
				<table class="table table-bordered table-striped mb-0">
    <tr height="1">
		      <th scope="col">kodemenu</th>
           <th scope="col">namamenu</th>
		         <th scope="col">Qty</th>

      <th scope="col">harga</th>
	  </tr>
	  <?php
include('koneksi.php');
	$input=mysqli_query($conn,"select * from tbl_keranjang order by kode_menu");
	$result=mysqli_query($conn,"select * from tbl_chatime order by kode_menu");

	
while ($row=mysqli_fetch_array ($input)){

echo "<tr align=\"center\"><td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]
<a href=\"http://localhost/kevin2/deletekeranjang.php?id=$row[0]&temp=$row[0]\"><font color=#00000>Delete</a><br>";





}
?>
	  </table>
	  
                <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-running"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Menu</h3>
				<div class="table-wrapper-scroll-y my-custom-scrollbar">

               <table  class="table table-bordered table-striped mb-0" >
<thead >
    <tr  >
      <th scope="col" height="1px" >Kodemenu</th>
      <th scope="col" height="1px">Namamenu</th>
     
	      <th scope="col" height="1px">jumlah</th>
 <th scope="col">Harga</th>
	        <th scope="col">Action</th>
			</tr>
			</thead>
			  
<?php
include('koneksi.php');
$result=mysqli_query($conn,"select * from tbl_chatime order by kode_menu");

while ($row=mysqli_fetch_array ($result)){

echo "<tr align=\"center\"><td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>
	<a href=\"http://localhost/kevin2/deletedata.php?id=$row[0]&temp=$row[0]\"><font color=#00000><h6>
Delete</h6></a><br>
	<a href=\"http://localhost/kevin2/prosesklik.php?id=$row[0]&temp=$row[0]\"><font color=#00000><h6>beli</h6></a><br>"

;
}
?>
  <!-- Trigger the modal with a button -->
 
			</table>
			 
                <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
				</div>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
	

    
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">KDrink</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>
