<!doctype html>
<html lang="en">
<style>

*{
margin: 0;
padding: 0;
}
html {
scroll-behavior: smooth;
}
#logo {

margin : -10px;
padding-right : 50px;
}

body {
  min-height: 1100px;
}

.headline4{
    color: black;
		font-family: algerian;
		font-size: 40px;
		text-align: Center;
  }
  
.background3 {
	        background: #333333 no-repeat;
	        background-size: cover;
	        background-attachment:fixed;
	        margin-top:100px;
	        width:100%;
	        height:350px;
	        padding:50px;
          box-sizing:border-box;
	        text-align:left;
          }
		  
.headline3{
            color: #fff;
            font-family: "Raleway",fantasy;
            font-size: 40px;
	        text-align: left;
	        margin-right:100px;
            text-shadow: 3px 2px 1px grey;
	        }
			
.text3{
            color: #fff;
            font-family: "Raleway",serif;
            font-size: 22px;
	        text-align: left;
	        margin-right:100px;
	        }
			
.card-title{
  font-weight: bold;
}

.harga{
  font-weight: bold;
  
}

.navbar-brand {
    font-family: algerian;
  }

</style>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />


    <title>Akun</title>

	<Link rel="icon" href="Logo_Dummy_Barber.png" sizes="32x32">
	<Link rel="icon" href="Logo_Dummy_Barber.png" sizes="192x192">
	
	
    <title>Akun</title>
	
  </head>
 <body>
 
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
?>
  <!--Start Navbar-->

  <nav class="navbar navbar-expand-lg navbar-dark shadow p-2" style="background-color: #000000">
    <div class="container">
        <a class="nav-link active" id="logo" aria-current="page" href="#"><img src="Logo_Dummy_Barber.png" height="50px"></a>
      <a class="navbar-brand" href="#">WEBHAIRSTYLE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
		  <li class="nav-item">
<?php 
		include "koneksi.php";
		$query="SELECT * FROM whspay";
		$result = mysqli_query($host, $query);
		if(mysqli_num_rows($result) > 0)
		{
		 while($row =mysqli_fetch_array($result))
		 {
		  echo '<div style="Color:white">WHSPay Balance : '. $row["saldo"].'</div>';
		 }
		}
?>
		</li>
	  
		<li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact-us">Kontak Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="editakun.php">Pengaturan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!--End Navbar-->

    <!-- Login -->

    <div>

<form class="form" method="post" name="login">
    <div class="imgcontainer" style="padding-top: 2cm;padding-bottom: 1cm;">
     <center>
      <img src="Logo_Dummy_Barber.png" width="150" height="150" alt="Avatar">
     </center>
    </div>
  </form>

</div>

    <!-- End Login -->

<br>
<br>
<br>


   <!-- Layanan Kami - Jumbotron -->


   <section class="jumbotron text-center">
  
	<h4 class="headline4">Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
    <h1 class="headline4">Layanan Barber Kami</h1>
    <br>
    <br>
    <div class="row justify-content-center">
    <div class="card ms-4" style="width: 14rem;">
      <img src="Men's Hair.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> Men's Haircut</h5>
        <p class="card-text"> Gaya dan potongan yang sesuai dengan bentuk wajah anda.</p>
        <br>
        <br>
        <p>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        </p>
        <p class="harga"> Rp.40.000 </p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup_konfirmasi1">Order</button>
      </div>
    </div>
    <div class="card ms-4" style="width: 14rem;">
      <img src="Beard Trim.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Beard Trim</h5>
        <p class="card-text"> Pastikan jenggotmu tetap rapi sesuai dengan bentuk wajah anda.</p>
        <br>
        <p>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        </p>
        <p class="harga"> Rp.10.000 </p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup_konfirmasi2">Order</button>
      </div>
    </div>
    <div class="card ms-4" style="width: 14rem;">
      <img src="Treatment.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Treatment</h5>
        <p class="card-text"> Dapatkan perawatan maksimal oleh kami agar rambut anda tetap sehat dan tampil memukau. </p>
        <p>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star-half fa-lg"></i>
        </p>
        <p class="harga"> Rp.60.000 </p>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup_konfirmasi3">Order</button>
      </div>
    </div>
    <div class="card ms-4" style="width: 14rem;">
      <img src="Wash.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Wash</h5>
        <p class="card-text"> Memelihara kulit kepalamu dengan produk eksklusif kami.</p>
        <br>
        <br>
        <p>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        </p>
        <p class="harga"> Rp.30.000 </p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup_konfirmasi4">Order</button>
		
      </div>
    </div>
  </div>
  
<!-- Modal 1 -->
<div class="modal fade" id="popup_konfirmasi1" tabindex="-1" role="dialog" aria-labelledby="popup_konfirmasi" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="popup_konfirmasi">Konfirmasi</h5>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin membeli layanan ini ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button onclick="location.href = 'invoice.php';" type="button" class="btn btn-primary">Konfirmasi</button>
      </div>
    </div>
  </div>
</div>
  </section>

  <!-- End Modal 1 -->

<!-- Modal 2 -->
<div class="modal fade" id="popup_konfirmasi2" tabindex="-1" role="dialog" aria-labelledby="popup_konfirmasi" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="popup_konfirmasi">Konfirmasi</h5>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin membeli layanan ini ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button onclick="location.href = 'invoice2.php';" type="button" class="btn btn-primary">Konfirmasi</button>

      </div>
    </div>
  </div>
</div>
  </section>

  <!-- End Modal 2 -->

<!-- Modal 3 -->
<div class="modal fade" id="popup_konfirmasi3" tabindex="-1" role="dialog" aria-labelledby="popup_konfirmasi" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="popup_konfirmasi">Konfirmasi</h5>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin membeli layanan ini ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button onclick="location.href = 'invoice3.php';" type="button" class="btn btn-primary">Konfirmasi</button>

      </div>
    </div>
  </div>
</div>
  </section>

  <!-- End Modal 3 -->

<!-- Modal 4 -->
<div class="modal fade" id="popup_konfirmasi4" tabindex="-1" role="dialog" aria-labelledby="popup_konfirmasi" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="popup_konfirmasi">Konfirmasi</h5>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin membeli layanan ini ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button onclick="location.href = 'invoice4.php';" type="button" class="btn btn-primary">Konfirmasi</button>

      </div>
    </div>
  </div>
</div>
  </section>

  <!-- End Modal 4 -->

<div class="background3">
          <h1 class="headline3" id="Contact Us">Contact Us</h1></br>
          <p class="text3">Universitas Pendidikan Indonesia, Kampus Cibiru</p>
          <p class="text3">+61 (8) 8234 3555</p>
          <p class="text3">admin@uideck.com</p>
		  <p class="text3" id="contact-us">Hubungi Via WhatsApp <a href="https://api.whatsapp.com/send?phone=6281939123456">Disini</a></p>
        </div>
		
   <!-- End Layanan Kami - Jumbotron -->



   <!-- Layanan Kami - Horizontal -->

      <!--
   <div class="card mb-3" style="max-width: 540px;">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <img src="Men's Hair.png" alt="100">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Men's Hair</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
 -->





   <!-- End Layanan Kami - Jumbotron -->

        
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  </body>
</html>