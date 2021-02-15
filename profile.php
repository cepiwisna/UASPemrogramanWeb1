<?php
include 'sesion.php';
$idreg = $_SESSION["username"];
require_once 'config/koneksi.php';

// echo $idreg;exit;
try{
$sql = "SELECT * FROM users WHERE users.username=?";
$q = $database_connection->prepare($sql);
$q->execute([$idreg]);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

foreach ($q as $row) {
    $id = $row['id'];
    $username = $row['username'];
    $email = $row['email'];
    $gambar = $row['gambar'];  
}


?>

<link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="container rounded bg-white mt-5 mb-5">

        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="home.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
              <!-- <li class="nav-item">
                  <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Logout</a>
                </li>     
              </ul> -->
            </div>
        </nav>

        <div class="row">
            <div class="col-md-3 border-right">
            <form action='config/upload.php' method='POST' enctype='multipart/form-data'>
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="mt-5" src="<?=$gambar?>" width="150">
                <span class="font-weight-bold"><?=$username?></span>
                <span class="text-black-50"><?=$email?></span>
                <div>
                    <input type="file" name="file">
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>

                <span> </span></div>
                </form>
            </div>
            
            <div class="col-md-5 border-right">
            <form action='config/profile.php' method='POST'>
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" placeholder="username" value="<?=$row['username']?>" name="username"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="email" value="<?=$row['email']?>" name="email" ></div>
                    </div>     
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </div>
            </form>
            </div>
        </div>
        <br>
        <footer class="page-footer font-small blue">
          <div class="footer-copyright text-center py-3">
            &copy Copyright by 18111031_CepiWisna_TIFRP18CNSA
          </div>
        </footer>       
</div>