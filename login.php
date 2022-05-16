<?php session_start();
if (isset($_SESSION['user'])){
    header('location:home.php');
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/litera/bootstrap.css">
    <title>login</title>
</head>
<body>
<?php
        if (isset($_SESSION['errorMessage'])) {
    ?>
    <div class="alert alert-danger">
        <?= $_SESSION['errorMessage'] ?>
    </div> 
    <?php 
    unset($_SESSION['errorMessage']);
    }
?>
<form action="processLogin.php" method="post">
  <div>
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div>
    <label for="exampleInputPassword1">Password</label>
    <input name="pwd" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>