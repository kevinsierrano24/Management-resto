<?php
include ('koneksi.php');

@ob_start();
session_start();


$username =   mysqli_real_escape_string($conn,$_REQUEST['username']);
$password =  mysqli_real_escape_string($conn,$_REQUEST['password']);

 $nama=$_SESSION['username'];
 $data2 = mysqli_query($conn,"SELECT * FROM tbl_admin where username='$nama' ");

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"SELECT * FROM tbl_admin where username='$username ' and pas='$password'")
;
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 $row=mysqli_fetch_row($data);
 $cek2 = mysqli_num_rows($data2);
echo $cek;
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
 

	
echo "Selamat Datang";


if($cek2 > 0)	{
$_SESSION['username'] = $nama;
	$_SESSION['status'] = "login";
 

	

}

}

else{
	echo "<script language=\"javascript\">;
	window.location.href = \"http://localhost/kevin/management%20resto/sunfest/index.html\";
	</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>K Drink</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="admin.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>K</b>D</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>K</b>Drink</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">\
                      </div>
                     
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                      </div>
                     
                    </a>
                  </li>
                 
                <!-- inner menu: contains the actual data -->
                
                 
          <!-- Tasks: style can be found in dropdown.less -->
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

               
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
            
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        </div>
       
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <div class="container" >
		 <li>
          <a href="cekrincian.php?username=<?php echo $username;?>&password=<?php echo $password;?>">
            <i class="fa fa-home"></i> <span>Cek Rincian</span>
            </span>		   </a>          </li>
</div>
        
          
       		  <li>
          <a href="tablerestoran.php?username=<?php echo $username;?>&password=<?php echo $password;?>">
            <i class="glyphicon glyphicon-cloud"></i> <span>Input menu</span>
            </span>			</a>           </li>
		   
        <li>
          <a href="jumlahstaff.php?username=<?php echo $username;?>&password=<?php echo $password;?>">
            <i class="fa fa-th"></i> <span>Jumlah staff</span>
            </span>		  </a></li>
		   
       <li>
          <a href="jumlahadmin.php?username=<?php echo $username;?>&password=<?php echo $password;?>">
            <i class="glyphicon glyphicon-list-alt"></i> <span>Jumlah Admin</span>
            </span>		 </a></li>
         
        </li>
        
		 <li>
          <a href="daftarstaff.php?username=<?php echo $username;?>&password=<?php echo $password;?>">
            <i class="fa fa-laptop"></i> <span>Daftar Staff</span>
            </span>		   </a></li>
	<li>
		<a href="daftaradmin.php?username=<?php echo $username;?>&password=<?php echo $password;?>">
            <i class="fa fa-edit"></i> <span>
Daftar Admin</span>      </a>  
<li>
		<a href="cekstock.php?username=<?php echo $username;?>&password=<?php echo $password;?>">
            <i class="fa fa-table"></i> <span>
Cek Stock</span>  </a></li>
        
        
        <li>
		<a href="sunfest/index.html">
            <i class="fa fa-envelope"></i> <span>
Sign out</span>          </a>        </li>
       
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <img src="../welcome.jpg" height="300" >
	  
      
    </section>
<footer class="footer-area">
	

        <div class="container">
		
            <div class="row text-center">
                <p class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  by <a href="#" target="_blank">KDrink</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
        </div>
    </footer>
    <!-- Main content -->
   
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
         
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
       
              <!-- /. tools -->

             
                <!-- ./col -->
               
              <!-- /.row -->
          
</div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
