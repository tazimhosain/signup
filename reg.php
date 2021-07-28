<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="vendors/css/normalize.css">

    <!-- Our CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="images/">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>create account</title>
</head>

<body>

  <?php
    $con = new mysqli('localhost', 'root', '', 'signup');

    if(isset($_POST['submit'])){
      $uname = mysqli_real_escape_string($con, $_POST['username']);
      $email = mysqli_real_escape_string($con, $_POST['mail']);
      $phone = mysqli_real_escape_string($con, $_POST['phone']);
      $passw = mysqli_real_escape_string($con, $_POST['pass']);
      $cpassw = mysqli_real_escape_string($con, $_POST['cpass']);

      $emailquery = mysqli_query($con, "SELECT * FROM usersignup WHERE email='$email' " ); 

      $emailcount = mysqli_num_rows($emailquery);

      if($emailcount>0){
        ?>
        <script>alert("This Email Already Used")</script>
        <?php
      }else{
        if($passw === $cpassw){
            $iquery = mysqli_query($con, "INSERT INTO usersignup(name, email, phone, password, cpassword) VALUES ('$uname', '$email', '$phone', '$passw', '$cpassw')");

            if($iquery){
              ?>
            <script>alert("Insert SuccessFully")</script>
            <?php
            }else{
              ?>
            <script>alert("Insert Error")</script>
            <?php
            }

        }else{
          ?>
        <script>alert("Password Not Matched")</script>
        <?php
        }
      }

    }

  ?>

    <div class="form_box">
        <h2 class="my-3 text-center">Create Account</h2>
    <form action="" method="POST">
            <div class="input-group my-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-address-book"></i></div>
              </div>
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="input-group my-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-envelope"></i></div>
              </div>
              <input type="email" class="form-control" name="mail" placeholder="Your Email">
            </div>
            <div class="input-group my-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-phone"></i></div>
              </div>
              <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
            </div>
            <div class="input-group my-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-lock"></i></div>
              </div>
              <input type="password" class="form-control" name="pass" placeholder="Create Password">
            </div>
            <div class="input-group my-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-lock"></i></div>
              </div>
              <input type="password" class="form-control" name="cpass" placeholder="Repeat Password">
            </div>

            <input type="submit" value="Create Account" name="submit" class="btn btn-primary btn-block">
      </form>
      <p class="lead my-3 text-center">Have an account? <a href="">Log In</a></p>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- ============= FONT AWESOME JS ============= -->
    <script src="https://kit.fontawesome.com/4e9f6e2c6b.js" crossorigin="anonymous"></script>
    
    <!-- Optional JavaScript -->
    <script src="js/script.js"></script>


</body>

</html>