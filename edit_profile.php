<?php
include 'session.php';
// echo $_SESSION['username'];exit;
$idreg = $_SESSION["username"];
require_once 'config/koneksi.php';

// echo $idreg;exit;
try{
$sql = "SELECT * FROM register WHERE register.username=?";
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
    $kotalahir = $row['kota_lahir'];
    $tanggallahir = $row['tgl_lahir'];
    $pekerjaan = $row['pekerjaan'];  
    
}


?>

<style>
/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
            overflow: hidden;
            background-color: green;
            position: sticky;
            position: -webkit-sticky;
            top: 0;
        }

        /* Style the navigation bar links */
        .navbar a {
            float: left;
            display: block;
            color: white;

            padding: 14px 20px;
        }


        /* Right-aligned link */
        .navbar a.right {
            float: right;
        }

        /* Change color on hover */
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Active/current link */
        .navbar a.active {
            background-color: #666;
            color: white;
        }
body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
.footer {
            padding: 5px;
            text-align: center;
            background: green;
            color: white;

        }
.center{
    text-align: center;
}
</style>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" rel="stylesheet"/>
<div class="container rounded bg-white mt-5 mb-5">

<div class="navbar">
        <div class="topnav-left">
            <!-- <a href="#" class="active">Home</a> -->
        </div>

        <!-- <div class="topnav-right">
            
        </div> -->

        <!-- Right-aligned links -->
        <div class="topnav-right">
        <!-- <a href="edit_profile.php">Edit Profile</a> -->
            <a href="halamansesudahlogin.php">Kembali</a>
        </div>

        

    </div>
    
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
            <form action='config/edit_profile.php' method='POST'>
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
                    <div class="row mt-2"> 
                        <div class="col-md-6"><label class="labels">Tempat Lahir</label><input type="text" class="form-control" placeholder="tempat lahir" value="<?=$row['kota_lahir']?>" name="kota_lahir"></div>
                        <div class="col-md-6"><label class="labels">Tanggal Lahir</label><input type="date" class="form-control" value="<?=$row['tgl_lahir']?>" name="tgl_lahir"></div>
                    </div> 
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Pekerjaan</label><input type="text" class="form-control" placeholder="pekerjaan" value="<?=$row['pekerjaan']?>" name="pekerjaan"></div>
                    </div>              
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </div>
            </form>
            </div>
        </div>
        <ul class="footer">
        <footer>GreenPeace Indonesia</footer>
        <footer> @Copyright by 18111141_RifkyMuhammadFadilah_TIFRP18CIDA</footer>
        </ul>
    
</div>
</div>
</div>