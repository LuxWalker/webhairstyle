<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Wares</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <Link rel="icon" href="Logo_Dummy_Barber.png" sizes="32x32">
        <Link rel="icon" href="Logo_Dummy_Barber.png" sizes="192x192">
        
        <style>
          *{
          margin: 0;
          padding: 0;
          }
          html {
          scroll-behavior: smooth;
          }

          input[type=text], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
          }

          .button1 {
          background-color: #000000;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          }

          button:hover {
          opacity: 0.8;
          }

          .headline1{
          color: #fff;
          font-family: "Raleway",sans-serif;
          font-size: 40px;
	        text-align: center;
	        padding-top: 200px;
	        }

          .headline2{
          color: #fff;
          font-family: "Raleway",sans-serif;
          font-size: 40px;
	        text-align: left;
	        margin-right:100px;
	        }

          .headline3{
          color: #fff;
          font-family: "Raleway",fantasy;
          font-size: 40px;
	        text-align: left;
	        margin-right:100px;
          text-shadow: 3px 2px 1px grey;
	        }

            table{
                border-collapse: collapse;
                width: 65%;
                /* color: #d96459; */
                font-size: 25px;
                text-align: left;
            }

            th{
                border: 1px solid white;
                padding-left: 6px;
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: black;
                color: white;
            }

            tr{
                padding-left: 6px;
                padding-top: 12px;
                padding-bottom: 12px;
                border: 1px solid #ccc;
            }

            td{
                padding-left: 6px;
                padding-top: 12px;
                padding-bottom: 12px;
                border: 1px solid #ccc;
            }

          .text1{
          color: #fff;
          font-family: "Raleway",sans-serif;
          font-size: 22px;
	        text-align: center;
	        }

          .text2{
          color: #fff;
          font-family: "Raleway",sans-serif;
          font-size: 22px;
	        text-align: left;
	        margin-right:100px;
	        }

          .text3{
          color: #fff;
          font-family: "Raleway",serif;
          font-size: 22px;
	        text-align: left;
	        margin-right:100px;
	        }

          .background1 {
	        background: url(model1.png) no-repeat;
	        background-size: cover;
	        width:100%;
	        height:650px;
          box-sizing:border-box;
          }

          .background2 {
	        background: url(model2.png) no-repeat;
	        background-size: cover;
	        background-attachment:fixed;
	        margin-top:100px;
	        width:100%;
	        height:400px;
	        padding:50px;
          box-sizing:border-box;
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

          .nav-link:hover::after {
          content: '';
          display: block;
          border-bottom: 3px solid #fff;
          width: 50%;
          margin: auto;
          padding-bottom: 5px;
          }

          #login {
          margin-left: 300px;
          }
		  
		  #logo {

			margin : -10px;
			padding-right : 50px;
			}

          /* VERSI DESKTOP  */
          @media (min-width:992px){

            .navbar-brand, .nav-link{
            color: #ffffff !important;
            }

            .nav-link {
            text-transform: uppercase;
            margin-right: 30px;
            }
          }

          .nav-link:hover::after {
          content: '';
          display: block;
          border-bottom: 3px solid #3a6f70;
          width: 50%;
          margin: auto;
          padding-bottom: 5px;
          }
		  
		  .middle {
			padding-left : 145px;
		  }
		  
		  #popup {
			padding-top : 125px;
		  }

          .anchor {
	        color: transparent;
          }
            </style>
    </head>

    <body>
        <?php
            include "koneksi.php";
        ?>

        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
            <div class="container">
               <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" id="logo" aria-current="page" href="#"><img src="Logo_Dummy_Barber.png" height="50px"></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="index.php">Halaman Utama</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="index.php">Katalog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" a href="wares.php" text="transparent">wares</a>
					    </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Kontak kami</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="login" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="signup.html">Buat Akun</a>
                        </li>
                      </ul>
                  </div>
              </div>
            </div>
        </nav>

        <div>

        <div class="imgcontainer" style="padding-top: 2cm;padding-bottom: 1cm;">
             <center>
              <img src="Logo_Dummy_Barber.png" width="150" height="150" alt="Avatar">
             </center>
        </div>

        <div class="container">
             <center>
                <h1>>Our Wares<</h1><br />
             </center>
        </div>

        <div class="container">
            <form action="wares.php" style="padding-left: 230px;">
                <label for="urut">urutkan:</label>
                <select name="urutan" id="urut">
                    <option value="tinggi" href="wares.php?urutan=tinggi">harga tertinggi</option>
                    <option value="rendah" href="wares.php?urutan=rendah">harga terendah</option>
                    <option value="reset" href="wares.php?urutan=tinggi">reset</option>
                </select>
                <input type="submit" value="urutkan">
            </form>
            <br />
        </div>

        <div class="container">
            <?php
                if (isset($_GET['urutan'])){
                    if ($_GET['urutan'] == "reset"){
                        $result = mysqli_query($host,"CALL show_layanan()");
                        $all_property = array();
   
                        echo '<center><table class="data-table">
                                <tr class="data-heading">';
                        while ($property = mysqli_fetch_field($result)) {
                            echo '<th>' . $property->name . '</th>';
                            array_push($all_property, $property->name);
                        }
                        echo '</tr>';
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            foreach ($all_property as $item) {
                                echo '<td>' . $row[$item] . '</td>';
                            }
                            echo '</tr>';
                        }
                        echo "</table></center>";
                    }
                    if ($_GET['urutan'] == "tinggi"){
                        $result = mysqli_query($host,"CALL urut_tinggi_layanan();");
                        $all_property = array();
                        
                        echo '<center><table class="data-table">
                                <tr class="data-heading">';
                        while ($property = mysqli_fetch_field($result)) {
                            echo '<th>' . $property->name . '</th>';
                            array_push($all_property, $property->name);
                        }
                        echo '</tr>'; 
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            foreach ($all_property as $item) {
                                echo '<td>' . $row[$item] . '</td>';
                            }
                            echo '</tr>';
                        }
                        echo "</table></center>";
                    
                    }
                    if ($_GET['urutan'] == "rendah"){
                        $result = mysqli_query($host,"CALL urut_rendah_layanan();");
                        $all_property = array();
                        
                        echo '<center><table class="data-table">
                                <tr class="data-heading">';
                        while ($property = mysqli_fetch_field($result)) {
                            echo '<th>' . $property->name . '</th>';
                            array_push($all_property, $property->name);
                        }
                        echo '</tr>';
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            foreach ($all_property as $item) {
                                echo '<td>' . $row[$item] . '</td>';
                            }
                            echo '</tr>';
                        }
                        echo "</table></center>";
                    
                    }
                }
                else{
                    $result = mysqli_query($host,"CALL show_layanan()");
                    $all_property = array();
                    
                    echo '<center><table class="data-table">
                            <tr class="data-heading">';
                    while ($property = mysqli_fetch_field($result)) {
                        echo '<th>' . $property->name . '</th>';
                        array_push($all_property, $property->name);
                    }
                    echo '</tr>';
                    
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        foreach ($all_property as $item) {
                            echo '<td>' . $row[$item] . '</td>';
                        }
                        echo '</tr>';
                    }
                    echo "</table></center>";
                }
            ?>
        </div>

        <!-- <form class="form" method="post" name="login">
            <div class="imgcontainer" style="padding-top: 2cm;padding-bottom: 1cm;">
             <center>
              <img src="Logo_Dummy_Barber.png" width="150" height="150" alt="Avatar">
             </center>
            </div>
            <div class="container">
                <label for="username"><b>Username</b></label>
                 <input type="text" placeholder="Enter Username" name="username" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
				 title="Harus berisi format email yang valid" required>
                <label for="password"><b>Password</b></label>
                 <input type="password" placeholder="Enter Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
				 title="Harus berisi setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih"required>
            <button class="button1" type="submit" data-toggle ="modal" data-target="#ModalLong">Login</button>
            </div>
            <div class="container">
            <button type="button" class="button1" onclick="location.href= 'index.html'">Cancel</button>
            <center><label><input type="checkbox" checked="checked" name="remember"> Remember me</label></center>
            </br>
            <center><span>Lupa <a href="#">password?</a></span></center>
            <center><span>Belum punya Akun? <a href="signup.php">Buat Akun</a></span></center>
            </div>
          </form> -->

        </div>
        
        <div class="background3">
          <h1 class="headline3" id="Contact Us">Contact Us</h1></br>
          <p class="text3">Universitas Pendidikan Indonesia, Kampus Cibiru</p>
          <p class="text3">+61 (8) 8234 3555</p>
          <p class="text3">admin@uideck.com</p>
		  <p class="text3" id="contact-us">Hubungi Via WhatsApp <a href="https://api.whatsapp.com/send?phone=6281939123456">Disini</a></p>
        </div>
		
    </body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>