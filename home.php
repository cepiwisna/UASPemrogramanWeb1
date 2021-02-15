<?php
include 'sesion.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pramuka SMKN 1 Majalaya</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style type="text/css">
        
            body{
              background-size: cover;
            }

            h1{
                text-align: center;
                color: white;
            }
               
        </style>

    </head>

    <body background="images/pram.jpg" >
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Logout</a>
                </li>     
              </ul>
            </div>
        </nav>
        <br>

        <h1>TENTANG PRAMUKA SMKN 1 MAJALAYA</h1>
        <br>

        <div class="container">
            <div class="card-columns">
              <div class="card" style="width: 18rem;">
                <img src="images/logopram.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Selayang Pandang Gerakan Pramuka SMKN 1 MAJALAYA</h5>
                  <p class="card-text">Berdirinya organisasi Gerakan Pramuka SMKN 1 Majalaya dimulai pada tahun 2010 (tepat 3 tahun setelah sekolah SMKN 1 MAJALAYA didirikan).</p>
                  <a href="selayang_pandang.php" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="images/ambalan.jpg" class="card-img-top"  class ="card"alt="...">
              <div class="card-body">
                <h5 class="card-title">AMBALAN KIHAJAR DEWANTARA – RD. DEWI SARTIKA
                  </h5>
                <p class="card-text">Ambalan Penegak atau sering hanya disebut ambalan adalah satuan organik dalam Gerakan Pramuka yang terdiri atas paling banyak 32 orang Pramuka Penegak.</p>
                <a href="ambalan.php" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card-columns">
              <div class="card" style="width: 18rem;">
                <img src="images/logopram.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Formulir Pendaftaran</h5>
                  <p class="card-text">Silahkan isi formulir jika ingin bergabung dengan ekstrakulikuler Pramuka.</p>
                  <a href="formulir.php" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>              
        </div>

        <footer class="page-footer font-small blue">
          <div class="footer-copyright text-center py-3">
            &copy Copyright by 18111031_CepiWisna_TIFRP18CNSA
          </div>
        </footer>

    </body>
</html>