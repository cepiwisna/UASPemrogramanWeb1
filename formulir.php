<html>
    <head>
        <title>Pramuka SMKN 1 Majalaya</title>
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">

        <style>
            h1 {
                text-align-last: center;
            }
        </style>
        
    </head>
    <body>

        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="home.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link" href="index.php">Logout</a>
                    </li>      -->
                </ul>
            </div>
        </nav>
        <br>

        <h1>FORMULIR PENDAFTARAN</h1>
        <br>

        <div class="container">
            <form name="formregis" action="config/formulir.php" method="POST" >
                <div class="form-group">
                    <label for="exampleInputUsername">Nama Lengkap</label>
                    <input type="text" name="namalengkap" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername">Kelas</label>
                    <input type="text" name="kelas" class="form-control" placeholder="Kelas" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername">No HP</label>
                    <input type="text" name="nohp" class="form-control" placeholder="No HP" required>
                </div>
                <div class="form-group">
                    <select name="jeniskelamin" class="form-control">
                        <option disabled selected>jenis kelamin</option>
                        <option value="pria">Pria</option>
                        <option value="perempuan">Peremuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Daftar</a></button>
            </form>
        </div>

      <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">
          &copy Copyright by 18111031_CepiWisna_TIFRP18CNSA
        </div>
      </footer>

      <script language="JavaScript">
        var regis = document.getElementById("regis");
        regis.addEventListener("click", () => {
            var username = document.forms["formregis"]["username"].value;
            var email = document.forms["formregis"]["email"].value;
            var password = document.forms["formregis"]["password"].value;
            var repassword = document.forms["formregis"]["repassword"].value;
    
            if (username == "" && email == "" && password == "" && repassword == "") {
                alert('Darta tidak boleh kosong');
            }else{
                alert('Registrasi Berhasil')
                window.location.replace("home.html");
            }
        });
    </script>
  
    </body>
</html>