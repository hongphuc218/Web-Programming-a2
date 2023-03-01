<?php require_once("fragment/head.php");?>
<link rel="stylesheet" href="style/login_style.css">
<title>Log In Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<?php require_once("fragment/header.php");?>
<nav>
<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="booking.php">BOOK US</a></li>
</ul>
</nav>
<?php require_once("tools/login_tools.php")?>
<main>
<section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="photo/Symbol_Logo.png" style="width: 150px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">Russell Street Medical Login</h4>
                      </div>
      
                      <form method="POST">

                        <p>Please login to your account</p>
                        <div class="form-outline mb-4">
                          <input type="text" id="username" name="username" class="form-control">
                          <label class="form-label" for="username">Username</label>
                        </div>
                        
                        <div class="form-outline mb-4">
                          <input type="password" id="password" name="password" class="form-control" />
                          <label class="form-label" for="password">Password</label>
                          
                        </div>
                        <div class="error"><?php echo $error;?></div>
                        <div class="text-center pt-1 mb-5 pb-1">
                          <input class="btn btn-primary btn-block fa-lg" type="submit" name="admin_login" value="Log in">
                        </div>      
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Welcome to Russell Street Medical Admin Login Page</h4>
                      <p class="small mb-0"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</main>
<footer>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="booking.php">BOOK US</a></li>
    </ul>
<?php require_once("fragment/footer.php");?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>