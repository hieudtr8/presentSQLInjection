<?php 
  require 'db/connect.php';
  if(isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = "";

    // $sql = "SELECT * FROM `tbl_admin` WHERE `username` = '" . $username . "' AND `password` = '" .   $password . "'";
    $sql = "SELECT * FROM `tbl_admin` WHERE `username` = '" . $username . "' AND `password` = '" .   $password . "'";
    //' OR '1' = '1
    echo $sql;
    $result = mysqli_query($databaseConnection, $sql);
    if(mysqli_num_rows($result) > 0){
      echo '<script type="text/JavaScript"> 
      </script>';
      // alert("Login successfully")
      // window.location.href="bankSystem.php";
    } else {
      $error = "Incorrect Username or Password";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assests/img/favicon-32x32.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- font awesome -->
    <link rel="stylesheet" href="assets/css/all.css">
    <script type="text/javascript" src="assests/js/all.js"></script>

    <link rel="stylesheet" href="assests/css/main.css">
    <script type="text/javascript" src="assests/js/main.js" defer></script>
    <title>Bank Administration</title>
</head>

<body>
  <div class="bg pt-5 ">
    <div class="container border px-5">
      <h2 class='my-4 text-center'>Login Administration Account</h2>
      <form id='login-form' action="" method="post">
        <div class="mb-4">
          <label for="username" class="form-label">Username</label>
          <input type="text" name='username' class="form-control" id="username" placeholder="Username">
        </div>
        <div class="mb-2">
          <label for="password" class="form-label">Password</label>
                <input type="password" name='password' class="form-control" id="password" placeholder="Password">
            </div>
            <span class="error"><?php if(!empty($error)) { echo $error; } ?></span>
            <input type="submit" name="btn_login" id='btn_login' value="Login" class='btn btn-primary mx-auto d-grid mb-2 mt-3'>
          </form>
        </div>
  </div>
</body>