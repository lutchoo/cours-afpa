<?php
session_start();
//var_dump($_SESSION);
require_once 'function.php';

if(isset($_POST) && !empty($_POST)){
    $email = $_POST['email'];
      $password = $_POST["password"];
      login($email, $password);
      var_dump($_POST);
     
    if($_SESSION['user']){
      header('location:index.php?message=Vous etes connecter&status=success');
    }else{
      header('location:index.php?message=adresse mail ou mot de passe incorect&status=warning');
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="container">

  <?php if(isset($_GET['message']) && !empty($_GET['message'])){?>
  <div class="alert alert-<?php echo $_GET['status']?> alert-dismissible fade show" role="alert">
    <strong><?php echo $_GET['message'] ?></strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php  } ?>
<h1 class="text-center">Connection</h1>
<?php  if(isset($_SESSION['user'])){ ?>
  <a href="logout.php"class="btn btn-primary">deconection</a>
<?php }else{ ?>
  <a href="newuser.php"  class="btn btn-primary">inscription</a>
<?php } ?>
<form action="index.php" method="POST" class="">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name='email' placeholder="name@example.com">
  </div>
  <label for="inputPassword5" class="form-label">Password</label>
  <input type="password" id="inputPassword5" class="form-control"name="password" aria-describedby="passwordHelpBlock">
  <div id="passwordHelpBlock" class="form-text">
    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
  </div>
  <input type="submit">
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>