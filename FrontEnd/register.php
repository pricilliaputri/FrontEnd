<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign Up</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link href="../css/register.css" rel="stylesheet" />
  </head>
  <body>
    <form action="../BackEnd/registerdb.php" style="border: 1px solid #ccc">
    <input type="hidden" name="tujuan" value="DAFTAR">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr />

        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username"  required />

        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email"  required />

        <label><b>Password</b></label>
        <input type="password" placeholder="Password"  required />

        <label>
          <input
            type="checkbox"
            checked="checked"
            name="remember"
            style="margin-bottom: 15px"
          />
          Remember me
        </label>

        <p>
          By creating an account you agree to our
          <a href="#" style="color: dodgerblue">Terms & Privacy</a>.
        </p>

        <div class="clearfix">
          <button type="button" class="cancelbtn">
            <a class="nav-link" href="../index.php">Cancel</a>
          </button>

          <button type="submit" class="signupbtn">Sign Up</button>
        </div>
      </div>
    </form>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
