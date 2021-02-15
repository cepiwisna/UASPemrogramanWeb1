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
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <!-- s -->
            </div>
        </nav>
        <br>

        <h1>REGISTER</h1>
        <br>

        <div class="container">
            <form name="formregis" action="config/register.php" method="POST" >
                <div class="form-group">
                    <label for="exampleInputUsername">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Username" required>
                </div>               
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="email@example.com" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Repeat Password</label>
                    <input type="password" name="repassword" class="form-control" id="exampleInputRepeatPassword1" placeholder="Repeat Password" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit" id="regis">Submit</a></button>
                <div class="form-group">
                  <label class="col-md-4 control-label">&nbsp;</label>
                  <div class="form-group">
                    Sudah punya akun? <a href="login.php">Login</a>
                  </div>
                </div>
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