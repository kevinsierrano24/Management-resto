<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="inputmenu.css">

<title>Untitled Document</title>
<script>
				function hanyaAngka(evt)	{
				var charCode	=	(evt.which) ? evt.which : event.keyCode
				if (charCode  > 31 && (charCode <48 || charCode > 57))
				return false;
				return true;
				}
				
				</script>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="simpandataedit.php" method="post" name="forml" id="forml">
              <div class="form-label-group">
                <input type="text" id="kodemenu" class="form-control"  required autofocus>
                <label >Kode Menu</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="namamenu" class="form-control" required>
                <label>Nama menu</label>
              </div>

             <div class="form-label-group">
                <input type="text" id="jumlah" class="form-control" onkeypress="return hanyaAngka(event)" required>
                <label >jumlah</label>
				
              </div>
			  <div class="form-label-group">
                <input type="text" id="harga" class="form-control" required>
                <label >Harga</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" ><h4>Input Menu</h4></button>
              <hr class="my-4">
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
