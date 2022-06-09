<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link href="../css/login.css" rel="stylesheet" />
  </head>
  <body>
    <form action="" method="POST">
      
    <input name="tujuan" type="hidden" value="LOGIN" >
      <div class="imgcontainer">
        <img src="../images/img_avatar2.png" alt="Avatar" class="avatar" />
      </div>

      <div class="container">
        <label for="uname"><b>Username/Email</b></label>
        <input
          type="text"
          placeholder="Enter Username/Email"
          name="uname"
          required
        />

        <label for="psw"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="psw"
          required
        />

        <button type="submit"><a class="masuk" href="../FrontEnd/home.php" >Sign Up</a></button>
        <label>
          <a class="create" href="register.php"> Create your Account</a>
          <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
        </label>
      </div>

      <div class="container" style="background-color: #f1f1f1">
        <button type="button" class="cancelbtn">
          <a class="nav-link" href="../index.php">Cancel</a>
        </button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
