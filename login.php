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
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="login.php" >Login</a>
                </li>    
              </ul>
            </div>
        </nav>
        <br>

        <h1>LOGIN</h1>
        <br>

        <div class="container" >
          <form action = "config/login.php" name="formlogin" method="POST" >
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="username" name="username" class="form-control" placeholder="Username"> 
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
                <input type="password"name="password" class="form-control" placeholder="Password">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="login">Submit</a></button>
            <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
            <div class="form-group">
              Belum punya akun? <a href="register.php">Register</a>
            </div>
          </div>
            </form>
        </div>

        <footer class="page-footer font-small blue">
          <div class="footer-copyright text-center py-3">
            &copy Copyright by 18111031_CepiWisna_TIFRP18CNSA
          </div>
        </footer>
      
    </body>
</html>