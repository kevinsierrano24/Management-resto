<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
  <style>
            .page-container {
                text-align: left;
                margin: 10px 0px 0px 0px;
            }
            
            .input-container > input {
                padding: 1px;
                outline: none !important;
                box-shadow: none !important;
                text-align: center;
            }

            span.tap {
                font-size: 22px;
            }

        </style>
<script>
				function hanyaAngka(evt)	{
				var charCode	=	(evt.which) ? evt.which : event.keyCode
				if (charCode  > 31 && (charCode <48 || charCode > 57))
				return false;
				return true;
				}
				
				</script>
<!--===============================================================================================-->	
	
	<link rel="stylesheet" type="text/css" href="inputmenu.css">
<link rel="stylesheet" href="css/easy-numpad.css">

</head>

<body>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" align="center" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title"> K Drink </h1>
        </div>
        <div class="modal-body">
          <p> 
	



<?php
include ('koneksi.php');





$result=mysqli_query($conn,"SELECT SUM(Harga) FROM tbl_keranjang");

while ($row=mysqli_fetch_array ($result)){

echo "<h2>Harga : <tr align=\"Left\"><td>$row[0]</h2>";





}


// define variables and set to empty values
$nameErr = "";
$name =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Cash is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[1-10000000 ]*$/",$name)) {
      $nameErr = ""; 
    }
  }
  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" target="_blank">  

  Cash: <input type="text" name="name" value="<?php echo $name;?>"  >
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <?php




include ('koneksi.php');
$result2=mysqli_query($conn,"SELECT SUM(Harga) FROM tbl_keranjang");

if($row=mysqli_fetch_array ($result2)){

 $result2=$row[0];
 
//$d=date("Y-m-d");

	


//mysqli_query($conn,"insert into tbl_rincian (Waktu,harga)values ('".$d."','".$result2."')");



$b=$name;

$z=$b-$result2;








echo " <h2>Kembalian :$z </h2>
	<a href=\"insertrincian.php\">Submit</a><br>"
	




;
	mysqli_query($conn,"INSERT INTO tbl_hargastruk(Harga,Bayar,Kembalian) VALUES ($result2,$b,$z)");


}
else{
echo "gagal";
}

  ?>
 		

</form>
 





  
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/easy-numpad.js"></script>
    <script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>
